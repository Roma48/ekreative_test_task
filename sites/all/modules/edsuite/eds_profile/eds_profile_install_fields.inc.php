<?php

function _eds_profile_installed_fields()
{
    $fields = array(
        'field_parent' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'allowed_values' => array(
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
                    'field_data_field_parent' => array(
                      'value' => 'field_parent_value',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_parent' => array(
                      'value' => 'field_parent_value',
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
            'field_name' => 'field_parent',
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
                'book',
              ),
            ),
          ),
        'field_header_image' => array(
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
                            'field_data_field_header_image' => array(
                                'fid' => 'field_header_image_fid',
                                'title' => 'field_header_image_title',
                                'data' => 'field_header_image_data',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_header_image' => array(
                                'fid' => 'field_header_image_fid',
                                'title' => 'field_header_image_title',
                                'data' => 'field_header_image_data',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'file_managed' => array(
                    'table' => 'file_managed',
                    'columns' => array(
                        'fid' => 'fid',
                    ),
                ),
            ),
            'indexes' => array(
                'fid' => array(
                    'fid',
                ),
            ),
            'field_name' => 'field_header_image',
            'type' => 'media',
            'module' => 'media',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'fid' => array(
                    'type' => 'int',
                    'unsigned' => TRUE,
                    'not null' => FALSE,
                ),
                'title' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                ),
                'data' => array(
                    'type' => 'text',
                    'not null' => FALSE,
                    'size' => 'big',
                    'serialize' => TRUE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'book',
                ),
            ),
        ),
    );
    return $fields;
}