<?php

$output = '';

if ($node->field_site_type) {
    $field_site_type = field_get_items('node', $node, 'field_site_type');
    $output .= '<div id="site_type"><span class="label">' . t('Site Type') . ':</span>  <span class="data">' . $field_site_type[0]['value'] . '</span></div>';
}
echo $output;