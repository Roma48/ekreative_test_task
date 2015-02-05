<?php

$output = '';

$output .= '<div id="address-short">' . $node->title . '</div>';
$output .= '<div id="address-full">';
$output .= '        <table class="address-full-table">';
$output .= '                <thead>';
$output .= '                        <tr>';
$output .= '                        <th>' . t('Location') . '</th>';
$output .= '<th>';
if (isset($node->field_primary_alternate_contact) && $node->field_primary_alternate_contact){
    $field_primary_alternate_contact = field_view_field('node', $node, 'field_primary_alternate_contact', array('label'=> 'hidden'));
    $output .= render($field_primary_alternate_contact);
}
$output .= '</th>';
$output .= '                        <th>' . t('Secondary Contact') . '</th>';
$output .= '                        </tr>';
$output .= '                </thead>';
$output .= '                <tbody>';
$output .= '                        <tr>';
$output .= '                                <td class="first">';

$output .= '                                        <div class="adr">'."\n";

$location = field_get_items('node', $node, 'field_location');

if (isset($location[0]['street'])) {
    $output .= '                                            <div class="street-address">'. $location[0]['street'];
    if (isset($location[0]['additional'])) {
        $output .= ' ' . $location[0]['additional'];
    }
    $output .= '                                            </div>';
}

if (isset($location[0]['city'])) {
    $city_province_postal[] = $location[0]['city'];
}

if ((isset($location[0]['city'])) || (isset($location[0]['province'])) || (isset($location[0]['postal_codet']))) {
    $city_province_postal = array();

    if (isset($location[0]['city'])) {
        $city_province_postal[] = '<span class="locality">'. $location[0]['city'] .'</span>';
    }

    if (isset($location[0]['province'])) {
        $city_province_postal[] = '<span class="region">'. $location[0]['province'] .'</span>';
    }

    if (isset($location[0]['postal_code'])) {
        $city_province_postal[] = '<span class="postal-code">'. $location[0]['postal_code'] .'</span>';
    }

    $output .= implode(', ', $city_province_postal);
}

if (isset($node->field_alternate_cont_comp_url) && $node->field_alternate_cont_comp_url) {
    $url = $node->field_alternate_cont_comp_url['und'][0]['value'];
    if (strpos($url, 'http') === false) {
        $url = 'http://' . $url;
    }
}
if (isset($location[0]['county'])){
    $output .= '                                <div class="county">' . t('County') . ': ' . $location[0]['county'] . '</div>';
}
$output .= '                        </div>';

$output .= '    </td>';
$output .= '    <td class="second">';
if (isset($node->field_alternate_cont_comp_name) && $node->field_alternate_cont_comp_name) {
	$field_alternate_cont_comp_name = field_view_field('node', $node, 'field_alternate_cont_comp_name', array('label' => 'hidden'));
    $output .= render($field_alternate_cont_comp_name);
}

if (isset($node->field_alternate_contact_phone) && $node->field_alternate_contact_phone) {
    $field_alternate_contact_phone = field_view_field('node', $node, 'field_alternate_contact_phone', array('label' => 'hidden'));
    $output .= render($field_alternate_contact_phone);
}

if (isset($node->field_alternate_contact_email) && $node->field_alternate_contact_email) {
    $output .= '        <a href="mailto:' . $node->field_alternate_contact_email['und'][0]['value'] . '">' . $node->field_alternate_contact_email['und'][0]['value'] . "</a><br />";
}
if (isset($node->field_alternate_cont_comp_url) && $node->field_alternate_cont_comp_url) {
    $output .=                  l($node->field_alternate_cont_comp_url['und'][0]['value'], $url, array('html' => true, 'attributes' => array('target' => '_blank')));
}
$output .= '    </td>';
$output .= '    <td class="third">';
if (isset($node->field_secondary_alternate_contac) && $node->field_secondary_alternate_contac){
    $field_secondary_alternate_contac = field_view_field('node', $node, 'field_secondary_alternate_contac', array('label' => 'hidden'));
    $output .= render($field_secondary_alternate_contac);
}
$output .= '    </td>';
$output .= '  </tr>';
$output .= '  </tbody>';
$output .= '</table>';
$output .= '</div>';
echo $output;