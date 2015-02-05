<?php
/**
 * @file
 * edsuite_pdf.features.inc
 */

/**
 * Implements hook_node_info().
 */
function edsuite_pdf_node_info() {
  $items = array(
    'staff_manager' => array(
      'name' => t('Staff Manager'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Last name (Title)'),
      'help' => '',
    ),
  );
  return $items;
}
