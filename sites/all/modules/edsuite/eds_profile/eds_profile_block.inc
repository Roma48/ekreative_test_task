<?php

/**
 * A custom usort function: it will sort by status, weight, then alphabetically by title
 */
function _profile_node_compare($a, $b)
{
    /* Sort them according to enabled/disabled */
    $status = $b['status'] - $a['status'];
    if ($status) {
        return $status;
    }
    
    /* If enabled sorty by weight and then by name */
    if ($a['status'] && ($a['weight'] != $b['weight'])) {
        return $a['weight'] - $b['weight'];
    } else {
        return strcmp($a['title'], $b['title']);
    }
}

/**
* Implements hook_block_info().
*/
function eds_profile_block_info() {
    
    $blocks = array();
    
    $blocks['community_profile_previewer'] = array(
        'info' => t('Community Profile Previewer'),
        'weight' => 0,
        'enabled' => 1,
        'pages' => '<front>',
        );
 
    return $blocks;
}

function eds_profile_block_configure($delta = '')
{
    $form = array();
    
    switch($delta) {
        case 'community_profile_previewer':

            $form['nodes'] = array(
                '#title'       => t('Book nodes for inclusion in the previewer'),
                '#tree'        => true,
            );

            $form['nodes']['#theme'] = 'eds_profile_block';

            $query = db_select('node');
            $query->fields('node', array('nid', 'title'));
            $query->condition('node.type', 'book');
            $results = $query->execute()->fetchAllAssoc('nid');
            $nodes = array();
            foreach($results as $node){
                $nodes[$node->nid]['title'] = $node->title;
                $nodes[$node->nid]['status'] = 0;
                $nodes[$node->nid]['weight'] = 0;
                $nodes[$node->nid]['nid'] = $node->nid;
            }
            

            foreach (variable_get('eds_profile_block', array()) as $node) {
                $nid = $node['nid'];
                $nodes[$nid]['status'] = $node['status'];
                $nodes[$nid]['weight'] = $node['weight'];
            }

            usort($nodes, '_profile_node_compare'); /* Sort them according to weight and/or name */

            foreach ($nodes as $node) {
                $nid = $node['nid'];
                    $form['nodes'][$nid]['status'] = array(
                    '#type'          => 'checkbox',
                    '#title'         => $node['title'],
                    '#default_value' => $node['status'],
                );
                    $form['nodes'][$nid]['nid'] = array(
                    '#type'          => 'hidden',
                    '#value'         => $nid,
                );
                    $form['nodes'][$nid]['title'] = array(
                    '#type'          => 'hidden',
                    '#value'         => $node['title'],
                );
                    $form['nodes'][$nid]['weight'] = array(
                    '#type'          => 'weight',
                    '#default_value' => $node['weight'],
                    );
            }
            break;
    }
    return $form;
}

function eds_profile_block_save($delta = '', $edit = array())
{
    switch($delta) {
        case 'community_profile_previewer':
            $nodes = array();
            foreach ($edit['nodes'] as $node) {
                if ($node['status']) {
                    $nodes[] = $node;
                }
            }
            usort($nodes, '_profile_node_compare'); /* Sort them according to weight and/or name */
            variable_set('eds_profile_block', $nodes);
            break;
    }  
}

/**
* Implements hook_block_view().
*
*/
function eds_profile_block_view($delta = '') {
    
    switch($delta) {
        case 'community_profile_previewer':
            $block = array(
                'subject' => t('Community Profile'),
                'content' => eds_profile_display_block($delta),
            );
            break;
    }      
    
    return $block;
}

/**
 * The function that will generate the block output
 */
function eds_profile_display_block($delta = 0)
{
    drupal_add_css(drupal_get_path('module', 'eds_profile') . '/support/css/eds_profile_block.css', 'file');
    drupal_add_js(drupal_get_path('module', 'eds_profile') . '/js/jScrollPane.js', 'file');
    drupal_add_js(drupal_get_path('module', 'eds_profile') . '/js/eds_profile_block.js', 'file');
    
    $nodes = variable_get('eds_profile_block', array());
    $contents = $headliens = array();
    
    foreach ($nodes as $n) {
        $node = node_load($n['nid']);
        $headlines[] = sprintf("<span class=\"preview-title\" id=\"nid-%d\">%s</span>", $node->nid, $node->title);
        $contents[] = theme('eds_profile_display_block_node', array('node' => $node));
    }
    $output = '';
    $output .= '<div class="scroll-outer">' . theme('item_list', array('items' => $headlines)) . '</div>';
    $output .= join("\n", $contents);
    
    return $output;
}