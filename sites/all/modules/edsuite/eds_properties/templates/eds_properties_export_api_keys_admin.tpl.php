<?php

drupal_add_css(drupal_get_path('module', 'eds_properties') . '/support/css/properties_export_api_keys_admin.css', 'module');
$rows = array();

foreach (element_children($form['requests']) as $aid) {
    $item = &$form['requests'][$aid];
    $rows[] = array(
        array('data' => drupal_render($item['ip_address']), 'class' => 'ip_address'),
        array('data' => drupal_render($item['user_agent']), 'class' => 'user_agent'),
        array('data' => drupal_render($item['api_key']), 'class' => 'api_key'),
        array('data' => drupal_render($item['description']), 'class' => 'description'),
        array('data' => drupal_render($item['created']), 'class' => 'created'),
        array('data' => drupal_render($item['last_request']), 'class' => 'last_request'),
        array('data' => drupal_render($item['number_of_requests']), 'class' => 'number_of_requests'),
        array('data' => drupal_render($item['status']), 'class' => 'status'),
    );
}

$header = array(t('IP'), t('User Agent'), t('API Key'), t('Description'), t('Created'), t('Last Request'), t('# of Requests'), t('Status'));

$output = theme('table', array('header' => $header, 'rows' => $rows));
$output .= drupal_render($form);

echo $output;