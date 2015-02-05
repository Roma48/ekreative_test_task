<?php

$output = '';

$output .= '        <div id="property-details">';
$output .= '<div class="title-page-pdf">' . $node->title . '</div>';
$output .= '            <div class="title">' . t('Property Details') . '</div>';
$output .= '            <div class="content">';


$property_for_sale = field_get_items('node', $node, 'field_property_for_sale');
$property_for_lease = field_get_items('node', $node, 'field_property_for_lease');
if ($property_for_sale[0]['value'] || $property_for_lease[0]['value']) {
    $output .= '<div class="property_for"><span class="label">' . t('Property For') . ':</span> <span class="data">';
    if ($property_for_sale[0]['value']) {
        $p_for[] = t('Sale');
    }
    if ($property_for_lease[0]['value']) {
        $p_for[] = t('Lease');
    }
    $output .= implode(' or ', $p_for) . '</span></div>';
}


if ($node->field_zoning_type) {
    $field_zoning_type = field_get_items('node', $node, 'field_zoning_type');
    $output .= '<div id="zoning_type"><span class="label">' . t('Zoning Type') . ':</span>  <span class="data">' . $field_zoning_type[0]['value'] . '</span></div>';
}
$field_enterprise_zone = field_get_items('node', $node, 'field_enterprise_zone');
$field_reinvestment_zone = field_get_items('node', $node, 'field_reinvestment_zone');
$field_foreign_trade_zone = field_get_items('node', $node, 'field_foreign_trade_zone');
$field_rec_mark_devel_zone = field_get_items('node', $node, 'field_rec_mark_devel_zone');
$field_opportunity_zone = field_get_items('node', $node, 'field_opportunity_zone');

if ($field_enterprise_zone[0]["value"] || $field_reinvestment_zone[0]["value"] || $field_foreign_trade_zone[0]["value"] || $field_rec_mark_devel_zone[0]["value"]) {
    $output .= '<div id="incentive_zones"><span class="label">' . t('Incentive Zones') . ':</span>  <span class="data">';
    $output_tmp = '';
    if ($field_enterprise_zone[0]["value"]) {
        $output_tmp .= 'Enterprise Zone, ';
    }
    if ($field_reinvestment_zone[0]["value"]) {
        $output_tmp .= 'Reinvestment Zone, ';
    }
    if ($field_foreign_trade_zone[0]["value"]) {
        $output_tmp .= 'Foreign Trade Zone, ';
    }
    if ($field_rec_mark_devel_zone[0]["value"]) {
        $output_tmp .= 'Recycling Market Development Zone, ';
    }
	
    if ($field_opportunity_zone[0]["value"]) {
        $output_tmp .= 'Opportunity Zone, ';
    }
    $output_tmp = rtrim($output_tmp, ', ');

    $output .= $output_tmp;

    $output .= '</span></div>';

}

if ($node->field_acreage) {
    $field_acreage = field_get_items('node', $node, 'field_acreage');
//    $field_acreage = field_view_field('node', $node, 'field_acreage', array('label'=> 'hidden'));
    $output .= '<div id="acreage"><span class="label">' . t('Acreage') . ':</span>  <span class="data">' . $field_acreage[0]['value'] . '</span></div>';
}

if ($node->field_rail_access) {
    $field_rail_access = field_get_items('node', $node, 'field_rail_access');
    $output .= '<div id="rail_access"><span class="label">' . t('Rail Access') . ':</span>  <span class="data">';
//    $field_rail_access = field_view_field('node', $node, 'field_rail_access', array('label'=> 'hidden'));
    $rail_access = '';
    switch ($field_rail_access[0]['value']) {
        case '0':
            $rail_access = 'No';
            break;
        case '1':
            $rail_access = 'Yes';
            break;
        case '2':
            $rail_access = 'Possible';
            break;
    }
    $output .= $rail_access;
    $output .= '</span></div>';
}

