<?php

define('EXPORT_ACTIVE', 1);
define('EXPORT_PENDING', 0);
define('EXPORT_DENIED', -1);

function _eds_properties_generate_export_api_key()
{
    return(sha1($_SERVER['SERVER_NAME'] . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));
}

/**
 * This function generates JSON data representative of the properties in the database.
 * It will also parse the POST request to ensure there is a valid API key.
 */
function eds_properties_export()
{
    // Require a POST in order to make this work
    if (empty($_POST)) {
        drupal_not_found();
    	module_invoke_all('exit');
    	exit; 
    }

    // Generate the API key for this request (for comparison reasons)
    $api = _eds_properties_generate_export_api_key();

    // If they do not submit an api key they do not have access.
    // If they submit an api key but it does not match what it should be they do not have access.
    if (!$_POST['api'] || $_POST['api'] != $api) {
        drupal_access_denied();
    	module_invoke_all('exit');
    	exit; 
    }
    
    // The only gain export access if they are marked active in the system
    $result = db_query("SELECT * FROM {eds_properties_export_api_keys} WHERE api_key = '%s' AND status = %d", $api, EXPORT_ACTIVE);
    if (db_num_rows($result) != 1) {
        drupal_access_denied();
    	module_invoke_all('exit');
    	exit; 
    }
    $exporter = db_fetch_object($result);

    // Log this export
    db_query("UPDATE {eds_properties_export_api_keys} SET last_export = %d, number_of_exports = %d WHERE api_key = '%s'", time(), $exporter->number_of_exports + 1, $api);
    $active_properties = array();

    $query = "SELECT nid FROM {node} WHERE status = 1 AND type = 'eds_properties'";
    $where = " AND changed >= " . $exporter->last_export; // Fetch only changes since the last update
    $export_deletes = true;
    
    // Export everything if they send an "all" parameter
    // Export everything if there is no last_export on record
    if (array_key_exists('all', $_POST) || $exporter->last_export < 1) {
        $where = '';
        $export_deletes = false;
    }
    $query .= $where;

    $results = db_query($query);
    while ($n = db_fetch_object($results)) {
        $node = node_load($n->nid);
        $p = array();
        $p['id'] = $node->nid;
        $p['name'] = $node->title;
        $p['url'] = url('node/' . $node->nid, null, null, true);
        $p['address'] = $node->location;
        $p['address']['state'] = $p['address']['province'];
    
        // Remove excess data from the address
        foreach (array('eid', 'lid', 'type', 'source', 'is_primary', 'fax', 'phone', 'province', 'lat', 'lon', 'country', 'name') as $key) {
            unset($p['address'][$key]);
        }
        $p['address']['county'] = $node->county;

        // Prepare the photos array
        $p['photos'] = array();
        if (!empty($node->photos)) {
            foreach ($node->photos as $photo) {
                $p['photos'][] = array('url' => str_replace('+', '%20', url($photo->photo_path, null, null, true)), 'title' => $photo->title, 'alt' => $photo->alt, 'id' => $photo->pid);
            }
        }

        // Prepare the urls array
        $p['urls'] = array();
        if (!empty($node->urls)) {
            foreach ($node->urls as $url) {
                $p['urls'][] = array('url' => $url->url, 'title' => $url->title, 'id' => $url->urlid);
            }
        }

        // Build the details array with all the additional fields
        foreach (array('primary_alternate_contact', 'alternate_contact_email', 'secondary_alternate_contact', 'alternate_contact_phone', 'alternate_contact_company_name', 'alternate_contact_company_url', 'property_type', 'property_for_sale', 'property_for_lease', 'zoning_type', 'acreage', 'rail_access', 'building_type', 'nearest_interstate_distance', 'ceiling_height', 'number_of_parking_spaces', 'office_sq_footage', 'manufacturing_sq_footage', 'retail_sq_footage', 'warehouse_sq_footage', 'sq_footage', 'space_divisible_to', 'year_built', 'building_dimensions', 'construction_type', 'overhead_crane_1_capacity', 'overhead_crane_2_capacity', 'overhead_crane_3_capacity', 'column_spacing', 'no_of_ground_level_loading_docks', 'no_of_high_loading_docks', 'sprinkler_system', 'site_type', 'rail_provider', 'environmental_statement', 'primary_anchor_tenant', 'secondary_anchor_tenant', 'date_available', 'previous_use', 'frontage', 'sale_cost_description', 'sale_additional_expense', 'sale_actual_price', 'property_for_lease', 'lease_cost_description', 'lease_additional_expense', 'lease_actual_per_month', 'lease_actual_per_year') as $key) {
            $p['details'][$key] = str_replace('"', '\"', $node->$key);
        }
        $active_properties[] = $p;
    }

    $deleted_properties = array('properties' => array(), 'photos' => array(), 'urls' => array());
    // If the request is for "all" then we will not hand out deleted data: all is meant to be a replacement of data
    if ($export_deletes) {
        // Deleted properties
        $results = db_query("SELECT nid FROM {eds_properties} WHERE deleted_on >= %d", $exporter->last_export);
        while ($n = db_fetch_object($results)) {
            $deleted_properties['properties'][] = $n->nid;
        }

        // Deleted property photos
        $results = db_query("SELECT pid,nid FROM {eds_properties_photos} WHERE deleted_on >= %d", $exporter->last_export);
        while ($n = db_fetch_object($results)) {
            $deleted_properties['photos'][] = array('id' => $n->pid, 'property_id' => $n->nid);
        }

        // Deleted property photos
        $results = db_query("SELECT urlid,nid FROM {eds_properties_urls} WHERE deleted_on >= %d", $exporter->last_export);
        while ($n = db_fetch_object($results)) {
            $deleted_properties['urls'][] = array('id' => $n->urlid, 'property_id' => $n->nid);
        }
    }
    
    drupal_set_header('Content-Type: application/json; charset=utf-8');
    print drupal_to_js(array('active' => $active_properties, 'deleted' => $deleted_properties));
	module_invoke_all('exit');
	exit; 
}

