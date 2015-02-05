<?php

$node = node_load($nid);
preg_match_all('/<table.*?<\/table>/si', $node->body['und'][0]['value'], $tables);

$title = str_replace(' ', '_', trim($node->title));
$title = str_replace('-', '_', $title);
$title = preg_replace('/_+/', '_', $title);
$title = preg_replace('/[^a-zA-Z0-9]\-/is', '', $title);

if (empty($tables[0][$tid - 1])) {
    drupal_not_found();
    return;
}

/* Get $tid table in the node */
$table = $tables[0][$tid - 1];
$output = '';

$cells = filter_table($table);

foreach ($cells as $row) {
    $output .= implode(',', $row) . "\r\n";
}

drupal_add_http_header('Content-Type', 'text/x-comma-separated-values');
drupal_add_http_header('Content-Disposition', 'attachment; filename="'. $title .'-table-'. $tid .'.csv"');

print $output;

module_invoke_all('exit');
exit;