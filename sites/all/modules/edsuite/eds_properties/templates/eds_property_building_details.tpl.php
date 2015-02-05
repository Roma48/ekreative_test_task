<?php
global $eds_property_defaults;
$default_sqft_suffix = variable_get('eds_properties_sqft_suffix', $eds_property_defaults['sqft_suffix']);

$output = '';

if ($node->field_building_type) {
    $field_building_type = field_get_items('node', $node, 'field_building_type');
    $output .= '<div id="building_type"><span class="label">' . t('Building Type') . ':</span>  <span class="data">' . $field_building_type[0]['value'] . '</span></div>';
}

if ($node->field_nearest_interstate_distanc) {
    $field_nearest_interstate_distanc = field_get_items('node', $node, 'field_nearest_interstate_distanc');
    $output .= '<div id="nearest_interstate_distance"><span class="label">' . t('Nearest Interstate Distance') . ':</span>  <span class="data">' . $field_nearest_interstate_distanc[0]['value'] . '</span></div>';
}

if ($node->field_ceiling_height) {
    $field_ceiling_height = field_get_items('node', $node, 'field_ceiling_height');
    $output .= '<div id="ceiling_height"><span class="label">' . t('Ceiling Height') . ':</span>  <span class="data">' . theme('eds_number', array('value' => $field_ceiling_height[0]['value'])) . ' ' . t("ft.") . '</span></div>';
}

if ($node->field_number_of_parking_spaces) {
    $field_number_of_parking_spaces = field_get_items('node', $node, 'field_number_of_parking_spaces');
    $output .= '<div id="number_of_parking_spaces"><span class="label">' . t('Number of Parking Spaces') . ':</span>  <span class="data">' . $field_number_of_parking_spaces[0]['value'] . '</span></div>';
}

if ($node->field_office_sq_footage) {
    $field_office_sq_footage = field_get_items('node', $node, 'field_office_sq_footage');
    $output .= '<div id="office_sq_footage"><span class="label">' . t('Office Sq. Footage') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_office_sq_footage[0]['value'])) . '</span></div>';
}

if ($node->field_retail_sq_footage) {
    $field_retail_sq_footage = field_get_items('node', $node, 'field_retail_sq_footage');
    $output .= '<div id="retail_sq_footage"><span class="label">' . t('Retail Sq. Footage') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_retail_sq_footage[0]['value'])) . '</span></div>';
}

if ($node->field_space_divisible_to) {
    $field_space_divisible_to = field_get_items('node', $node, 'field_space_divisible_to');
    $output .= '<div id="space_divisible_to"><span class="label">' . t('Space Divisible To') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_space_divisible_to[0]['value'])) . '</span></div>';
}

if ($node->field_warehouse_sq_footage) {
    $field_warehouse_sq_footage = field_get_items('node', $node, 'field_warehouse_sq_footage');
    $output .= '<div id="warehouse_sq_footage"><span class="label">' . t('Warehouse Sq. Footage') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_warehouse_sq_footage[0]['value'])) . '</span></div>';
}

if ($node->field_manufacturing_sq_footage) {
    $field_manufacturing_sq_footage = field_get_items('node', $node, 'field_manufacturing_sq_footage');
    $output .= '<div id="manufacturing_sq_footage"><span class="label">' . t('Manufacturing Sq. Footage') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_manufacturing_sq_footage[0]['value'])) . '</span></div>';
}

if ($node->field_sq_footage) {
    $field_sq_footage = field_get_items('node', $node, 'field_sq_footage');
    $output .= '<div id="sq_footage"><span class="label">' . t('Total Square Footage') . ':</span>  <span class="data">' . theme('eds_sq_ft', array('value' => $field_sq_footage[0]['value'])) . '</span></div>';
}

if ($node->field_year_built) {
    $field_year_built = field_get_items('node', $node, 'field_year_built');
    $output .= '<div id="year_built"><span class="label">' . t('Year Built') . ':</span>  <span class="data">' . $field_year_built[0]['value'] . '</span></div>';
}

if ($node->field_building_dimensions) {
    $field_building_dimensions = field_get_items('node', $node, 'field_building_dimensions');
    $output .= '<div id="building_dimensions"><span class="label">' . t('Building Dimensions') . ':</span>  <span class="data">' . $field_building_dimensions[0]['value'] . '</span></div>';
}

