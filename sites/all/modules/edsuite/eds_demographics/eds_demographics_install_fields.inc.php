<?php

function _eds_demographics_installed_fields()
{
    $fields = array(
        'field_demograph_prop_id' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
//                    13 => 'Mohave Tri-State',
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
                            'field_data_field_demograph_prop_id' => array(
                                'value' => 'field_demograph_prop_id_value',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_demograph_prop_id' => array(
                                'value' => 'field_demograph_prop_id_value',
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
            'field_name' => 'field_demograph_prop_id',
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
                    'eds_demographics',
                ),
            ),
        ),
    );
    return $fields;
}