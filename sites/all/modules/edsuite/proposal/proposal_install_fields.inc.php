<?php

function _proposal_installed_fields()
{
    $fields = array(
        'field_proposal_teaser' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_proposal_teaser' => array(
                                'value' => 'field_proposal_teaser_value',
                                'format' => 'field_proposal_teaser_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_proposal_teaser' => array(
                                'value' => 'field_proposal_teaser_value',
                                'format' => 'field_proposal_teaser_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_proposal_teaser',
            'type' => 'text_long',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'text',
                    'size' => 'big',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_managers' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'referenceable_types' => array(
                'staff_manager' => 'staff_manager',
                'article' => 0,
                'page' => 0,
                'book' => 0,
                'eds_properties' => 0,
                'eds_demographics' => 0,
                'proposal' => 0,
                'story' => 0,
                'videos' => 0,
                'webform' => 0,
              ),
              'view' => array(
                'view_name' => '',
                'display_name' => '',
                'args' => array(),
              ),
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_managers' => array(
                      'nid' => 'field_managers_nid',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_managers' => array(
                      'nid' => 'field_managers_nid',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'nid' => array(
                'table' => 'node',
                'columns' => array(
                  'nid' => 'nid',
                ),
              ),
            ),
            'indexes' => array(
              'nid' => array(
                'nid',
              ),
            ),
            'field_name' => 'field_managers',
            'type' => 'node_reference',
            'module' => 'node_reference',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '-1',
            'deleted' => '0',
            'columns' => array(
              'nid' => array(
                'type' => 'int',
                'unsigned' => TRUE,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'proposal',
              ),
            ),
          ),
        'field_code' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'max_length' => '255',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_code' => array(
                                'value' => 'field_code_value',
                                'format' => 'field_code_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_code' => array(
                                'value' => 'field_code_value',
                                'format' => 'field_code_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_code',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_password' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'max_length' => '255',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_password' => array(
                                'value' => 'field_password_value',
                                'format' => 'field_password_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_password' => array(
                                'value' => 'field_password_value',
                                'format' => 'field_password_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_password',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_expiration_date' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'granularity' => array(
                    'month' => 'month',
                    'day' => 'day',
                    'hour' => 'hour',
                    'minute' => 'minute',
                    'second' => 'second',
                    'year' => 'year',
                ),
                'tz_handling' => 'site',
                'timezone_db' => 'UTC',
                'cache_enabled' => 0,
                'cache_count' => '4',
                'repeat' => '0',
                'todate' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_expiration_date' => array(
                                'value' => 'field_expiration_date_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_expiration_date' => array(
                                'value' => 'field_expiration_date_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_expiration_date',
            'type' => 'datetime',
            'module' => 'date',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'datetime',
                    'mysql_type' => 'datetime',
                    'pgsql_type' => 'timestamp without time zone',
                    'sqlite_type' => 'varchar',
                    'sqlsrv_type' => 'smalldatetime',
                    'not null' => FALSE,
                    'sortable' => TRUE,
                    'views' => TRUE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_status' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Active',
                    'Inactive',
                    'Closed',
                ),
                'allowed_values_function' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_status' => array(
                                'value' => 'field_status_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_status' => array(
                                'value' => 'field_status_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
                'value' => array(
                    'value',
                ),
            ),
            'field_name' => 'field_status',
            'type' => 'list_integer',
            'module' => 'list',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'int',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_proposal_sections' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'hide_blank_items' => 1,
                'path' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_proposal_sections' => array(
                                'value' => 'field_proposal_sections_value',
                                'revision_id' => 'field_proposal_sections_revision_id',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_proposal_sections' => array(
                                'value' => 'field_proposal_sections_value',
                                'revision_id' => 'field_proposal_sections_revision_id',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_proposal_sections',
            'type' => 'field_collection',
            'module' => 'field_collection',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '-1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'int',
                    'not null' => FALSE,
                    'description' => 'The field collection item id.',
                ),
                'revision_id' => array(
                    'type' => 'int',
                    'not null' => FALSE,
                    'description' => 'The field collection item revision id.',
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_navigation_style' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    1 => 'Horizontal',
                    2 => 'Vertical',
                ),
                'allowed_values_function' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_navigation_style' => array(
                                'value' => 'field_navigation_style_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_navigation_style' => array(
                                'value' => 'field_navigation_style_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
                'value' => array(
                    'value',
                ),
            ),
            'field_name' => 'field_navigation_style',
            'type' => 'list_integer',
            'module' => 'list',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'int',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
        'field_skin' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'default' => 'Default',
                ),
                'allowed_values_function' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_skin' => array(
                                'value' => 'field_skin_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_skin' => array(
                                'value' => 'field_skin_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
                'value' => array(
                    'value',
                ),
            ),
            'field_name' => 'field_skin',
            'type' => 'list_text',
            'module' => 'list',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'proposal',
                ),
            ),
        ),