if ($node->field_construction_type) {
    $field_construction_type = field_get_items('node', $node, 'field_construction_type');
    $output .= '<div id="construction_type"><span class="label">' . t('Construction Type') . ':</span>  <span class="data">' . $field_construction_type[0]['value'] . '</span></div>';
}

if ($node->field_overhead_crane_1_capacity) {
    $field_overhead_crane_1_capacity = field_get_items('node', $node, 'field_overhead_crane_1_capacity');
    $output .= '<div id="overhead_crane_1_capacity"><span class="label">' . t('Overhead Crane 1 Capacity') . ':</span>  <span class="data">' . $field_overhead_crane_1_capacity[0]['value'] . '</span></div>';
}

if ($node->field_overhead_crane_2_capacity) {
    $field_overhead_crane_2_capacity = field_get_items('node', $node, 'field_overhead_crane_2_capacity');
    $output .= '<div id="overhead_crane_2_capacity"><span class="label">' . t('Overhead Crane 2 Capacity') . ':</span>  <span class="data">' . $field_overhead_crane_2_capacity[0]['value'] . '</span></div>';
}

if ($node->field_overhead_crane_3_capacity) {
    $field_overhead_crane_3_capacity = field_get_items('node', $node, 'field_overhead_crane_3_capacity');
    $output .= '<div id="overhead_crane_3_capacity"><span class="label">' . t('Overhead Crane 3 Capacity') . ':</span>  <span class="data">' . $field_overhead_crane_3_capacity[0]['value'] . '</span></div>';
}

if ($node->field_column_spacing) {
    $field_column_spacing = field_get_items('node', $node, 'field_column_spacing');
    $output .= '<div id="column_spacing"><span class="label">' . t('Column Spacing') . ':</span>  <span class="data">' . theme('eds_number', array('value' => $field_column_spacing[0]['value'])) . ' ' . t("ft.") . '</span></div>';
}

if ($node->field_no_of_high_loading_docks) {
    $field_no_of_high_loading_docks = field_get_items('node', $node, 'field_no_of_high_loading_docks');
    $output .= '<div id="no_of_high_loading_docks"><span class="label">' . t('Number of High Loading Docks') . ':</span>  <span class="data">' . $field_no_of_high_loading_docks[0]['value'] . '</span></div>';
}

if ($node->field_no_of_grd_lvl_load_docks) {
    $field_no_of_grd_lvl_load_docks = field_get_items('node', $node, 'field_no_of_grd_lvl_load_docks');
    $output .= '<div id="no_of_ground_level_loading_docks"><span class="label">' . t('Number of Ground Level Loading Docks') . ':</span>  <span class="data">' . $field_no_of_grd_lvl_load_docks[0]['value'] . '</span></div>';
}

if ($node->field_sprinkler_system) {
    $field_sprinkler_system = field_get_items('node', $node, 'field_sprinkler_system');
    $output .= '<div id="sprinkler_system"><span class="label">' . t('Sprinkler System') . ':</span>  <span class="data">';
    $output .= $field_sprinkler_system[0]['value'] . '</span></div>';
}

if ($node->field_primary_anchor_tenant) {
    $field_primary_anchor_tenant = field_get_items('node', $node, 'field_primary_anchor_tenant');
    $output .= '<div id="primary_anchor_tenant"><span class="label">' . t('Primary Anchor Tenant') . ':</span>  <span class="data">' . $field_primary_anchor_tenant[0]['value'] . '</span></div>';
}

if ($node->field_secondary_anchor_tenant) {
    $field_rail_provider = field_get_items('node', $node, 'field_rail_provider');
    $output .= '<div id="secondary_anchor_tenant"><span class="label">' . t('Secondary Anchor Tenant') . ':</span>  <span class="data">' . $field_rail_provider[0]['value'] . '</span></div>';
}

if ($node->field_date_available) {

    $field_date_available = field_get_items('node', $node, 'field_date_available');
    $output .= '<div id="date_available"><span class="label">' . t('Date Available') . ':</span>  <span class="data">' . format_date(strtotime($field_date_available[0]['value']), 'custom', 'F j, Y') . '</span></div>';
}

if ($node->field_previous_use) {
    $field_previous_use = field_get_items('node', $node, 'field_previous_use');
    $output .= '<div id="previous_use"><span class="label">' . t('Previous Use') . ':</span>  <span class="data">' . $field_previous_use[0]['value'] . '</span></div>';
}
echo $output;