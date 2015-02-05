<?php

$total = 0;

$node_types = variable_get('eds_report_nodetypes', array());

usort($node_types, '_node_type_compare');
$o = '';

foreach (array_reverse($node_types) as $i => $values) {

    $type = $values['type'];

    if ($values['status'] == 1) {

        $o .= '        <div class="' . $type . ' report-type"><span class="counter ' . $type . '_count">' . $vars[$type] . '</span> ' . $values['alias'];

        $o .= '</div>';

        $total += $vars[$type];

    }

}



$output  = '<div id="save-and-report-container">';

$output .= '    <div id="save-and-report">';

if ($total > 0) {

    $output .= '  <div id="report-total">' . $total . '</div>';

} else {

    $output .= '  <div id="report-total" style="display: none;">' . $total . '</div>';

}

$output .= '  <div id="report-expand"></div>';



$output .= $o;



$output .= '<div class="add-description">';

$output .= '    Add information from throughout the site by clicking the "Add" link.';

$output .= '</div>';

$output .= '<div class="view-description">';

$output .= '    Click "View Custom Report" to view your customized report. Email, print or create a PDF.';

$output .= '</div>';

$output .= '<div id="reset-container">';

$output .= '        <div class="reset">' .  '<a href="javascript:void(0);" id="reset_report" onclick="if (confirm(\'' . t('Do you want to remove all of the articles you selected from the Custom Report?') . '\')) {report_reset();  updateCounts();}">' .   t('Reset') . '</a>';

$output .= '</div>';

$output .= '        <div class="view-custom-report">' . l(t('View Custom Report'), 'eds/report/information', array('attributes' => array('onclick' => 'view_report();', 'target' => '_blank')));

$output .= '</div>';

$output .= '<span class="clearer">&nbsp;</span>';

$output .= '    </div>';

$output .= '</div>';

$output .= '</div>';
echo $output;

//for mobile
$output = '<div class="report_container_mobile">';
$output  .= '<div id="save-and-report-container-mobile">';
$output .= '    <div id="save-and-report">';


$node_types = variable_get('eds_report_nodetypes', array());
usort($node_types, '_node_type_compare');
foreach (array_reverse($node_types) as $i => $values) {
    $type = $values['type'];
    if ($values['status'] == 1) {
        $output .= '        <div class="' . $type . '  report-type"><span class="counter ' . $type . '_count">' . $vars[$type] . '</span> ' . $values['alias'];
        if (variable_get('eds_report_block_display_icons', 1)) {
//            $output .= '<img alt="" src="/' . drupal_get_path('module', 'eds_report') . '/support/images/icon-articles.gif" />';
        }
        $output .= '</div>';
    }
}
$output .= '<div class="view_reset_wrapper"><div class="reset">' . '<a href="javascript:void(0);" id="reset_report" onclick="if (confirm(\'' . t('Do you want to remove all of the articles you selected from the Custom Report?') . '\')) {report_reset();  updateCounts();}">' .   t('Reset') . '</a>';
if (variable_get('eds_report_block_display_icons', 1)) {
//    $output .= '<img alt="" src="' . base_path() . drupal_get_path('module', 'eds_report') . '/support/images/icon-articles.gif" />';
}
$output .= '</div>';
$output .= '        <div class="view-custom-report last">' . l(t('View Custom Report'), 'eds/report/information', array('attributes' => array('onclick' => 'view_report();', 'target' => '_blank')));
if (variable_get('eds_report_block_display_icons', 1)) {
//    $output .= ' <img alt="" src="' . base_path() . drupal_get_path('module', 'eds_report') . '/support/images/icon-report.gif" />';
}
$output .= '</div></div>';


$output .= '    </div>';
//$output .= '<div id="custom-report-help">' . t('As you visit this site you will find pieces of information that you may want to add to a Custom Profile.  To do that simply click the <strong>"add"</strong> link that is associated with that information.  Once you are finished gathering data simply click <strong>"View Custom Report"</strong> and that will take you directly to your report.  From there you can email, print or create a PDF of that report.') . '</div>';
$output .= '</div></div>';
echo $output;