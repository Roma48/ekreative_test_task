<?php

/**
 * Override or insert variables into the page template.
 */

function edsuite_generic_preprocess_page(&$variables, $hook) {
    if (!drupal_session_started()) session_api_get_sid();
	
    if (drupal_is_front_page()) {
    	drupal_add_css(path_to_theme() .'/css/frontpage.css', array('group' => CSS_THEME, 'preprocess' => true));
    	drupal_add_js(path_to_theme() .'/js/frontpage.js', array('group' => JS_THEME, 'preprocess' => true));
    }
   
    if (isset($variables['node']->type)) { // We don't want to apply this on taxonomy or view pages
	
	  	// Splice (2) is based on existing default suggestions. Change it if you need to.
	  	array_splice($variables['theme_hook_suggestions'], -1, 0, 'page__'.$variables['node']->type);
	  	// Get the url_alias and make each item part of an array
	  	$url_alias = drupal_get_path_alias($_GET['q']);
	  	$split_url = explode('/', $url_alias);
	
	  	// Add the full path template pages
	  	// Insert 2nd to last to allow page--node--[nid] to be last
	
	  	$cumulative_path = '';
	  	foreach ($split_url as $path) {
	  	  $cumulative_path .= '__' . $path;
	  	  $path_name = 'page' . $cumulative_path;
	  	  array_splice($variables['theme_hook_suggestions'], -1, 0, str_replace('-','_',$path_name));
	  	}
	
	  	// This does just the page name on its own & is considered more specific than the longest path
	  	// (because sometimes those get too long)
	  	// Also we don't want to do this if there were no paths on the URL
	  	// Again, add 2nd to last to preserve page--node--[nid] if we do add it in
	
	  	if (count($split_url) > 1) {
	  	  $page_name = end($split_url);
	  	  array_splice($variables['theme_hook_suggestions'], -1, 0, 'page__'.str_replace('-','_',$page_name));
	  	}
  
    }  
}

/**
 * Override or insert variables into the page template.
 */
function edsuite_generic_process_page(&$variables) {
}

/**
 * Override or insert variables into the html template.
 */
function edsuite_generic_preprocess_html(&$variables) {
    if (!drupal_session_started()) session_api_get_sid();
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function edsuite_generic_process_html(&$variables) {
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function edsuite_generic_preprocess_maintenance_page(&$variables) {
	// By default, site_name is set to Drupal if no db connection is available
	// or during site installation. Setting site_name to an empty string makes
	// the site and update pages look cleaner.
	// @see template_preprocess_maintenance_page
	if (!$variables['db_is_active']) {
		$variables['site_name'] = '';
	}
	drupal_add_css(drupal_get_path('theme', 'edsuite_generic') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function edsuite_generic_process_maintenance_page(&$variables) {
    // While markup for normal pages is split into page.tpl.php and html.tpl.php,
    // the markup for the maintenance page is all in the single
    // maintenance-page.tpl.php template. So, to have what's done in
    // skeleton_theme_d7_preprocess_html() also happen on the maintenance page, it has to be
    // called here.
    skeleton_theme_d7_preprocess_html($variables);
}

/**
 * Override or insert variables into the node template.
 */
function edsuite_generic_preprocess_node(&$variables) {
	if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
		$variables['classes_array'][] = 'node-full';
	}
	
	$node = $variables['node'];
	
	// Check if CSS file can be found for particular Node Type
	if (is_readable(path_to_theme() . "/css/node-type/" . $node->type . ".css")) {
		drupal_add_css(path_to_theme(). "/css/node-type/" . $node->type . ".css", "theme");
		$variables['styles'] = drupal_get_css();
	}
	
	// Format Submitted Date
	$variables['submitted'] = 'Submitted on ' . format_date($variables['created']);
}

/**
 * Override or insert variables into the block template.
 */
function edsuite_generic_preprocess_block(&$variables) {

}

// Add some cool text to the search block form
function edsuite_generic_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		// HTML5 placeholder attribute
		$form['search_block_form']['#attributes']['value'] = t('Search');
		$form['actions']['submit']['#value'] = t('');
	}
}

/**
 * Implements theme_menu_tree().
 */
function edsuite_generic_menu_tree($variables) {
	return '<ul class="sf-menu menu clearfix">' . $variables['tree'] . '</ul>';
}

/* Put Breadcrumbs in a ul li structure */
function edsuite_generic_breadcrumb($variables) {
	$breadcrumb = $variables['breadcrumb'];

	if ((!empty($breadcrumb)) && (count($breadcrumb) !== 1)) {
		$crumbs  = 	'<ul class="breadcrumbs">';
		$crumbs .= 		'<li>' . $breadcrumb[count($breadcrumb)-1] . '</li>';
		$crumbs .= 	'</ul>';
		
		return $crumbs;
	}
}