/**
 * This function will record a request for an API Key into the database
 * all new requests are marked as "pending"
 * subsequent requests update the "last_request" column and increment the "number_of_requests" column
 */
function eds_properties_export_request_api_key()
{
    $api = _eds_properties_generate_export_api_key();
    
    $results = db_query("SELECT * FROM {eds_properties_export_api_keys} WHERE api_key = '%s'", $api);
    $api_key = db_fetch_object($results);
    if ($api_key) {
        watchdog("api key request", t("Request number !num from !ip", array('!num' => $api_key->number_of_requests + 1, '!ip' => $_SERVER['REMOTE_ADDR'])));
        $result = db_query("UPDATE {eds_properties_export_api_keys} SET last_request = %d, number_of_requests = %d WHERE api_key = '%s'", time(), $api_key->number_of_requests + 1, $api);
    } else {
        watchdog("api key request", t("Initial API key request from !ip", array('!ip' => $_SERVER['REMOTE_ADDR'])));
        $result = db_query("INSERT INTO {eds_properties_export_api_keys} (aid, ip_address, user_agent, api_key, status, created, last_request, number_of_requests, number_of_exports) VALUES('%s', '%s', '%s', '%s', %d, %d, %d, 1, 0)", db_next_id("{eds_properties_export_api_keys}_aid"), $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $api, EXPORT_PENDING, time(), time());
    }
    if ($result === false) {
        watchdog("api key request", t("DB Failure: !error", array('!error' => db_error())), WATCHDOG_ERROR);
    }
}

/**
 * This function provides a form to approve/deny the API Key requests
 * We may also edit the description of an API key
 */