//        'field_headers' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_headers' => array(
//                                'jquery_colorpicker' => 'field_headers_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_headers' => array(
//                                'jquery_colorpicker' => 'field_headers_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_headers',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
//        'field_links' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_links' => array(
//                                'jquery_colorpicker' => 'field_links_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_links' => array(
//                                'jquery_colorpicker' => 'field_links_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_links',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
//        'field_menu_background' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_menu_background' => array(
//                                'jquery_colorpicker' => 'field_menu_background_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_menu_background' => array(
//                                'jquery_colorpicker' => 'field_menu_background_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_menu_background',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
//        'field_menu_foreground' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_menu_foreground' => array(
//                                'jquery_colorpicker' => 'field_menu_foreground_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_menu_foreground' => array(
//                                'jquery_colorpicker' => 'field_menu_foreground_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_menu_foreground',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
//        'field_menu_hover_background' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_menu_hover_background' => array(
//                                'jquery_colorpicker' => 'field_menu_hover_background_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_menu_hover_background' => array(
//                                'jquery_colorpicker' => 'field_menu_hover_background_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_menu_hover_background',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
//        'field_menu_hover_foreground' => array(
//            'translatable' => '0',
//            'entity_types' => array(),
//            'settings' => array(),
//            'storage' => array(
//                'type' => 'field_sql_storage',
//                'settings' => array(),
//                'module' => 'field_sql_storage',
//                'active' => '1',
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_menu_hover_foreground' => array(
//                                'jquery_colorpicker' => 'field_menu_hover_foreground_jquery_colorpicker',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_menu_hover_foreground' => array(
//                                'jquery_colorpicker' => 'field_menu_hover_foreground_jquery_colorpicker',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(),
//            'indexes' => array(),
//            'field_name' => 'field_menu_hover_foreground',
//            'type' => 'jquery_colorpicker',
//            'module' => 'jquery_colorpicker',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'jquery_colorpicker' => array(
//                    'type' => 'varchar',
//                    'length' => 6,
//                    'not null' => FALSE,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'proposal',
//                ),
//            ),
//        ),
    );
    return $fields;
}

