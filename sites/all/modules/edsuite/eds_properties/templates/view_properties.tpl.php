<?php
global $theme;
$theme_settings = variable_get('theme_'. $theme .'_settings', array());

$output = '<div class="property-search-form-container">';
$output .= '<div class="search_form_toogle">Filter:</div>';
$output .= '<div class="property-search-form">' . render($search_form) . '</div>';

if (isset($theme_settings['toggle_search']) && $theme_settings['toggle_search']) {
    $output .= '<div class="keyword-search">' . t('Keyword') . ':</br>' . drupal_get_form('search_theme_form') . '</div>';
}
$output .= '</div>';

$output .= '<div id="search_results_header" class="gmnoprint">';
$output .= '    <div id="search_results_header_top">';
$output .= '        <a href="#" onclick ="print()">' . t('Print') . '&nbsp;<img src="' . /*$GLOBALS['base_url'] .*/ base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/icon-print.gif" alt="" class="print"/></a>';
$output .= '    </div>';
$output .= '    <div id="search_results_header_bottom">';
$output .= '        <span id="hide_map" class="hide_map">' . t('Hide Map') . '</span>';
$output .= '        <span class="results_title">' . t('Results') . '</span>';
$output .= '    </div>';
$output .= '</div>';

$output .= theme('ajax_busy', array('content' => t('Loading content')));
$output .= '<div id="ajax-properties"></div>';
$output .= '<div class="clear"></div>';
echo $output;