function eds_properties_export_api_keys_admin()
{
    $form = array();
    $form['requests'] = array(
        '#title'    => t('Property Export API Key Requests'),
        '#tree'     => true,
    );
    
    $results = db_query("SELECT * FROM {eds_properties_export_api_keys} ORDER BY status DESC, created ASC");
    while($request = $results->fetchObject()) {
        $form['requests'][$request->aid]['aid'] = array(
            '#type'     =>  'hidden',
            '#value'    =>  $request->aid,
        );
        $form['requests'][$request->aid]['ip_address'] = array(
            '#type'     =>  'item',
            '#value'    =>  $request->ip_address,
        );
        $form['requests'][$request->aid]['user_agent'] = array(
            '#type'     =>  'item',
            '#value'    =>  $request->user_agent,
        );
        $form['requests'][$request->aid]['api_key'] = array(
            '#type'     =>  'item',
            '#value'    =>  $request->api_key,
        );
        $form['requests'][$request->aid]['description'] = array(
            '#type'             =>  'textfield',
            '#default_value'    =>  $request->description,
            '#size'             =>  20,
        );
        $form['requests'][$request->aid]['created'] = array(
            '#type'     =>  'item',
            '#value'    =>  format_date($request->created, 'short'),
        );
        $form['requests'][$request->aid]['last_request'] = array(
            '#type'     =>  'item',
            '#value'    =>  t('!interval ago', array('!interval' => format_interval(time() - $request->last_request))),
        );
        $form['requests'][$request->aid]['number_of_requests'] = array(
            '#type'     =>  'item',
            '#value'    =>  $request->number_of_requests,
        );
        $form['requests'][$request->aid]['status'] = array(
            '#type'             =>  'select',
            '#default_value'    =>  $request->status,
            '#options'          => array(
                EXPORT_ACTIVE => t('Active'),
                EXPORT_PENDING => t('Pending'),
                EXPORT_DENIED => t('Denied'),
            ),
        );
    }

    $form['submit'] = array(
        '#type'  => 'submit', 
        '#value' => t('Save')
    );

    return $form;
}

/**
 * This function handles the actual saving when the admin form is saved/submitted
 */
function eds_properties_export_api_keys_admin_submit($form_id, $form_values)
{
    foreach ($form_values['requests'] as $request) {
        db_query("UPDATE {eds_properties_export_api_keys} SET description = '%s', status = %d WHERE aid = %d", $request['description'], $request['status'], $request['aid']);
    }
    drupal_set_message(t('The Property Export API Key data have been saved.'));
}

/**
 * Theme for the export api keys admin form
 */
//function theme_eds_properties_export_api_keys_admin($form)
//{
//    drupal_add_css(drupal_get_path('module', 'eds_properties') . '/support/css/properties_export_api_keys_admin.css', 'module');
//    $rows = array();
//
//    foreach (element_children($form['requests']) as $aid) {
//        $item = &$form['requests'][$aid];
//        $rows[] = array(
//            array('data' => drupal_render($item['ip_address']), 'class' => 'ip_address'),
//            array('data' => drupal_render($item['user_agent']), 'class' => 'user_agent'),
//            array('data' => drupal_render($item['api_key']), 'class' => 'api_key'),
//            array('data' => drupal_render($item['description']), 'class' => 'description'),
//            array('data' => drupal_render($item['created']), 'class' => 'created'),
//            array('data' => drupal_render($item['last_request']), 'class' => 'last_request'),
//            array('data' => drupal_render($item['number_of_requests']), 'class' => 'number_of_requests'),
//            array('data' => drupal_render($item['status']), 'class' => 'status'),
//            );
//    }
//
//    $header = array(t('IP'), t('User Agent'), t('API Key'), t('Description'), t('Created'), t('Last Request'), t('# of Requests'), t('Status'));
//
//    $output = theme('table', $header, $rows);
//    $output .= drupal_render($form);
//
//    return($output);
//}