<?php

$output = '';

$output .= theme('eds_property_quicks', array('node' => $property));

$output .= '<div id="property-sub-nav">';
$output .= '<div class="tab"> <span class="left">&nbsp;</span> <span class="middle">';
$output .= l(t('Property'), 'eds/property/' . $property->nid) . '</span> <span class="right">&nbsp;</span> </div>';
$output .= '<div class="tab active"> <span class="left">&nbsp;</span> <span class="middle">';
$output .= t('Demographics');
$output .= '</span> <span class="right">&nbsp;</span> </div>';
$output .= '</div>';

$output .= '<div id="address-short">' . $property->title . '</div>';
$output .= render(drupal_get_form('eds_demographics_select_report', $options));

foreach ($nodes as $node) {
    $output .= render(node_view($node, 'teaser'));
}
echo $output;