function _proposal_installed_fields_collection()
{
    $fields = array(
        'field_make_this_a_sub_section' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    '',
                    '',
                ),
                'allowed_values_function' => '',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_make_this_a_sub_section' => array(
                                'value' => 'field_make_this_a_sub_section_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_make_this_a_sub_section' => array(
                                'value' => 'field_make_this_a_sub_section_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
                'value' => array(
                    'value',
                ),
            ),
            'field_name' => 'field_make_this_a_sub_section',
            'type' => 'list_boolean',
            'module' => 'list',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'int',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'field_collection_item' => array(
                    'field_proposal_sections',
                ),
            ),
        ),
        'field_section_title' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'max_length' => '255',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_section_title' => array(
                                'value' => 'field_section_title_value',
                                'format' => 'field_section_title_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_section_title' => array(
                                'value' => 'field_section_title_value',
                                'format' => 'field_section_title_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_section_title',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'field_collection_item' => array(
                    'field_proposal_sections',
                ),
            ),
        ),
        'field_section_body' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_section_body' => array(
                                'value' => 'field_section_body_value',
                                'format' => 'field_section_body_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_section_body' => array(
                                'value' => 'field_section_body_value',
                                'format' => 'field_section_body_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_section_body',
            'type' => 'text_long',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'text',
                    'size' => 'big',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'field_collection_item' => array(
                    'field_proposal_sections',
                ),
            ),
        ),
        'field_sidebar_title' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'max_length' => '255',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_sidebar_title' => array(
                                'value' => 'field_sidebar_title_value',
                                'format' => 'field_sidebar_title_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sidebar_title' => array(
                                'value' => 'field_sidebar_title_value',
                                'format' => 'field_sidebar_title_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_sidebar_title',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'varchar',
                    'length' => '255',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'field_collection_item' => array(
                    'field_proposal_sections',
                ),
            ),
        ),
        'field_sidebar_body' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_sidebar_body' => array(
                                'value' => 'field_sidebar_body_value',
                                'format' => 'field_sidebar_body_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sidebar_body' => array(
                                'value' => 'field_sidebar_body_value',
                                'format' => 'field_sidebar_body_format',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'format' => array(
                    'table' => 'filter_format',
                    'columns' => array(
                        'format' => 'format',
                    ),
                ),
            ),
            'indexes' => array(
                'format' => array(
                    'format',
                ),
            ),
            'field_name' => 'field_sidebar_body',
            'type' => 'text_long',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'text',
                    'size' => 'big',
                    'not null' => FALSE,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'field_collection_item' => array(
                    'field_proposal_sections',
                ),
            ),
        ),
    );
    return $fields;
}
/*
function _staff_manager_installed_fields()
{
    $fields = array(
        //prefix
        'field_staff_prefix' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_prefix' => array(
                      'value' => 'field_staff_prefix_value',
                      'format' => 'field_staff_prefix_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_prefix' => array(
                      'value' => 'field_staff_prefix_value',
                      'format' => 'field_staff_prefix_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_prefix',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        'field_staff_first_name' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_first_name' => array(
                      'value' => 'field_staff_first_name_value',
                      'format' => 'field_staff_first_name_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_first_name' => array(
                      'value' => 'field_staff_first_name_value',
                      'format' => 'field_staff_first_name_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_permissions' => array(
              'type' => '0',
            ),
            'field_name' => 'field_staff_first_name',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        
        //suffix
        'field_staff_suffix' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_suffix' => array(
                      'value' => 'field_staff_suffix_value',
                      'format' => 'field_staff_suffix_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_suffix' => array(
                      'value' => 'field_staff_suffix_value',
                      'format' => 'field_staff_suffix_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_suffix',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //job title
        'field_staff_job_title' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_job_title' => array(
                      'value' => 'field_staff_job_title_value',
                      'format' => 'field_staff_job_title_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_job_title' => array(
                      'value' => 'field_staff_job_title_value',
                      'format' => 'field_staff_job_title_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_job_title',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //organisation
        'field_staff_organization' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_organization' => array(
                      'value' => 'field_staff_organization_value',
                      'format' => 'field_staff_organization_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_organization' => array(
                      'value' => 'field_staff_organization_value',
                      'format' => 'field_staff_organization_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_organization',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        // address
        'field_staff_address' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'location_settings' => array(
                'form' => array(
                  'fields' => array(
                    'name' => array(
                      'collect' => '0',
                      'default' => '',
                      'weight' => '2',
                    ),
                    'street' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '4',
                    ),
                    'additional' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '6',
                    ),
                    'city' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '8',
                    ),
                    'province' => array(
                      'collect' => '1',
                      'widget' => 'select',
                      'default' => '',
                      'weight' => '10',
                    ),
                    'postal_code' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '12',
                    ),
                    'country' => array(
                      'collect' => '1',
                      'default' => 'us',
                      'weight' => '14',
                    ),
                    'locpick' => array(
                      'collect' => '0',
                      'weight' => '20',
                    ),
                  ),
                ),
                'display' => array(
                  'hide' => array(
                    'name' => 0,
                    'street' => 0,
                    'additional' => 0,
                    'city' => 0,
                    'province' => 0,
                    'postal_code' => 0,
                    'country' => 0,
                    'locpick' => 0,
                    'province_name' => 0,
                    'country_name' => 0,
                    'map_link' => 0,
                    'coords' => 0,
                  ),
                ),
              ),
              'gmap_macro' => '[gmap ]',
              'gmap_marker' => 'drupal',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_address' => array(
                      'lid' => 'field_staff_address_lid',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_address' => array(
                      'lid' => 'field_staff_address_lid',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
              'lid' => array(
                'lid',
              ),
            ),
            'field_name' => 'field_staff_address',
            'type' => 'location',
            'module' => 'location_cck',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'lid' => array(
                'type' => 'int',
                'unsigned' => TRUE,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //website url
        'field_staff_website_url' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_website_url' => array(
                      'value' => 'field_staff_website_url_value',
                      'format' => 'field_staff_website_url_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_website_url' => array(
                      'value' => 'field_staff_website_url_value',
                      'format' => 'field_staff_website_url_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_website_url',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //email address
        'field_staff_email_address' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_email_address' => array(
                      'email' => 'field_staff_email_address_email',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_email_address' => array(
                      'email' => 'field_staff_email_address_email',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_staff_email_address',
            'type' => 'email',
            'module' => 'email',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'email' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //phone number
        'field_staff_phone_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_phone_number' => array(
                      'value' => 'field_staff_phone_number_value',
                      'format' => 'field_staff_phone_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_phone_number' => array(
                      'value' => 'field_staff_phone_number_value',
                      'format' => 'field_staff_phone_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_phone_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //cell phone
        'field_staff_cell_phone_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_cell_phone_number' => array(
                      'value' => 'field_staff_cell_phone_number_value',
                      'format' => 'field_staff_cell_phone_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_cell_phone_number' => array(
                      'value' => 'field_staff_cell_phone_number_value',
                      'format' => 'field_staff_cell_phone_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_cell_phone_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        // fax number
        'field_staff_fax_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_fax_number' => array(
                      'value' => 'field_staff_fax_number_value',
                      'format' => 'field_staff_fax_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_fax_number' => array(
                      'value' => 'field_staff_fax_number_value',
                      'format' => 'field_staff_fax_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_fax_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        //notes
        'field_staff_notes' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_notes' => array(
                      'value' => 'field_staff_notes_value',
                      'format' => 'field_staff_notes_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_notes' => array(
                      'value' => 'field_staff_notes_value',
                      'format' => 'field_staff_notes_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_notes',
            'type' => 'text_long',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'text',
                'size' => 'big',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          ),
        // project name
        'field_staff_int_proj_name' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_staff_int_proj_name' => array(
                      'value' => 'field_staff_int_proj_name_value',
                      'format' => 'field_staff_int_proj_name_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_staff_int_proj_name' => array(
                      'value' => 'field_staff_int_proj_name_value',
                      'format' => 'field_staff_int_proj_name_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_staff_int_proj_name',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'staff_manager',
              ),
            ),
          )

    );
    return $fields;
}

*/ 

