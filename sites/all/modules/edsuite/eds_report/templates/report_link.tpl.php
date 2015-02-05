<?php

global $tooltips;
$report_nodetypes = variable_get('eds_report_nodetypes', array());

$add_body         = check_plain($tooltips['add_body']);
$remove_body      = check_plain($tooltips['remove_body']);

$nid_list_str = '';

foreach ($nid_list as $key => $nid) {
    $nid_list_str .= '&nid_list['. $key .']='. $nid;
}

$output = '<div class="report_change">';
$output .= '<span><a ';

if (array_key_exists(session_name(), $_COOKIE)) {
    $sid = $_COOKIE[session_name()];
} else {
    $sid = '';
}

if ($class == 'add') {
    $body = $add_body;
    $url = 'eds/report/node/add';
} else {
    $body = $remove_body;
    $url = 'eds/report/node/remove';
}

$output .= 'title="' . $text . ' ' . $report_nodetypes[$node_type]['alias'] . ' - ' . $body . '" ';
$href = url($url, array("node_type" => $node_type, "sid" => $sid));

$output .= ' class="'. $class .'" href="javascript:void(0)"';
$output .= ' onclick="report_node_toggle(\''. $nid_list_str .'\'';
$output .= ', this, \''. $node_type .'\', \''. $nid.'\')">'. $text .'</a>';
$output .= '</span>';
$output .= '<div class="clearer"></div>';
$output .= '</div>';

echo $output;