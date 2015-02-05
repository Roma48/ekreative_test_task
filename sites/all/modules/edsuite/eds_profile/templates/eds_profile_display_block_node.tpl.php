<?php
global $baseurl;
$output = '<div id="book-preview-nid-' . $node->nid . '" class="book-preview">';

$n_view = node_view($node, 'preview_list');

$output .= '<div class="contents">' . render($n_view) . '</div>';


$output .= '</div>';

echo $output;