<?php
function _eds_directory_installed_fields() {
	$field_bases = array();

	// Exported field_base: 'field_eds_director_hr'
	$field_bases['field_eds_directory_hr'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_hr',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_address'
	$field_bases['field_eds_directory_address'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_address',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_category'
	$field_bases['field_eds_directory_category'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_category',
	  'foreign keys' => array(
	    'tid' => array(
	      'columns' => array(
	        'tid' => 'tid',
	      ),
	      'table' => 'taxonomy_term_data',
	    ),
	  ),
	  'indexes' => array(
	    'tid' => array(
	      0 => 'tid',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'taxonomy',
	  'settings' => array(
	    'allowed_values' => array(
	      0 => array(
	        'vocabulary' => 'eds_directory_category',
	        'parent' => 0,
	      ),
	    ),
	  ),
	  'translatable' => 0,
	  'type' => 'taxonomy_term_reference',
	);

	// Exported field_base: 'field_eds_directory_city'
	$field_bases['field_eds_directory_city'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_city',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_class'
	$field_bases['field_eds_directory_class'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_class',
	  'foreign keys' => array(
	    'tid' => array(
	      'columns' => array(
	        'tid' => 'tid',
	      ),
	      'table' => 'taxonomy_term_data',
	    ),
	  ),
	  'indexes' => array(
	    'tid' => array(
	      0 => 'tid',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'taxonomy',
	  'settings' => array(
	    'allowed_values' => array(
	      0 => array(
	        'vocabulary' => 'eds_directory_classification',
	        'parent' => 0,
	      ),
	    ),
	  ),
	  'translatable' => 0,
	  'type' => 'taxonomy_term_reference',
	);

	// Exported field_base: 'field_eds_directory_distribution'
	$field_bases['field_eds_directory_distribution'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_distribution',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_email'
	$field_bases['field_eds_directory_email'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_email',
	  'foreign keys' => array(),
	  'indexes' => array(),
	  'locked' => 0,
	  'module' => 'email',
	  'settings' => array(),
	  'translatable' => 0,
	  'type' => 'email',
	);

	// Exported field_base: 'field_eds_directory_employees'
	$field_bases['field_eds_directory_employees'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_employees',
	  'foreign keys' => array(),
	  'indexes' => array(),
	  'locked' => 0,
	  'module' => 'number',
	  'settings' => array(),
	  'translatable' => 0,
	  'type' => 'number_integer',
	);

	// Exported field_base: 'field_eds_directory_fax'
	$field_bases['field_eds_directory_fax'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_fax',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_first_name'
	$field_bases['field_eds_directory_first_name'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_first_name',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_last_name'
	$field_bases['field_eds_directory_last_name'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_last_name',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_location'
	$field_bases['field_eds_directory_location'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_location',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_phone'
	$field_bases['field_eds_directory_phone'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_phone',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_purchasing'
	$field_bases['field_eds_directory_purchasing'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_purchasing',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_state'
	$field_bases['field_eds_directory_state'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_state',
	  'foreign keys' => array(),
	  'indexes' => array(
	    'value' => array(
	      0 => 'value',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'list',
	  'settings' => array(
	    'allowed_values' => array(
	      'AL' => 'Alabama',
	      'AK' => 'Alaska',
	      'AZ' => 'Arizona',
	      'AR' => 'Arkansas',
	      'CA' => 'California',
	      'CO' => 'Colorado',
	      'CT' => 'Connecticut',
	      'DE' => 'Delaware',
	      'DC' => 'District of Columbia',
	      'FL' => 'Florida',
	      'GA' => 'Georgia',
	      'HI' => 'Hawaii',
	      'ID' => 'Idaho',
	      'IL' => 'Illinois',
	      'IN' => 'Indiana',
	      'IA' => 'Iowa',
	      'KS' => 'Kansas',
	      'KY' => 'Kentucky',
	      'LA' => 'Louisiana',
	      'ME' => 'Maine',
	      'MD' => 'Maryland',
	      'MA' => 'Massachusetts',
	      'MI' => 'Michigan',
	      'MN' => 'Minnesota',
	      'MS' => 'Mississippi',
	      'MO' => 'Missouri',
	      'MT' => 'Montana',
	      'NE' => 'Nebraska',
	      'NV' => 'Nevada',
	      'NH' => 'New Hampshire',
	      'NJ' => 'New Jersey',
	      'NM' => 'New Mexico',
	      'NY' => 'New York',
	      'NC' => 'North Carolina',
	      'ND' => 'North Dakota',
	      'OH' => 'Ohio',
	      'OK' => 'Oklahoma',
	      'OR' => 'Oregon',
	      'PA' => 'Pennsylvania',
	      'RI' => 'Rhode Island',
	      'SC' => 'South Carolina',
	      'SD' => 'South Dakota',
	      'TN' => 'Tennessee',
	      'TX' => 'Texas',
	      'UT' => 'Utah',
	      'VT' => 'Vermont',
	      'VA' => 'Virginia',
	      'WA' => 'Washington',
	      'WV' => 'West Virginia',
	      'WI' => 'Wisconsin',
	      'WY' => 'Wyoming',
	    ),
	    'allowed_values_function' => '',
	  ),
	  'translatable' => 0,
	  'type' => 'list_text',
	);

	// Exported field_base: 'field_eds_directory_title'
	$field_bases['field_eds_directory_title'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_title',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_type'
	$field_bases['field_eds_directory_type'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_type',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 255,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);

	// Exported field_base: 'field_eds_directory_website'
	$field_bases['field_eds_directory_website'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_website',
	  'foreign keys' => array(),
	  'indexes' => array(),
	  'locked' => 0,
	  'module' => 'link',
	  'settings' => array(
	    'attributes' => array(
	      'class' => '',
	      'rel' => '',
	      'target' => 'default',
	    ),
	    'display' => array(
	      'url_cutoff' => 80,
	    ),
	    'enable_tokens' => 1,
	    'title' => 'optional',
	    'title_maxlength' => 128,
	    'title_value' => '',
	    'url' => 0,
	  ),
	  'translatable' => 0,
	  'type' => 'link_field',
	);

	// Exported field_base: 'field_eds_directory_zip'
	$field_bases['field_eds_directory_zip'] = array(
	  'active' => 1,
	  'cardinality' => 1,
	  'deleted' => 0,
	  'entity_types' => array(),
	  'field_name' => 'field_eds_directory_zip',
	  'foreign keys' => array(
	    'format' => array(
	      'columns' => array(
	        'format' => 'format',
	      ),
	      'table' => 'filter_format',
	    ),
	  ),
	  'indexes' => array(
	    'format' => array(
	      0 => 'format',
	    ),
	  ),
	  'locked' => 0,
	  'module' => 'text',
	  'settings' => array(
	    'max_length' => 11,
	  ),
	  'translatable' => 0,
	  'type' => 'text',
	);
	
	return $field_bases;
}