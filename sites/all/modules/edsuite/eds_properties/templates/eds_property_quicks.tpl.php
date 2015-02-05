<?php

$output = '<div id="quicks">';

$args = array();
if (array_key_exists('property_search', $_SESSION)) {
    foreach ($_SESSION['property_search'] as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                $args[urlencode(sprintf("%s[%s]", $key, $k))] =  urlencode($v);
            }
        } else {
            $args[urlencode($key)] =  urlencode($value);
        }
    }
}
$icon = '<img alt="" src="' . base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/icon-back-to-listing.gif" />';
$output .= l(t('Return to results') . $icon, url("eds/properties", array('query' => $args, 'absolute' => true)), array('html' => true));

$output .= '</div>';
echo $output;