<?php

function _eds_properties_installed_fields()
{
    $fields = array(
//        'field_teaser' => array(
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
//                            'field_data_field_teaser' => array(
//                                'value' => 'field_teaser_value',
//                                'summary' => 'field_teaser_summary',
//                                'format' => 'field_teaser_format',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_teaser' => array(
//                                'value' => 'field_teaser_value',
//                                'summary' => 'field_teaser_summary',
//                                'format' => 'field_teaser_format',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//            'foreign keys' => array(
//                'format' => array(
//                    'table' => 'filter_format',
//                    'columns' => array(
//                        'format' => 'format',
//                    ),
//                ),
//            ),
//            'indexes' => array(
//                'format' => array(
//                    'format',
//                ),
//            ),
//            'field_name' => 'field_teaser',
//            'type' => 'text_with_summary',
//            'module' => 'text',
//            'active' => '1',
//            'locked' => '0',
//            'cardinality' => '1',
//            'deleted' => '0',
//            'columns' => array(
//                'value' => array(
//                    'type' => 'text',
//                    'size' => 'big',
//                    'not null' => false,
//                ),
//                'summary' => array(
//                    'type' => 'text',
//                    'size' => 'big',
//                    'not null' => false,
//                ),
//                'format' => array(
//                    'type' => 'varchar',
//                    'length' => 255,
//                    'not null' => false,
//                ),
//            ),
//            'bundles' => array(
//                'node' => array(
//                    'eds_properties',
//                ),
//            ),
//        ),
        'field_primary_alternate_contact' => array(
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
                            'field_data_field_primary_alternate_contact' => array(
                                'value' => 'field_primary_alternate_contact_value',
                                'format' => 'field_primary_alternate_contact_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_primary_alternate_contact' => array(
                                'value' => 'field_primary_alternate_contact_value',
                                'format' => 'field_primary_alternate_contact_format',
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
            'field_name' => 'field_primary_alternate_contact',
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
                    'not null' => false,
                ),
                'format' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => false,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_alternate_contact_email' => array(
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
                            'field_data_field_alternate_contact_email' => array(
                                'value' => 'field_alternate_contact_email_value',
                                'format' => 'field_alternate_contact_email_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_alternate_contact_email' => array(
                                'value' => 'field_alternate_contact_email_value',
                                'format' => 'field_alternate_contact_email_format',
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
            'field_name' => 'field_alternate_contact_email',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_alternate_contact_phone' => array(
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
                            'field_data_field_alternate_contact_phone' => array(
                                'value' => 'field_alternate_contact_phone_value',
                                'format' => 'field_alternate_contact_phone_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_alternate_contact_phone' => array(
                                'value' => 'field_alternate_contact_phone_value',
                                'format' => 'field_alternate_contact_phone_format',
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
            'field_name' => 'field_alternate_contact_phone',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_alternate_cont_comp_name' => array(
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
                            'field_data_field_alternate_cont_comp_name' => array(
                                'value' => 'field_alternate_cont_comp_name_value',
                                'format' => 'field_alternate_cont_comp_name_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_alternate_cont_comp_name' => array(
                                'value' => 'field_alternate_cont_comp_name_value',
                                'format' => 'field_alternate_cont_comp_name_format',
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
            'field_name' => 'field_alternate_cont_comp_name',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_alternate_cont_comp_url' => array(
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
                            'field_data_field_alternate_cont_comp_url' => array(
                                'value' => 'field_alternate_cont_comp_url_value',
                                'format' => 'field_alternate_cont_comp_url_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_alternate_cont_comp_url' => array(
                                'value' => 'field_alternate_cont_comp_url_value',
                                'format' => 'field_alternate_cont_comp_url_format',
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
            'field_name' => 'field_alternate_cont_comp_url',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_secondary_alternate_contac' => array(
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
                            'field_data_field_secondary_alternate_contac' => array(
                                'value' => 'field_secondary_alternate_contac_value',
                                'format' => 'field_secondary_alternate_contac_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_secondary_alternate_contac' => array(
                                'value' => 'field_secondary_alternate_contac_value',
                                'format' => 'field_secondary_alternate_contac_format',
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
            'field_name' => 'field_secondary_alternate_contac',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_location' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'location_settings' => array(
                    'form' => array(
                        'fields' => array(
                            'name' => array(
                                'collect' => '0',
                                'default' => '',
                                'weight' => '-100',
                            ),
                            'street' => array(
                                'collect' => '1',
                                'default' => '',
                                'weight' => '-99',
                            ),
                            'additional' => array(
                                'collect' => '1',
                                'default' => '',
                                'weight' => '-98',
                            ),
                            'city' => array(
                                'collect' => '1',
                                'default' => '',
                                'weight' => '-97',
                            ),
                            'province' => array(
                                'collect' => '1',
                                'widget' => 'select',
                                'default' => '',
                                'weight' => '-96',
                            ),
                            'country' => array(
                                'collect' => '1',
                                'default' => 'us',
                                'weight' => '-95',
                            ),
                            'postal_code' => array(
                                'collect' => '1',
                                'default' => '',
                                'weight' => '-94',
                            ),
                            'locpick' => array(
                                'collect' => '1',
                                'weight' => '-93',
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
                            'field_data_field_location' => array(
                                'lid' => 'field_location_lid',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_location' => array(
                                'lid' => 'field_location_lid',
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
            'field_name' => 'field_location',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_property_photographs' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'uri_scheme' => 'public',
              'default_image' => 0,
            ),
            'storage' => array(
              'type' => 'field_sql_storage',
              'settings' => array(),
              'module' => 'field_sql_storage',
              'active' => '1',
              'details' => array(
                'sql' => array(
                  'FIELD_LOAD_CURRENT' => array(
                    'field_data_field_property_photographs' => array(
                      'fid' => 'field_property_photographs_fid',
                      'alt' => 'field_property_photographs_alt',
                      'title' => 'field_property_photographs_title',
                      'width' => 'field_property_photographs_width',
                      'height' => 'field_property_photographs_height',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_property_photographs' => array(
                      'fid' => 'field_property_photographs_fid',
                      'alt' => 'field_property_photographs_alt',
                      'title' => 'field_property_photographs_title',
                      'width' => 'field_property_photographs_width',
                      'height' => 'field_property_photographs_height',
                    ),
                  ),
                ),
              ),
            ),
            'foreign keys' => array(
              'fid' => array(
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
            'field_permissions' => array(
              'type' => '0',
            ),
            'field_name' => 'field_property_photographs',
            'type' => 'image',
            'module' => 'image',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '-1',
            'deleted' => '0',
            'columns' => array(
              'fid' => array(
                'description' => 'The {file_managed}.fid being referenced in this field.',
                'type' => 'int',
                'not null' => FALSE,
                'unsigned' => TRUE,
              ),
              'alt' => array(
                'description' => "Alternative image text, for the image's 'alt' attribute.",
                'type' => 'varchar',
                'length' => 512,
                'not null' => FALSE,
              ),
              'title' => array(
                'description' => "Image title text, for the image's 'title' attribute.",
                'type' => 'varchar',
                'length' => 1024,
                'not null' => FALSE,
              ),
              'width' => array(
                'description' => 'The width of the image in pixels.',
                'type' => 'int',
                'unsigned' => TRUE,
              ),
              'height' => array(
                'description' => 'The height of the image in pixels.',
                'type' => 'int',
                'unsigned' => TRUE,
              ),
            ),
            'bundles' => array(
              'node' => array(
                'eds_properties',
              ),
            ),
          ),
        'field_property_type' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Building' => 'Building',
                    'Site' => 'Site',
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
                            'field_data_field_property_type' => array(
                                'value' => 'field_property_type_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_property_type' => array(
                                'value' => 'field_property_type_value',
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
            'field_name' => 'field_property_type',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_property_for_sale' => array(
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
                            'field_data_field_property_for_sale' => array(
                                'value' => 'field_property_for_sale_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_property_for_sale' => array(
                                'value' => 'field_property_for_sale_value',
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
            'field_name' => 'field_property_for_sale',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_property_for_lease' => array(
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
                            'field_data_field_property_for_lease' => array(
                                'value' => 'field_property_for_lease_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_property_for_lease' => array(
                                'value' => 'field_property_for_lease_value',
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
            'field_name' => 'field_property_for_lease',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_sale_cost_description' => array(
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
                            'field_data_field_sale_cost_description' => array(
                                'value' => 'field_sale_cost_description_value',
                                'format' => 'field_sale_cost_description_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sale_cost_description' => array(
                                'value' => 'field_sale_cost_description_value',
                                'format' => 'field_sale_cost_description_format',
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
            'field_name' => 'field_sale_cost_description',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_sale_additional_expense' => array(
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
                            'field_data_field_sale_additional_expense' => array(
                                'value' => 'field_sale_additional_expense_value',
                                'format' => 'field_sale_additional_expense_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sale_additional_expense' => array(
                                'value' => 'field_sale_additional_expense_value',
                                'format' => 'field_sale_additional_expense_format',
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
            'field_name' => 'field_sale_additional_expense',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_sale_actual_price' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_sale_actual_price' => array(
                                'value' => 'field_sale_actual_price_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sale_actual_price' => array(
                                'value' => 'field_sale_actual_price_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_sale_actual_price',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_lease_cost_description' => array(
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
                            'field_data_field_lease_cost_description' => array(
                                'value' => 'field_lease_cost_description_value',
                                'format' => 'field_lease_cost_description_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_lease_cost_description' => array(
                                'value' => 'field_lease_cost_description_value',
                                'format' => 'field_lease_cost_description_format',
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
            'field_name' => 'field_lease_cost_description',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_lease_additional_expense' => array(
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
                            'field_data_field_lease_additional_expense' => array(
                                'value' => 'field_lease_additional_expense_value',
                                'format' => 'field_lease_additional_expense_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_lease_additional_expense' => array(
                                'value' => 'field_lease_additional_expense_value',
                                'format' => 'field_lease_additional_expense_format',
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
            'field_name' => 'field_lease_additional_expense',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_lease_actual_per_month' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_lease_actual_per_month' => array(
                                'value' => 'field_lease_actual_per_month_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_lease_actual_per_month' => array(
                                'value' => 'field_lease_actual_per_month_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_lease_actual_per_month',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_lease_actual_per_year' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_lease_actual_per_year' => array(
                                'value' => 'field_lease_actual_per_year_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_lease_actual_per_year' => array(
                                'value' => 'field_lease_actual_per_year_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_lease_actual_per_year',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_zoning_type' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Commercial' => 'Commercial',
                    'Commercial/Agricultural' => 'Commercial/Agricultural',
                    'Heavy Commercial' => 'Heavy Commercial',
                    'Heavy Industrial' => 'Heavy Industrial',
                    'Industrial' => 'Industrial',
                    'Light Industrial' => 'Light Industrial',
                    'Multi-family/Retail' => 'Multi-family/Retail',
                    'Office' => 'Office',
                    'Office/Warehouse' => 'Office/Warehouse',
                    'Retail/Office' => 'Retail/Office',
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
                            'field_data_field_zoning_type' => array(
                                'value' => 'field_zoning_type_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_zoning_type' => array(
                                'value' => 'field_zoning_type_value',
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
            'field_name' => 'field_zoning_type',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_enterprise_zone' => array(
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
                            'field_data_field_enterprise_zone' => array(
                                'value' => 'field_enterprise_zone_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_enterprise_zone' => array(
                                'value' => 'field_enterprise_zone_value',
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
            'field_name' => 'field_enterprise_zone',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_reinvestment_zone' => array(
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
                            'field_data_field_reinvestment_zone' => array(
                                'value' => 'field_reinvestment_zone_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_reinvestment_zone' => array(
                                'value' => 'field_reinvestment_zone_value',
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
            'field_name' => 'field_reinvestment_zone',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_foreign_trade_zone' => array(
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
                            'field_data_field_foreign_trade_zone' => array(
                                'value' => 'field_foreign_trade_zone_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_foreign_trade_zone' => array(
                                'value' => 'field_foreign_trade_zone_value',
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
            'field_name' => 'field_foreign_trade_zone',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_rec_mark_devel_zone' => array(
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
                            'field_data_field_rec_mark_devel_zone' => array(
                                'value' => 'field_rec_mark_devel_zone_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_rec_mark_devel_zone' => array(
                                'value' => 'field_rec_mark_devel_zone_value',
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
            'field_name' => 'field_rec_mark_devel_zone',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
		
        'field_opportunity_zone' => array(
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
                            'field_data_field_opportunity_zone' => array(
                                'value' => 'field_opportunity_zone_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_opportunity_zone' => array(
                                'value' => 'field_opportunity_zone_value',
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
            'field_name' => 'field_opportunity_zone',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
		
        'field_acreage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_acreage' => array(
                                'value' => 'field_acreage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_acreage' => array(
                                'value' => 'field_acreage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_acreage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_rail_access' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    '1' => 'Yes',
                    '0' => 'No',
                    '2' => 'Possible',
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
                            'field_data_field_rail_access' => array(
                                'value' => 'field_rail_access_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_rail_access' => array(
                                'value' => 'field_rail_access_value',
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
            'field_name' => 'field_rail_access',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_rail_provider' => array(
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
                            'field_data_field_rail_provider' => array(
                                'value' => 'field_rail_provider_value',
                                'format' => 'field_rail_provider_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_rail_provider' => array(
                                'value' => 'field_rail_provider_value',
                                'format' => 'field_rail_provider_format',
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
            'field_name' => 'field_rail_provider',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_environmental_statement' => array(
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
                            'field_data_field_environmental_statement' => array(
                                'value' => 'field_environmental_statement_value',
                                'format' => 'field_environmental_statement_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_environmental_statement' => array(
                                'value' => 'field_environmental_statement_value',
                                'format' => 'field_environmental_statement_format',
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
            'field_name' => 'field_environmental_statement',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_properties_urls' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'attributes' => array(
                    'target' => 'default',
                    'class' => '',
                    'rel' => '',
                ),
                'url' => 0,
                'title' => 'optional',
                'title_value' => '',
                'title_maxlength' => 128,
                'enable_tokens' => 1,
                'display' => array(
                    'url_cutoff' => 80,
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
                            'field_data_field_properties_urls' => array(
                                'url' => 'field_properties_urls_url',
                                'title' => 'field_properties_urls_title',
                                'attributes' => 'field_properties_urls_attributes',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_properties_urls' => array(
                                'url' => 'field_properties_urls_url',
                                'title' => 'field_properties_urls_title',
                                'attributes' => 'field_properties_urls_attributes',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_properties_urls',
            'type' => 'link_field',
            'module' => 'link',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '-1',
            'deleted' => '0',
            'columns' => array(
                'url' => array(
                    'type' => 'varchar',
                    'length' => 2048,
                    'not null' => FALSE,
                    'sortable' => TRUE,
                ),
                'title' => array(
                    'type' => 'varchar',
                    'length' => 255,
                    'not null' => FALSE,
                    'sortable' => TRUE,
                ),
                'attributes' => array(
                    'type' => 'text',
                    'size' => 'medium',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_building_type' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Commercial' => 'Commercial',
                    'Manufacturing' => 'Manufacturing',
                    'Office' => 'Office',
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
                            'field_data_field_building_type' => array(
                                'value' => 'field_building_type_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_building_type' => array(
                                'value' => 'field_building_type_value',
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
            'field_name' => 'field_building_type',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_nearest_interstate_distanc' => array(
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
                            'field_data_field_nearest_interstate_distanc' => array(
                                'value' => 'field_nearest_interstate_distanc_value',
                                'format' => 'field_nearest_interstate_distanc_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_nearest_interstate_distanc' => array(
                                'value' => 'field_nearest_interstate_distanc_value',
                                'format' => 'field_nearest_interstate_distanc_format',
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
            'field_name' => 'field_nearest_interstate_distanc',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_office_sq_footage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_office_sq_footage' => array(
                                'value' => 'field_office_sq_footage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_office_sq_footage' => array(
                                'value' => 'field_office_sq_footage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_office_sq_footage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_retail_sq_footage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_retail_sq_footage' => array(
                                'value' => 'field_retail_sq_footage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_retail_sq_footage' => array(
                                'value' => 'field_retail_sq_footage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_retail_sq_footage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_warehouse_sq_footage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_warehouse_sq_footage' => array(
                                'value' => 'field_warehouse_sq_footage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_warehouse_sq_footage' => array(
                                'value' => 'field_warehouse_sq_footage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_warehouse_sq_footage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_manufacturing_sq_footage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_manufacturing_sq_footage' => array(
                                'value' => 'field_manufacturing_sq_footage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_manufacturing_sq_footage' => array(
                                'value' => 'field_manufacturing_sq_footage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_manufacturing_sq_footage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_sq_footage' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_sq_footage' => array(
                                'value' => 'field_sq_footage_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sq_footage' => array(
                                'value' => 'field_sq_footage_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_sq_footage',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_space_divisible_to' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_space_divisible_to' => array(
                                'value' => 'field_space_divisible_to_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_space_divisible_to' => array(
                                'value' => 'field_space_divisible_to_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_space_divisible_to',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_number_of_parking_spaces' => array(
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
                            'field_data_field_number_of_parking_spaces' => array(
                                'value' => 'field_number_of_parking_spaces_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_number_of_parking_spaces' => array(
                                'value' => 'field_number_of_parking_spaces_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_number_of_parking_spaces',
            'type' => 'number_integer',
            'module' => 'number',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_ceiling_height' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_ceiling_height' => array(
                                'value' => 'field_ceiling_height_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_ceiling_height' => array(
                                'value' => 'field_ceiling_height_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_ceiling_height',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_year_built' => array(
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
                            'field_data_field_year_built' => array(
                                'value' => 'field_year_built_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_year_built' => array(
                                'value' => 'field_year_built_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_year_built',
            'type' => 'number_integer',
            'module' => 'number',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_building_dimensions' => array(
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
                            'field_data_field_building_dimensions' => array(
                                'value' => 'field_building_dimensions_value',
                                'format' => 'field_building_dimensions_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_building_dimensions' => array(
                                'value' => 'field_building_dimensions_value',
                                'format' => 'field_building_dimensions_format',
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
            'field_name' => 'field_building_dimensions',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_construction_type' => array(
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
                            'field_data_field_construction_type' => array(
                                'value' => 'field_construction_type_value',
                                'format' => 'field_construction_type_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_construction_type' => array(
                                'value' => 'field_construction_type_value',
                                'format' => 'field_construction_type_format',
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
            'field_name' => 'field_construction_type',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_overhead_crane_1_capacity' => array(
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
                            'field_data_field_overhead_crane_1_capacity' => array(
                                'value' => 'field_overhead_crane_1_capacity_value',
                                'format' => 'field_overhead_crane_1_capacity_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_overhead_crane_1_capacity' => array(
                                'value' => 'field_overhead_crane_1_capacity_value',
                                'format' => 'field_overhead_crane_1_capacity_format',
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
            'field_name' => 'field_overhead_crane_1_capacity',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_overhead_crane_2_capacity' => array(
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
                            'field_data_field_overhead_crane_2_capacity' => array(
                                'value' => 'field_overhead_crane_2_capacity_value',
                                'format' => 'field_overhead_crane_2_capacity_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_overhead_crane_2_capacity' => array(
                                'value' => 'field_overhead_crane_2_capacity_value',
                                'format' => 'field_overhead_crane_2_capacity_format',
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
            'field_name' => 'field_overhead_crane_2_capacity',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_overhead_crane_3_capacity' => array(
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
                            'field_data_field_overhead_crane_3_capacity' => array(
                                'value' => 'field_overhead_crane_3_capacity_value',
                                'format' => 'field_overhead_crane_3_capacity_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_overhead_crane_3_capacity' => array(
                                'value' => 'field_overhead_crane_3_capacity_value',
                                'format' => 'field_overhead_crane_3_capacity_format',
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
            'field_name' => 'field_overhead_crane_3_capacity',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_column_spacing' => array(
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
                    'field_data_field_column_spacing' => array(
                      'value' => 'field_column_spacing_value',
                      'format' => 'field_column_spacing_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_column_spacing' => array(
                      'value' => 'field_column_spacing_value',
                      'format' => 'field_column_spacing_format',
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
            'field_name' => 'field_column_spacing',
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
                'eds_properties',
              ),
            ),
          ),
        'field_no_of_grd_lvl_load_docks' => array(
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
                            'field_data_field_no_of_grd_lvl_load_docks' => array(
                                'value' => 'field_no_of_grd_lvl_load_docks_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_no_of_grd_lvl_load_docks' => array(
                                'value' => 'field_no_of_grd_lvl_load_docks_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_no_of_grd_lvl_load_docks',
            'type' => 'number_integer',
            'module' => 'number',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_no_of_high_loading_docks' => array(
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
                            'field_data_field_no_of_high_loading_docks' => array(
                                'value' => 'field_no_of_high_loading_docks_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_no_of_high_loading_docks' => array(
                                'value' => 'field_no_of_high_loading_docks_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_no_of_high_loading_docks',
            'type' => 'number_integer',
            'module' => 'number',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_sprinkler_system' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Yes' => 'Yes',
                    'No' => 'No',
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
                            'field_data_field_sprinkler_system' => array(
                                'value' => 'field_sprinkler_system_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sprinkler_system' => array(
                                'value' => 'field_sprinkler_system_value',
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
            'field_name' => 'field_sprinkler_system',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_primary_anchor_tenant' => array(
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
                            'field_data_field_primary_anchor_tenant' => array(
                                'value' => 'field_primary_anchor_tenant_value',
                                'format' => 'field_primary_anchor_tenant_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_primary_anchor_tenant' => array(
                                'value' => 'field_primary_anchor_tenant_value',
                                'format' => 'field_primary_anchor_tenant_format',
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
            'field_name' => 'field_primary_anchor_tenant',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_secondary_anchor_tenant' => array(
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
                            'field_data_field_secondary_anchor_tenant' => array(
                                'value' => 'field_secondary_anchor_tenant_value',
                                'format' => 'field_secondary_anchor_tenant_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_secondary_anchor_tenant' => array(
                                'value' => 'field_secondary_anchor_tenant_value',
                                'format' => 'field_secondary_anchor_tenant_format',
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
            'field_name' => 'field_secondary_anchor_tenant',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_date_available' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'granularity' => array(
                    'month' => 'month',
                    'day' => 'day',
                    'hour' => 'hour',
                    'minute' => 'minute',
                    'year' => 'year',
                    'second' => 0,
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
                            'field_data_field_date_available' => array(
                                'value' => 'field_date_available_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_date_available' => array(
                                'value' => 'field_date_available_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_date_available',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_previous_use' => array(
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
                            'field_data_field_previous_use' => array(
                                'value' => 'field_previous_use_value',
                                'format' => 'field_previous_use_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_previous_use' => array(
                                'value' => 'field_previous_use_value',
                                'format' => 'field_previous_use_format',
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
            'field_name' => 'field_previous_use',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_site_type' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Airport' => 'Airport',
                    'Commercial' => 'Commercial',
                    'Greenfield' => 'Greenfield',
                    'Industrial' => 'Industrial',
                    'Manufacturing' => 'Manufacturing',
                    'Office' => 'Office',
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
                            'field_data_field_site_type' => array(
                                'value' => 'field_site_type_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_site_type' => array(
                                'value' => 'field_site_type_value',
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
            'field_name' => 'field_site_type',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_frontage' => array(
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
                            'field_data_field_frontage' => array(
                                'value' => 'field_frontage_value',
                                'format' => 'field_frontage_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_frontage' => array(
                                'value' => 'field_frontage_value',
                                'format' => 'field_frontage_format',
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
            'field_name' => 'field_frontage',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_qr_image_path' => array(
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
                            'field_data_field_qr_image_path' => array(
                                'fid' => 'field_qr_image_path_fid',
                                'title' => 'field_qr_image_path_title',
                                'data' => 'field_qr_image_path_data',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_qr_image_path' => array(
                                'fid' => 'field_qr_image_path_fid',
                                'title' => 'field_qr_image_path_title',
                                'data' => 'field_qr_image_path_data',
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
            'field_name' => 'field_qr_image_path',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_additional_information' => array(
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
                            'field_data_field_additional_information' => array(
                                'value' => 'field_additional_information_value',
                                'summary' => 'field_additional_information_summary',
                                'format' => 'field_additional_information_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_additional_information' => array(
                                'value' => 'field_additional_information_value',
                                'summary' => 'field_additional_information_summary',
                                'format' => 'field_additional_information_format',
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
            'field_name' => 'field_additional_information',
            'type' => 'text_with_summary',
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
                'summary' => array(
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
                    'eds_properties',
                ),
            ),
        ),
        'field_electricity_service_provid' => array(
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
                            'field_data_field_electricity_service_provid' => array(
                                'value' => 'field_electricity_service_provid_value',
                                'format' => 'field_electricity_service_provid_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_electricity_service_provid' => array(
                                'value' => 'field_electricity_service_provid_value',
                                'format' => 'field_electricity_service_provid_format',
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
            'field_name' => 'field_electricity_service_provid',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_electricity_supply' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    '110 volt' => '110 volt',
                    '220 volt' => '220 volt',
                    '480 volt' => '480 volt',
                    'greater than 480 volt' => 'greater than 480 volt',
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
                            'field_data_field_electricity_supply' => array(
                                'value' => 'field_electricity_supply_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_electricity_supply' => array(
                                'value' => 'field_electricity_supply_value',
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
            'field_name' => 'field_electricity_supply',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_phase' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'Phase I' => 'Phase I',
                    'Phase II' => 'Phase II',
                    'Phase III' => 'Phase III',
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
                            'field_data_field_phase' => array(
                                'value' => 'field_phase_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_phase' => array(
                                'value' => 'field_phase_value',
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
            'field_name' => 'field_phase',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_number_of_indep_sources' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    'One' => 'One',
                    'Two' => 'Two',
                    'Three' => 'Three',
                    'Greater than Three' => 'Greater than Three',
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
                            'field_data_field_number_of_indep_sources' => array(
                                'value' => 'field_number_of_indep_sources_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_number_of_indep_sources' => array(
                                'value' => 'field_number_of_indep_sources_value',
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
            'field_name' => 'field_number_of_indep_sources',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_water_supply_provider' => array(
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
                            'field_data_field_water_supply_provider' => array(
                                'value' => 'field_water_supply_provider_value',
                                'format' => 'field_water_supply_provider_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_water_supply_provider' => array(
                                'value' => 'field_water_supply_provider_value',
                                'format' => 'field_water_supply_provider_format',
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
            'field_name' => 'field_water_supply_provider',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_water_supply' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    '1 inch' => '1 inch',
                    '2 inch' => '2 inch',
                    '3 inch' => '3 inch',
                    '4 inch' => '4 inch',
                    '5 inch' => '5 inch',
                    '6 inch' => '6 inch',
                    '7 inch' => '7 inch',
                    '8 inch' => '8 inch',
                    '9 inch' => '9 inch',
                    '10 inch' => '10 inch',
                    '11 inch' => '11 inch',
                    '12 inch' => '12 inch',
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
                            'field_data_field_water_supply' => array(
                                'value' => 'field_water_supply_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_water_supply' => array(
                                'value' => 'field_water_supply_value',
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
            'field_name' => 'field_water_supply',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_maximum_capacity_available' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'decimal_separator' => '.',
            ),
            'storage' => array(
                'type' => 'field_sql_storage',
                'settings' => array(),
                'module' => 'field_sql_storage',
                'active' => '1',
                'details' => array(
                    'sql' => array(
                        'FIELD_LOAD_CURRENT' => array(
                            'field_data_field_maximum_capacity_available' => array(
                                'value' => 'field_maximum_capacity_available_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_maximum_capacity_available' => array(
                                'value' => 'field_maximum_capacity_available_value',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(),
            'indexes' => array(),
            'field_name' => 'field_maximum_capacity_available',
            'type' => 'number_float',
            'module' => 'number',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'value' => array(
                    'type' => 'float',
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_raw_water_available' => array(
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
                            'field_data_field_raw_water_available' => array(
                                'value' => 'field_raw_water_available_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_raw_water_available' => array(
                                'value' => 'field_raw_water_available_value',
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
            'field_name' => 'field_raw_water_available',
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
                'node' => array(
                    'eds_properties',
                ),
            ),
        ),
        'field_sewer_service_provider' => array(
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
                            'field_data_field_sewer_service_provider' => array(
                                'value' => 'field_sewer_service_provider_value',
                                'format' => 'field_sewer_service_provider_format',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sewer_service_provider' => array(
                                'value' => 'field_sewer_service_provider_value',
                                'format' => 'field_sewer_service_provider_format',
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
            'field_name' => 'field_sewer_service_provider',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_sewer_service' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    '1 inch' => '1 inch',
                    '2 inch' => '2 inch',
                    '3 inch' => '3 inch',
                    '4 inch' => '4 inch',
                    '5 inch' => '5 inch',
                    '6 inch' => '6 inch',
                    '7 inch' => '7 inch',
                    '8 inch' => '8 inch',
                    '9 inch' => '9 inch',
                    '10 inch' => '10 inch',
                    '11 inch' => '11 inch',
                    '12 inch' => '12 inch',
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
                            'field_data_field_sewer_service' => array(
                                'value' => 'field_sewer_service_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_sewer_service' => array(
                                'value' => 'field_sewer_service_value',
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
            'field_name' => 'field_sewer_service',
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
                    'eds_properties',
                ),
            ),
        ),
        'field_verified' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
              'allowed_values' => array(
                1 => 'No',
                6 => 'No 6 month',
                9 => 'No 6 month 2 weeks',
                0 => 'Yes',
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
                    'field_data_field_verified' => array(
                      'value' => 'field_verified_value',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_verified' => array(
                      'value' => 'field_verified_value',
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
            'field_name' => 'field_verified',
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
                'eds_properties',
              ),
            ),
          ),
        'field_emails_for_cron' => array(
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
                    'field_data_field_emails_for_cron' => array(
                      'value' => 'field_emails_for_cron_value',
                      'format' => 'field_emails_for_cron_format',
                    ),
                  ),
                  'FIELD_LOAD_REVISION' => array(
                    'field_revision_field_emails_for_cron' => array(
                      'value' => 'field_emails_for_cron_value',
                      'format' => 'field_emails_for_cron_format',
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
            'field_name' => 'field_emails_for_cron',
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
                'eds_properties',
              ),
            ),
          )

    );
    return $fields;
}