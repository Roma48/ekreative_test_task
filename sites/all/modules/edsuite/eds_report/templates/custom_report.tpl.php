<?php

  $control = '';
//$control .= '<ul class="controls">';
//$control .= '<li id="print_report"><a href="#" onclick="print();">' . t('Print Report') . '</a></li>';
//$control .= '<li id="print_to_pdf">' . l(t('Convert to PDF'), 'eds/report/pdf', array('attributes' => array('target' => '_blank'))) . '</li>';
//$control .= '<li id="send_email_report"><a href="#top" onmouseover="eds_send_email(this);" class="fieldset-eds-report">' . t('Send Email') . '</a></li>';
//$control .= '</ul>';

$output = '<a name="top" id="top"></a>';
$output .= '<div id="report-header" class="clearfix">';
if ($data['logo']) {
    $output .= '<div id="report-logo"><img src="' . $data['logo'] . '" alt="" /></div>';
}
$output .= '<div id="report-contact-information">' . $data['contact_info'] . '</div>';
$output .= '</div>';
$output .= $control;

$output .= theme('report_all_link', array('text' => t("Remove All Content from Report"), 'class' => 'remove_all'));
if (!empty($data['eds_properties'])) {
    $output .= l(t('Download Side by Side Property Comparison(CSV File)'), 'report/property-export-csv-all', array('attributes' => array('class' => 'csv')));
}

$node_types = variable_get('eds_report_nodetypes', array());
usort($node_types, '_node_type_compare');
//var_dump($data); exit;

foreach ($node_types as $i => $values) {
    $type = $values['type'];

    if (!empty($data[$type])) {
        $last = $i;
    }
}

$h=0;
foreach ($node_types as $i => $values) {
    $extra = '';
    $type = $values['type'];

    if (!empty($data[$type])) {
        if ($h == 0 ) {
            $num = 'first';
        } else {
            $num = '';
        }
        if (isset($last) && $last == $i) {
            $num .= ' last';
        }
        $output .= sprintf('<div id="%s-list" class="section %s %s"><h2 class="title">%s</h2>%s<div class="content">%s</div></div>',$type, $type, $num, check_plain($values['heading']), $extra, $data[$type]);
    }
}

$output .= $control; /* Add the controls to the bottom of the page as well as the top */
echo $output;