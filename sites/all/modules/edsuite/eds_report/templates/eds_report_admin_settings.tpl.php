<?php

$rows = array();

foreach (element_children($form['node_types']) as $type) {
    $item = &$form['node_types'][$type];
    $rows[] = array(
        drupal_render($item['status']),
        drupal_render($item['alias']),
        drupal_render($item['heading']),
        drupal_render($item['weight']),
    );
}

$header = array(t('Node Types'), t('Short Form'), t('Report Heading'), t('Weight'));

$output = theme('table', array('header' => $header, 'rows' => $rows));

$output_form = drupal_render_children($form);
$res = $output . $output_form;

echo $res;
