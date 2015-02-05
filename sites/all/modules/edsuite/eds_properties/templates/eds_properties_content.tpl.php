<?php
$output = '';
if (!is_array($nodes)) {
    $nodes = array();
}
$rows = array();

$header = array(t('Title'), t('City'), t('Zoning Type'), t('Total Square Footage'), t('Acres'), t('Status'), t('Actions'));

foreach ($nodes as $node) {
    $rows[] = array(
        array('data' => check_plain($node->title), 'class' => 'title'),
        array('data' => check_plain($node->field_location['und'][0]['city']), 'class' => 'city'),
        array('data' => check_plain($node->field_zoning_type['und'][0]['value']), 'class' => 'zoning_type'),
        array('data' => theme('eds_sq_ft', array('value' => $node->field_sq_footage['und'][0]['value'])) . ' ' . $default_sqft_suffix, 'class' => 'sq_footage'),
        array('data' => theme('eds_number', array('value' => $node->field_acreage['und'][0]['value'])), 'class' => 'acreage'),
        array('data' => $node->status ? t('Published') : t('Unpublished'), 'class' => 'status'),
        array('data' => implode(' | ', array(
                l(t('View'), 'node/' . $node->nid),
                l(t('Edit'), 'node/' . $node->nid . '/edit', array(), drupal_get_destination()),
                l(t('Delete'), 'node/' . $node->nid . '/delete', array(), drupal_get_destination()),
            )), 'class' => 'actions'),
    );
}

$output .= theme('table', array('header' => $header, 'rows' => $rows, 'attributes' => array('id' => 'properties')));
$output .= theme('pager', array('tags' => array(), 'quantity' => $limit));
echo $output;