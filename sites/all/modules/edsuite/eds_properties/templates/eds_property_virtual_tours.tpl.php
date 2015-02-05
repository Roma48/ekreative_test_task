<?php

$output = '';

$output .= '        <div id="virtual-tours">';
$output .= '<div class="title-page-pdf">' . $node->title . '</div>';
$output .= '            <div class="title">' . t('Virtual Tours') . '</div>';
$output .= '            <div class="content">';
$field_properties_urls = field_get_items('node', $node, 'field_properties_urls');
    $output .= '<ul id="urls">';
    foreach ($field_properties_urls as $url) {
        $output .= '<li><a href="' . $url['url'] . '" title="' . $url['title'] . '" target="_blank">' . $url['title'] . '</a></li>';
    }
    $output .= '</ul>';

$output .= '            </div>';
$output .= '            <span class="clearer">&nbsp;</span>';
$output .= '        </div>';

echo $output;