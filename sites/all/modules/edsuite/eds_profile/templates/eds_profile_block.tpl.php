<?php

$rows = array();

foreach (element_children($form) as $type) {
    $item = &$form[$type];
    $rows[] = array(
        drupal_render($item['status']),
        drupal_render($item['weight']),
    );
}

$header = array(t('Node'), t('Weight'));

$output = theme('table', array('header' => $header, 'rows' => $rows));
$output .= drupal_render_children($form);

echo $output;