if ($node->field_rail_provider) {
    $field_rail_provider = field_get_items('node', $node, 'field_rail_provider');
    $output .= '<div id="rail_provider"><span class="label">' . t('Rail Provider') . ':</span>  <span class="data">' . $field_rail_provider[0]['value'] . '</span></div>';
}

if ($node->field_environmental_statement) {
    $field_environmental_statement = field_get_items('node', $node, 'field_environmental_statement');
    $output .= '<div id="environmental_statement"><span class="label">' . t('Environmental Statement') . ':</span>  <span class="data">' . $field_environmental_statement[0]['value'] . '</span></div>';
}
$field_property_type = field_get_items('node', $node, 'field_property_type');
if ($field_property_type[0]['value'] == 'Building') {
    $output .= theme('eds_property_building_details', array('node' => $node));
}
if ($field_property_type[0]['value'] == 'Site') {
    $output .= theme('eds_property_site_details', array('node' => $node));
}
//add new
if ($node->field_electricity_service_provid) {
    $field_electricity_service_provid = field_get_items('node', $node, 'field_electricity_service_provid');
    $output .= '<div id="electricity_service_provid"><span class="label">' . t('Electricity Service Provider') . ':</span>  <span class="data">' . $field_electricity_service_provid[0]['value'] . '</span></div>';
}
if ($node->field_electricity_supply) {
    $field_electricity_supply = field_get_items('node', $node, 'field_electricity_supply');
    $output .= '<div id="electricity_supply"><span class="label">' . t('Electricity Supply') . ':</span>  <span class="data">' . $field_electricity_supply[0]['value'] . '</span></div>';
}
if ($node->field_phase) {
    $field_phase = field_get_items('node', $node, 'field_phase');
    $output .= '<div id="phase"><span class="label">' . t('Phase') . ':</span>  <span class="data">' . $field_phase[0]['value'] . '</span></div>';
}
if ($node->field_number_of_indep_sources) {
    $field_number_of_indep_sources = field_get_items('node', $node, 'field_number_of_indep_sources');
    $output .= '<div id="number_of_indep_sources"><span class="label">' . t('Number of independent sources') . ':</span>  <span class="data">' . $field_number_of_indep_sources[0]['value'] . '</span></div>';
}
if ($node->field_water_supply_provider) {
    $field_water_supply_provider = field_get_items('node', $node, 'field_water_supply_provider');
    $output .= '<div id="water_supply_provider"><span class="label">' . t('Water Supply Provider') . ':</span>  <span class="data">' . $field_water_supply_provider[0]['value'] . '</span></div>';
}
if ($node->field_water_supply) {
    $field_water_supply = field_get_items('node', $node, 'field_water_supply');
    $output .= '<div id="water_supply"><span class="label">' . t('Water Supply') . ':</span>  <span class="data">' . $field_water_supply[0]['value'] . '</span></div>';
}
if ($node->field_maximum_capacity_available) {
    $field_maximum_capacity_available = field_get_items('node', $node, 'field_maximum_capacity_available');
    $output .= '<div id="maximum_capacity_available"><span class="label">' . t('Maximum Capacity Available') . ':</span>  <span class="data">' . $field_maximum_capacity_available[0]['value'] . '</span></div>';
}

if ($node->field_raw_water_available) {
    $field_raw_water_available = field_get_items('node', $node, 'field_raw_water_available');
    $field_raw_water_available_text = $field_raw_water_available[0]['value'] ? 'Yes' : 'No';
    $output .= '<div id="raw_water_available"><span class="label">' . t('Raw water available') . ':</span>  <span class="data">' . $field_raw_water_available_text . '</span></div>';
}
if ($node->field_sewer_service_provider) {
    $field_sewer_service_provider = field_get_items('node', $node, 'field_sewer_service_provider');
    $output .= '<div id="sewer_service_provider"><span class="label">' . t('Sewer Service Provider') . ':</span>  <span class="data">' . $field_sewer_service_provider[0]['value'] . '</span></div>';
}
if ($node->field_sewer_service) {
    $field_sewer_service = field_get_items('node', $node, 'field_sewer_service');
    $output .= '<div id="sewer_service"><span class="label">' . t('Sewer Service') . ':</span>  <span class="data">' . $field_sewer_service[0]['value'] . '</span></div>';
}