function _lead_manager_installed_fields()
{
    $fields = array(
        //prefix
        'field_lead_prefix' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_prefix' => array(
                      'value' => 'field_lead_prefix_value',
                      'format' => 'field_lead_prefix_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_prefix' => array(
                      'value' => 'field_lead_prefix_value',
                      'format' => 'field_lead_prefix_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_prefix',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        'field_lead_first_name' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_first_name' => array(
                      'value' => 'field_lead_first_name_value',
                      'format' => 'field_lead_first_name_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_first_name' => array(
                      'value' => 'field_lead_first_name_value',
                      'format' => 'field_lead_first_name_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_permissions' => array(
              'type' => '0',
            ),
            'field_name' => 'field_lead_first_name',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        'field_lead_last_name' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_last_name' => array(
                      'value' => 'field_lead_last_name_value',
                      'format' => 'field_lead_last_name_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_last_name' => array(
                      'value' => 'field_lead_last_name_value',
                      'format' => 'field_lead_last_name_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_permissions' => array(
              'type' => '0',
            ),
            'field_name' => 'field_lead_last_name',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),

        //suffix
        'field_lead_suffix' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_suffix' => array(
                      'value' => 'field_lead_suffix_value',
                      'format' => 'field_lead_suffix_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_suffix' => array(
                      'value' => 'field_lead_suffix_value',
                      'format' => 'field_lead_suffix_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_suffix',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //job title
        'field_lead_job_title' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_job_title' => array(
                      'value' => 'field_lead_job_title_value',
                      'format' => 'field_lead_job_title_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_job_title' => array(
                      'value' => 'field_lead_job_title_value',
                      'format' => 'field_lead_job_title_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_job_title',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //organisation
        'field_lead_organization' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_organization' => array(
                      'value' => 'field_lead_organization_value',
                      'format' => 'field_lead_organization_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_organization' => array(
                      'value' => 'field_lead_organization_value',
                      'format' => 'field_lead_organization_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_organization',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        // address
        'field_lead_address' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'location_settings' => array(
                'form' => array(
                  'fields' => array(
                    'name' => array(
                      'collect' => '0',
                      'default' => '',
                      'weight' => '2',
                    ),
                    'street' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '4',
                    ),
                    'additional' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '6',
                    ),
                    'city' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '8',
                    ),
                    'province' => array(
                      'collect' => '1',
                      'widget' => 'select',
                      'default' => '',
                      'weight' => '10',
                    ),
                    'postal_code' => array(
                      'collect' => '1',
                      'default' => '',
                      'weight' => '12',
                    ),
                    'country' => array(
                      'collect' => '1',
                      'default' => 'us',
                      'weight' => '14',
                    ),
                    'locpick' => array(
                      'collect' => '0',
                      'weight' => '20',
                    ),
                  ),
                ),
                'display' => array(
                  'hide' => array(
                    'name' => 0,
                    'street' => 0,
                    'additional' => 0,
                    'city' => 0,
                    'province' => 0,
                    'postal_code' => 0,
                    'country' => 0,
                    'locpick' => 0,
                    'province_name' => 0,
                    'country_name' => 0,
                    'map_link' => 0,
                    'coords' => 0,
                  ),
                ),
              ),
              'gmap_macro' => '[gmap ]',
              'gmap_marker' => 'drupal',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_address' => array(
                      'lid' => 'field_lead_address_lid',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_address' => array(
                      'lid' => 'field_lead_address_lid',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(),
            'indexes' => array(
              'lid' => array(
                'lid',
              ),
            ),
            'field_name' => 'field_lead_address',
            'type' => 'location',
            'module' => 'location_cck',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'lid' => array(
                'type' => 'int',
                'unsigned' => TRUE,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //website url
        'field_lead_website_url' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_website_url' => array(
                      'value' => 'field_lead_website_url_value',
                      'format' => 'field_lead_website_url_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_website_url' => array(
                      'value' => 'field_lead_website_url_value',
                      'format' => 'field_lead_website_url_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_website_url',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //email address
        'field_lead_email_address' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_email_address' => array(
                      'email' => 'field_lead_email_address_email',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_email_address' => array(
                      'email' => 'field_lead_email_address_email',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_lead_email_address',
            'type' => 'email',
            'module' => 'email',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'email' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //phone number
        'field_lead_phone_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_phone_number' => array(
                      'value' => 'field_lead_phone_number_value',
                      'format' => 'field_lead_phone_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_phone_number' => array(
                      'value' => 'field_lead_phone_number_value',
                      'format' => 'field_lead_phone_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_phone_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //cell phone
        'field_lead_cell_phone_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_cell_phone_number' => array(
                      'value' => 'field_lead_cell_phone_number_value',
                      'format' => 'field_lead_cell_phone_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_cell_phone_number' => array(
                      'value' => 'field_lead_cell_phone_number_value',
                      'format' => 'field_lead_cell_phone_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_cell_phone_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        // fax number
        'field_lead_fax_number' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_fax_number' => array(
                      'value' => 'field_lead_fax_number_value',
                      'format' => 'field_lead_fax_number_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_fax_number' => array(
                      'value' => 'field_lead_fax_number_value',
                      'format' => 'field_lead_fax_number_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_fax_number',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        //notes
        'field_lead_notes' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_notes' => array(
                      'value' => 'field_lead_notes_value',
                      'format' => 'field_lead_notes_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_notes' => array(
                      'value' => 'field_lead_notes_value',
                      'format' => 'field_lead_notes_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_notes',
            'type' => 'text_long',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'text',
                'size' => 'big',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          ),
        // project name
        'field_lead_int_proj_name' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'max_length' => '255',
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_lead_int_proj_name' => array(
                      'value' => 'field_lead_int_proj_name_value',
                      'format' => 'field_lead_int_proj_name_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_lead_int_proj_name' => array(
                      'value' => 'field_lead_int_proj_name_value',
                      'format' => 'field_lead_int_proj_name_format',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'format' => array(
                'table' => 'filter_format',
                'columns' => array(
                  'format' => 'format',
                ),
              ),
            ),
            'indexes' => array(
              'format' => array(
                'format',
              ),
            ),
            'field_name' => 'field_lead_int_proj_name',
            'type' => 'text',
            'module' => 'text',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
              'value' => array(
                'type' => 'varchar',
                'length' => '255',
                'not null' => FALSE,
              ),
              'format' => array(
                'type' => 'varchar',
                'length' => 255,
                'not null' => FALSE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'lead_manager',
              ),
            ),
          )

    );
    return $fields;
}