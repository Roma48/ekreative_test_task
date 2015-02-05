<?php

$output = '';
foreach ($menu as $item) {
    $output .= theme('edsuite_dashboard_menu_item', array('item' => $item));
    if (array_key_exists('children', $item)) {
        $output .= '<ul class="menu">' . theme('edsuite_dashboard_menu_tree', array('menu' => $item['children'])) . '</ul></li>';
    }
}
echo $output;