$output .= '            </div>';
$output .= '            <span class="clearer">&nbsp;</span>';
$output .= '        </div>';

if ($property_for_sale && $property_for_sale[0]['value']) {
    $output .= '        <div id="property-details">';
    $output .= '            <div class="title mart15">' . t('Sale Pricing Option') . '</div>';
    $output .= '            <div class="content">';

    if ($node->field_sale_cost_description) {
        $field_sale_cost_description = field_get_items('node', $node, 'field_sale_cost_description');
        $output .= '<div id="sale_cost_description"><span class="label">' . t('Cost Description') . ':</span>  <span class="data">' . $field_sale_cost_description[0]['value'] . '</span></div>';
    }
    if ($node->field_sale_additional_expense) {
        $field_sale_additional_expense = field_get_items('node', $node, 'field_sale_additional_expense');
        $output .= '<div id="sale_additional_expense"><span class="label">' . t('Additional Expense') . ':</span>  <span class="data">' . $field_sale_additional_expense[0]['value'] . '</span></div>';
    }
    if ($node->field_sale_actual_price) {
        $field_sale_actual_price = field_get_items('node', $node, 'field_sale_actual_price');
        $output .= '<div id="sale_actual_price"><span class="label">' . t('Actual Price') . ':</span>  <span class="data">' . theme('eds_price', array('value' => $field_sale_actual_price[0]['value'])) . '</span></div>';
    }
    $output .= '            </div>';
    $output .= '            <span class="clearer">&nbsp;</span>';
    $output .= '        </div>';
}

if ($property_for_lease && $property_for_lease[0]['value']) {
    $output .= '        <div id="property-details">';
    $output .= '            <div class="title mart15">' . t('Lease Pricing Option') . '</div>';
    $output .= '            <div class="content">';
    if ($node->field_lease_cost_description) {
        $field_lease_cost_description = field_get_items('node', $node, 'field_lease_cost_description');
        $output .= '<div id="lease_cost_description"><span class="label">' . t('Cost Description') . ':</span>  <span class="data">' . $field_lease_cost_description[0]['value'] . '</span></div>';
    }
    if ($node->field_lease_additional_expense) {
        $field_lease_additional_expense = field_get_items('node', $node, 'field_lease_additional_expense');
        $output .= '<div id="lease_additional_expense"><span class="label">' . t('Additional Expense') . ':</span>  <span class="data">' . $field_lease_additional_expense[0]['value'] . '</span></div>';
    }
    if ($node->field_lease_actual_per_month) {
        $field_lease_actual_per_month = field_get_items('node', $node, 'field_lease_actual_per_month');
        $output .= '<div id="lease_actual_per_month"><span class="label">' . t('Actual Price per Month') . ':</span>  <span class="data">' . theme('eds_price', array('value' => $field_lease_actual_per_month[0]['value'])) . '</span></div>';
    }
    if ($node->field_lease_actual_per_year) {
        $field_lease_actual_per_year = field_get_items('node', $node, 'field_lease_actual_per_year');
        $output .= '<div id="lease_actual_per_year"><span class="label">' . t('Actual Price per Year') . ':</span>  <span class="data">' . theme('eds_price', array('value' => $field_lease_actual_per_year[0]['value'])) . '</span></div>';
    }

    $output .= '            </div>';
    $output .= '            <span class="clearer">&nbsp;</span>';
    $output .= '        </div>';
}
if (!empty($node->field_properties_urls)) {
    $output .= theme('eds_property_virtual_tours', array('node' => $node));
}

if (!empty($node->field_qr_image_path)) {
    $field_qr_image_path = field_get_items('node', $node, 'field_qr_image_path');
    $output .= '<div id="qr_image">' . theme('image', array('path' => file_create_url($field_qr_image_path[0]['file']->uri), 'alt' => 'QR Code', 'title' => 'QR Code')) . '</div>';
}
echo $output;
