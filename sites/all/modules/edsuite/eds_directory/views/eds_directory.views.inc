<?php
function eds_directory_views_default_views() {

	$view = new view();
	$view->name = 'eds_directory';
	$view->description = '';
	$view->tag = 'default';
	$view->base_table = 'node';
	$view->human_name = 'EDS Directory';
	$view->core = 7;
	$view->api_version = '3.0';
	$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

	/* Display: Master */
	$handler = $view->new_display('default', 'Master', 'default');
	$handler->display->display_options['title'] = 'EDS Directory';
	$handler->display->display_options['use_more_always'] = FALSE;
	$handler->display->display_options['access']['type'] = 'perm';
	$handler->display->display_options['cache']['type'] = 'none';
	$handler->display->display_options['query']['type'] = 'views_query';
	$handler->display->display_options['exposed_form']['type'] = 'basic';
	$handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
	$handler->display->display_options['pager']['type'] = 'none';
	$handler->display->display_options['pager']['options']['offset'] = '0';
	$handler->display->display_options['style_plugin'] = 'default';
	$handler->display->display_options['row_plugin'] = 'node';
	$handler->display->display_options['row_options']['view_mode'] = 'full';
	$handler->display->display_options['row_options']['links'] = FALSE;
	/* Header: Output */
	$handler->display->display_options['header']['area_1']['id'] = 'area_1';
	$handler->display->display_options['header']['area_1']['table'] = 'views';
	$handler->display->display_options['header']['area_1']['field'] = 'area';
	$handler->display->display_options['header']['area_1']['ui_name'] = 'Output';
	$handler->display->display_options['header']['area_1']['content'] = '<?php
	$path = $_SERVER[\'REQUEST_URI\'];
	if (preg_match(\'/eds\\/directory\\/\\w/\', $path)) {
	$print_path = preg_replace(\'/eds\\/directory\\/(\\w)/\', \'eds/directory/$1/print\', $path);
	$csv_path = preg_replace(\'/eds\\/directory\\/(\\w)/\', \'eds/directory/$1/csv\', $path);
	}
	if (preg_match(\'/eds\\/directory$/\', $path) || preg_match(\'/eds\\/directory\\?/\', $path)) {
	$print_path = preg_replace(\'/eds\\/directory/\', \'eds/directory/all/print\', $path);
	$csv_path = preg_replace(\'/eds\\/directory/\', \'eds/directory/all/csv\', $path);
	}

	?>
	<div id="eds-directory-output">
	    <span id="print-all"><a href="/eds/directory/all/print"><?php print t(\'Print All\'); ?></a></span>
	    <span id="print-results"><a href="<?php echo $print_path; ?>"><?php print t(\'Print Search Results\'); ?></a></span>
	    <span id="csv-all"><a href="/eds/directory/all/csv"><?php print t(\'Export All to CSV\'); ?></a></span>
	    <span id="csv-results"><a href="<?php echo $csv_path; ?>"><?php print t(\'Export Search Results to CSV\'); ?></a></span>
	</div>';
	$handler->display->display_options['header']['area_1']['format'] = 'php_code';
	$handler->display->display_options['header']['area_1']['tokenize'] = TRUE;
	/* Header: Letter Filters */
	$handler->display->display_options['header']['area']['id'] = 'area';
	$handler->display->display_options['header']['area']['table'] = 'views';
	$handler->display->display_options['header']['area']['field'] = 'area';
	$handler->display->display_options['header']['area']['ui_name'] = 'Letter Filters';
	$handler->display->display_options['header']['area']['empty'] = TRUE;
	$handler->display->display_options['header']['area']['content'] = '<div id=\'eds-directory-letters\'>
	Alphabetical List of Companies:<br/>
	<?php

	$letters = array(\'A\', \'B\', \'C\', \'D\', \'E\', \'F\', \'G\', \'H\', \'I\', \'J\', \'K\', \'L\', \'M\', \'N\', \'O\', \'P\', \'Q\', \'R\', \'S\', \'T\', \'U\', \'V\', \'W\', \'X\', \'Y\', \'Z\');
	$output = array();

	foreach ($letters as $l) {
	    $output[] = l($l, "eds/directory/$l", array(\'class\' => \'alpha-list\'));
	}

	print(implode(" | ", $output));

	?>
	</div>';
	$handler->display->display_options['header']['area']['format'] = 'php_code';
	/* Header: Table Headers */
	$handler->display->display_options['header']['area_2']['id'] = 'area_2';
	$handler->display->display_options['header']['area_2']['table'] = 'views';
	$handler->display->display_options['header']['area_2']['field'] = 'area';
	$handler->display->display_options['header']['area_2']['ui_name'] = 'Table Headers';
	$handler->display->display_options['header']['area_2']['content'] = '<table class="headers">
	        <tr>
	            <td class="company_name"><?php print t(\'Company Name\') ?></td>
	            <td class="category"><?php print t(\'Category\'); ?></td>
	            <td class="website"><?php print t(\'Web Address\'); ?></td>
	            <td class="expand">&nbsp;</td>
	        </tr>
	</table>';
	$handler->display->display_options['header']['area_2']['format'] = 'php_code';
	/* No results behavior: Global: Text area */
	$handler->display->display_options['empty']['area']['id'] = 'area';
	$handler->display->display_options['empty']['area']['table'] = 'views';
	$handler->display->display_options['empty']['area']['field'] = 'area';
	$handler->display->display_options['empty']['area']['empty'] = TRUE;
	$handler->display->display_options['empty']['area']['content'] = 'No Results';
	$handler->display->display_options['empty']['area']['format'] = 'full_html';
	/* Field: Content: Title */
	$handler->display->display_options['fields']['title']['id'] = 'title';
	$handler->display->display_options['fields']['title']['table'] = 'node';
	$handler->display->display_options['fields']['title']['field'] = 'title';
	$handler->display->display_options['fields']['title']['label'] = '';
	$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
	$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
	$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
	$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
	/* Field: Content: Business Type */
	$handler->display->display_options['fields']['field_eds_directory_type']['id'] = 'field_eds_directory_type';
	$handler->display->display_options['fields']['field_eds_directory_type']['table'] = 'field_data_field_eds_directory_type';
	$handler->display->display_options['fields']['field_eds_directory_type']['field'] = 'field_eds_directory_type';
	/* Field: Content: Category */
	$handler->display->display_options['fields']['field_eds_directory_category']['id'] = 'field_eds_directory_category';
	$handler->display->display_options['fields']['field_eds_directory_category']['table'] = 'field_data_field_eds_directory_category';
	$handler->display->display_options['fields']['field_eds_directory_category']['field'] = 'field_eds_directory_category';
	/* Field: Content: Distribution */
	$handler->display->display_options['fields']['field_eds_directory_distribution']['id'] = 'field_eds_directory_distribution';
	$handler->display->display_options['fields']['field_eds_directory_distribution']['table'] = 'field_data_field_eds_directory_distribution';
	$handler->display->display_options['fields']['field_eds_directory_distribution']['field'] = 'field_eds_directory_distribution';
	/* Field: Content: E-mail */
	$handler->display->display_options['fields']['field_eds_directory_email']['id'] = 'field_eds_directory_email';
	$handler->display->display_options['fields']['field_eds_directory_email']['table'] = 'field_data_field_eds_directory_email';
	$handler->display->display_options['fields']['field_eds_directory_email']['field'] = 'field_eds_directory_email';
	/* Field: Content: Employees */
	$handler->display->display_options['fields']['field_eds_directory_employees']['id'] = 'field_eds_directory_employees';
	$handler->display->display_options['fields']['field_eds_directory_employees']['table'] = 'field_data_field_eds_directory_employees';
	$handler->display->display_options['fields']['field_eds_directory_employees']['field'] = 'field_eds_directory_employees';
	$handler->display->display_options['fields']['field_eds_directory_employees']['settings'] = array(
	  'thousand_separator' => ' ',
	  'prefix_suffix' => 1,
	);
	/* Field: Content: Fax */
	$handler->display->display_options['fields']['field_eds_directory_fax']['id'] = 'field_eds_directory_fax';
	$handler->display->display_options['fields']['field_eds_directory_fax']['table'] = 'field_data_field_eds_directory_fax';
	$handler->display->display_options['fields']['field_eds_directory_fax']['field'] = 'field_eds_directory_fax';
	/* Field: Content: First Name */
	$handler->display->display_options['fields']['field_eds_directory_first_name']['id'] = 'field_eds_directory_first_name';
	$handler->display->display_options['fields']['field_eds_directory_first_name']['table'] = 'field_data_field_eds_directory_first_name';
	$handler->display->display_options['fields']['field_eds_directory_first_name']['field'] = 'field_eds_directory_first_name';
	/* Field: Content: Last Name */
	$handler->display->display_options['fields']['field_eds_directory_last_name']['id'] = 'field_eds_directory_last_name';
	$handler->display->display_options['fields']['field_eds_directory_last_name']['table'] = 'field_data_field_eds_directory_last_name';
	$handler->display->display_options['fields']['field_eds_directory_last_name']['field'] = 'field_eds_directory_last_name';
	/* Field: Content: Location */
	$handler->display->display_options['fields']['field_eds_directory_location']['id'] = 'field_eds_directory_location';
	$handler->display->display_options['fields']['field_eds_directory_location']['table'] = 'field_data_field_eds_directory_location';
	$handler->display->display_options['fields']['field_eds_directory_location']['field'] = 'field_eds_directory_location';
	/* Field: Content: Mailing Address */
	$handler->display->display_options['fields']['field_eds_directory_address']['id'] = 'field_eds_directory_address';
	$handler->display->display_options['fields']['field_eds_directory_address']['table'] = 'field_data_field_eds_directory_address';
	$handler->display->display_options['fields']['field_eds_directory_address']['field'] = 'field_eds_directory_address';
	/* Field: Content: Phone */
	$handler->display->display_options['fields']['field_eds_directory_phone']['id'] = 'field_eds_directory_phone';
	$handler->display->display_options['fields']['field_eds_directory_phone']['table'] = 'field_data_field_eds_directory_phone';
	$handler->display->display_options['fields']['field_eds_directory_phone']['field'] = 'field_eds_directory_phone';
	/* Field: Content: Title */
	$handler->display->display_options['fields']['field_eds_directory_title']['id'] = 'field_eds_directory_title';
	$handler->display->display_options['fields']['field_eds_directory_title']['table'] = 'field_data_field_eds_directory_title';
	$handler->display->display_options['fields']['field_eds_directory_title']['field'] = 'field_eds_directory_title';
	/* Field: Content: Website */
	$handler->display->display_options['fields']['field_eds_directory_website']['id'] = 'field_eds_directory_website';
	$handler->display->display_options['fields']['field_eds_directory_website']['table'] = 'field_data_field_eds_directory_website';
	$handler->display->display_options['fields']['field_eds_directory_website']['field'] = 'field_eds_directory_website';
	$handler->display->display_options['fields']['field_eds_directory_website']['click_sort_column'] = 'url';
	/* Sort criterion: Content: Title */
	$handler->display->display_options['sorts']['title']['id'] = 'title';
	$handler->display->display_options['sorts']['title']['table'] = 'node';
	$handler->display->display_options['sorts']['title']['field'] = 'title';
	/* Contextual filter: Content: Title */
	$handler->display->display_options['arguments']['title']['id'] = 'title';
	$handler->display->display_options['arguments']['title']['table'] = 'node';
	$handler->display->display_options['arguments']['title']['field'] = 'title';
	$handler->display->display_options['arguments']['title']['default_argument_type'] = 'fixed';
	$handler->display->display_options['arguments']['title']['summary']['number_of_records'] = '0';
	$handler->display->display_options['arguments']['title']['summary']['format'] = 'default_summary';
	$handler->display->display_options['arguments']['title']['summary_options']['items_per_page'] = '25';
	$handler->display->display_options['arguments']['title']['glossary'] = TRUE;
	$handler->display->display_options['arguments']['title']['limit'] = '1';
	/* Filter criterion: Content: Published */
	$handler->display->display_options['filters']['status']['id'] = 'status';
	$handler->display->display_options['filters']['status']['table'] = 'node';
	$handler->display->display_options['filters']['status']['field'] = 'status';
	$handler->display->display_options['filters']['status']['value'] = 1;
	$handler->display->display_options['filters']['status']['group'] = 1;
	$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
	/* Filter criterion: Content: Type */
	$handler->display->display_options['filters']['type']['id'] = 'type';
	$handler->display->display_options['filters']['type']['table'] = 'node';
	$handler->display->display_options['filters']['type']['field'] = 'type';
	$handler->display->display_options['filters']['type']['value'] = array(
	  'eds_directory' => 'eds_directory',
	);
	$handler->display->display_options['filters']['type']['group'] = 1;
	/* Filter criterion: Content: Category (field_eds_directory_category) */
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['id'] = 'field_eds_directory_category_tid';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['table'] = 'field_data_field_eds_directory_category';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['field'] = 'field_eds_directory_category_tid';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['group'] = 1;
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['exposed'] = TRUE;
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['operator_id'] = 'field_eds_directory_category_tid_op';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['label'] = 'Category';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['operator'] = 'field_eds_directory_category_tid_op';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['identifier'] = 'field_eds_directory_category_tid';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['remember_roles'] = array(
	  2 => '2',
	  1 => 0,
	  3 => 0,
	);
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['expose']['reduce'] = TRUE;
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['type'] = 'select';
	$handler->display->display_options['filters']['field_eds_directory_category_tid']['vocabulary'] = 'eds_directory_category';
	/* Filter criterion: Content: Classification (field_eds_directory_class) */
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['id'] = 'field_eds_directory_class_tid';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['table'] = 'field_data_field_eds_directory_class';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['field'] = 'field_eds_directory_class_tid';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['group'] = 1;
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['exposed'] = TRUE;
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['expose']['operator_id'] = 'field_eds_directory_class_tid_op';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['expose']['label'] = 'Type';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['expose']['operator'] = 'field_eds_directory_class_tid_op';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['expose']['identifier'] = 'field_eds_directory_class_tid';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['expose']['remember_roles'] = array(
	  2 => '2',
	  1 => 0,
	  3 => 0,
	);
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['type'] = 'select';
	$handler->display->display_options['filters']['field_eds_directory_class_tid']['vocabulary'] = 'eds_directory_classification';
	/* Filter criterion: Content: Title */
	$handler->display->display_options['filters']['title']['id'] = 'title';
	$handler->display->display_options['filters']['title']['table'] = 'node';
	$handler->display->display_options['filters']['title']['field'] = 'title';
	$handler->display->display_options['filters']['title']['operator'] = 'contains';
	$handler->display->display_options['filters']['title']['group'] = 1;
	$handler->display->display_options['filters']['title']['exposed'] = TRUE;
	$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
	$handler->display->display_options['filters']['title']['expose']['label'] = 'Company Name';
	$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
	$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
	$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
	  2 => '2',
	  1 => 0,
	  3 => 0,
	);
	$handler->display->display_options['filters']['title']['group_info']['label'] = 'Title';
	$handler->display->display_options['filters']['title']['group_info']['identifier'] = 'title';
	$handler->display->display_options['filters']['title']['group_info']['remember'] = FALSE;
	$handler->display->display_options['filters']['title']['group_info']['group_items'] = array(
	  1 => array(),
	  2 => array(),
	  3 => array(),
	);
	/* Filter criterion: Content: Last Name (field_eds_directory_last_name) */
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['id'] = 'field_eds_directory_last_name_value';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['table'] = 'field_data_field_eds_directory_last_name';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['field'] = 'field_eds_directory_last_name_value';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['operator'] = 'contains';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['group'] = 1;
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['exposed'] = TRUE;
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['expose']['operator_id'] = 'field_eds_directory_last_name_value_op';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['expose']['label'] = 'Search by Last Name';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['expose']['operator'] = 'field_eds_directory_last_name_value_op';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['expose']['identifier'] = 'field_eds_directory_last_name_value';
	$handler->display->display_options['filters']['field_eds_directory_last_name_value']['expose']['remember_roles'] = array(
	  2 => '2',
	  1 => 0,
	  3 => 0,
	);

	/* Display: Page */
	$handler = $view->new_display('page', 'Page', 'page');
	$handler->display->display_options['path'] = 'eds/directory';

	/* Display: CSV */
	$handler = $view->new_display('views_data_export', 'CSV', 'views_data_export_1');
	$handler->display->display_options['pager']['type'] = 'none';
	$handler->display->display_options['pager']['options']['offset'] = '0';
	$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
	$handler->display->display_options['style_options']['provide_file'] = 0;
	$handler->display->display_options['style_options']['parent_sort'] = 0;
	$handler->display->display_options['style_options']['quote'] = 1;
	$handler->display->display_options['style_options']['trim'] = 0;
	$handler->display->display_options['style_options']['replace_newlines'] = 0;
	$handler->display->display_options['style_options']['header'] = 1;
	$handler->display->display_options['path'] = 'eds/directory/%/csv';

	/* Display: Print */
	$handler = $view->new_display('page', 'Print', 'page_1');
	$handler->display->display_options['defaults']['header'] = FALSE;
	/* Header: Output */
	$handler->display->display_options['header']['area_1']['id'] = 'area_1';
	$handler->display->display_options['header']['area_1']['table'] = 'views';
	$handler->display->display_options['header']['area_1']['field'] = 'area';
	$handler->display->display_options['header']['area_1']['ui_name'] = 'Output';
	$handler->display->display_options['header']['area_1']['content'] = '<div id="eds-directory-output">
	    <span id="print-all"><a href="/eds/directory/all/print"><?php print t(\'Print All\'); ?></a></span>
	    <span id="print-results"><a href="/eds/directory/%1/print"><?php print t(\'Print Search Results\'); ?></a></span>
	    <span id="csv-all"><a href="/eds/directory/all/csv"><?php print t(\'Export All to CSV\'); ?></a></span>
	    <span id="csv-results"><a href="/eds/directory/%1/csv"><?php print t(\'Export Search Results to CSV\'); ?></a></span>
	</div>';
	$handler->display->display_options['header']['area_1']['format'] = 'php_code';
	$handler->display->display_options['header']['area_1']['tokenize'] = TRUE;
	/* Header: Letter Filters */
	$handler->display->display_options['header']['area']['id'] = 'area';
	$handler->display->display_options['header']['area']['table'] = 'views';
	$handler->display->display_options['header']['area']['field'] = 'area';
	$handler->display->display_options['header']['area']['ui_name'] = 'Letter Filters';
	$handler->display->display_options['header']['area']['empty'] = TRUE;
	$handler->display->display_options['header']['area']['content'] = '<div id=\'eds-directory-letters\'>
	Alphabetical List of Companies:<br/>
	<?php

	$letters = array(\'A\', \'B\', \'C\', \'D\', \'E\', \'F\', \'G\', \'H\', \'I\', \'J\', \'K\', \'L\', \'M\', \'N\', \'O\', \'P\', \'Q\', \'R\', \'S\', \'T\', \'U\', \'V\', \'W\', \'X\', \'Y\', \'Z\');
	$output = array();

	foreach ($letters as $l) {
	    $output[] = l($l, "eds/directory/$l", array(\'class\' => \'alpha-list\'));
	}

	print(implode(" | ", $output));

	?>
	</div>';
	$handler->display->display_options['header']['area']['format'] = 'php_code';
	/* Header: Table Headers */
	$handler->display->display_options['header']['area_2']['id'] = 'area_2';
	$handler->display->display_options['header']['area_2']['table'] = 'views';
	$handler->display->display_options['header']['area_2']['field'] = 'area';
	$handler->display->display_options['header']['area_2']['ui_name'] = 'Table Headers';
	$handler->display->display_options['header']['area_2']['content'] = '<table class="headers">
	        <tr>
	            <td class="company_name"><?php print t(\'Company Name\') ?></td>
	            <td class="category"><?php print t(\'Category\'); ?></td>
	            <td class="website"><?php print t(\'Web Address\'); ?></td>
	            <td class="expand">&nbsp;</td>
	        </tr>
	</table>';
	$handler->display->display_options['header']['area_2']['format'] = 'php_code';
	/* Header: Print */
	$handler->display->display_options['header']['area_3']['id'] = 'area_3';
	$handler->display->display_options['header']['area_3']['table'] = 'views';
	$handler->display->display_options['header']['area_3']['field'] = 'area';
	$handler->display->display_options['header']['area_3']['ui_name'] = 'Print';
	$handler->display->display_options['header']['area_3']['content'] = '<script>
	window.print()
	</script>';
	$handler->display->display_options['header']['area_3']['format'] = 'full_html';
	$handler->display->display_options['path'] = 'eds/directory/%/print';
	
	$views[$view->name] = $view;
	return $views;
	
}

