<?php

global $tooltips;

$add_body_all    = check_plain($tooltips['add_body_all']);
$remove_body_all = check_plain($tooltips['remove_body_all']);

$nid_list_str = '';
if (isset($nid_list) && $nid_list) {
    foreach ($nid_list as $key => $nid) {
        $nid_list_str .= '&nid_list[' . $key . ']=' . $nid;
    }
}
$output = '<div class="report_change_all">';
$output .= '<span><a ';

if (array_key_exists(session_name(), $_COOKIE)) {
    $sid = $_COOKIE[session_name()];
} else {
    $sid = '';
}
if ($class == 'add_all') {
    $output .= 'title="Add All Content - ' . $add_body_all . '" ';
    $href = url('eds/report/node/add', array('query' => array('node_type' => $node_type . $nid_list_str, 'sid=' => $sid)));
} else {
    $output .= 'title="Remove All Content - ' . $remove_body_all . '" ';
    if (isset($node_type) && $node_type)
    $href = url('eds/report/node/remove', array('query' => array('node_type' => $node_type . $nid_list_str, 'sid=' => $sid)));
    else
        $href = url('eds/report/node/remove', array('query' => array('sid=' => $sid)));
}
if (!isset($node_type) || !$node_type){
    $node_type = '';
}

$output .= ' class="'. $class .'" href="'. $href .'"';
$output .= ' onclick="report_all_node_toggle(\''. $nid_list_str .'\'';
$output .= ', this, \''. $node_type .'\'); ">'. $text .'</a>';
$output .= '</span>';
$output .= '<div class="clearer"></div>';
$output .= '</div>';

echo $output;