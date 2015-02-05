<?php
drupal_add_js(drupal_get_path('module', 'eds_properties') . '/js/map.js');

static $map_id = 0;
$output = '';

if (!$teaser) {
    $output .= theme('eds_property_quicks', array('node' => $node));
}

$report_nodetypes = variable_get('eds_report_nodetypes', array());
if (array_key_exists($node->type, $report_nodetypes)) {
    if ($report_nodetypes[$node->type]['status'] == 1) {
        $output .= eds_report_add_link($node->nid, 'eds_properties', true);     
    }
}

$output .= '<div id="top-col">';
if (!$teaser) {
    $output .= '<div id="property-sub-nav">';
    $output .= '<div class="tab active"> <span class="left">&nbsp;</span> <span class="middle">';
    $output .= t('Property') . '</span> <span class="right">&nbsp;</span> </div>';
    $query = db_select('field_data_field_demograph_prop_id', 'prop');
    $query->fields('prop', array('entity_id'));
    $query->condition('prop.field_demograph_prop_id_value',$node->nid);
    $result = $query->execute()->fetchAllAssoc('entity_id');
    if (!empty($result)) {
        $output .= '<div class="tab"> <span class="left">&nbsp;</span> <span class="middle">';
        $output .= l(t('Demographics'), 'eds/property/demographics/' . $node->nid);
        $output .= '</span> <span class="right">&nbsp;</span> </div>';
    }
    $output .= '</div>';
}
$output .= '</div>';

$output .= theme('eds_property_address', array('node' => $node));


$output .= '<div id="left-col">';

$output .= theme('eds_property_photos', array('node' => $node, 'teaser' => $teaser));




















$output .= ' <div id="location" class="'.((!empty($node->content['attachment']) || !empty($node->field_additional_information))?('page_after'):('')).'">';
$output .= '<div class="title-page-pdf">' . $node->title . '</div>';
$output .= '  <div class="title">' . t('Location') . '</div>';

if ($node->field_location) {

    drupal_add_js('http://maps.googleapis.com/maps/api/js?v=3&language=en&sensor=false&libraries=geometry');
    $gmap = array();
    $gmap['#settings'] = gmap_defaults();

    $markers = array();
    //$marker_type    = 'drupal';
    
    $field_location = field_get_items('node', $node, 'field_location');
    $gmap['#settings']['latitude']  = $field_location[0]['latitude'];
    $gmap['#settings']['longitude'] = $field_location[0]['longitude'];
    $gmap['#settings']['id'] = rand(1000,9999);
    
    $marker_image = "marker.png";
    $marker = base_path() . variable_get('gmap_markerfiles', drupal_get_path('module', 'gmap') .'/markers/') . $marker_image;
    
    $markers[0] = array(
        //'markername' => $marker_type,
        'latitude'   => $field_location[0]['latitude'], //$node->location['lat'],
        'longitude'  => $field_location[0]['longitude'], //$node->location['lon'],
        // 'link'       => url('eds/property/' . $node->nid),
        'offset'     => 0,
        'opt'        => array('title' => $node->title),
        'text'       => false,
        'icon' => $marker
    ); 
    
    $output .= '<div id="gmap-wrapper">' . theme('gmap', array('element'=> array('#gmap_settings' => $gmap['#settings']))) . '</div>';

    $output .= '<script type="text/javascript">
                    jQuery(window).load(function() {
                        mapInit('. json_encode($markers) .','. json_encode($gmap['#settings']) .',"gmap-'. $gmap['#settings']['id'] .'-gmap0",false);
                    });
                </script>';
    
}
$output .= '    </div>';



















if (!empty($node->field_additional_information)) {
    if ($_SERVER['REQUEST_URI']!='/printpdf/eds/report'){
        $output .= '        <div id="additional-information">';
        $output .= '<div class="title-page-pdf">' . $node->title . '</div>';
        $output .= '  <div class="title">' . t('Additional Information') . '</div>';
        $output .= '            <div class="content">';

        $field_additional_information = field_view_field(
            'node',
            $node,
            'field_additional_information',
            array('label' => 'hidden')
        );
        $output .= render($field_additional_information);

        $output .= '            </div>';
        $output .= '        </div>';
    } else {
        $output .= theme('eds_property_details', array('node' => $node));
    }
} 
$output .= '    </div><!-- .left-col end -->';


    $output .= '    <div id="right-col">';
    if ($_SERVER['REQUEST_URI']!='/printpdf/eds/report'){
            $output .= theme('eds_property_details', array('node' => $node));
        } else {
            if (!empty($node->field_additional_information)) {
                $output .= '        <div id="additional-information" class="right">';
                $output .= '<div class="title-page-pdf">' . $node->title . '</div>';
                $output .= '  <div class="title">' . t('Additional Information') . '</div>';
                $output .= '            <div class="content">';

                $field_additional_information = field_view_field(
                    'node',
                    $node,
                    'field_additional_information',
                    array('label' => 'hidden')
                );
                $output .= render($field_additional_information);

                $output .= '            </div>';
                $output .= '        </div>';
            }
        }



    if (!empty($node->content['attachment'])) {
        $output .= '        <div id="attachments">';
        $output .= '                <div class="title">' . t('Attachments') . '</div>';
        $output .= $node->content['attachment']['#value'];
        $output .= '        </div>';
    }


    $output .= '    </div><!-- .right-col end -->';


$output .= '    <div class="clearer"> </div>';
$output .= '<input type="hidden" id="nodeUid" name="nodeUid" value="'. $node->uid .'" />';
$output .= '<input type="hidden" id="nodeUid" name="nodeId" value="'. $node->nid .'" />';






echo $output;
