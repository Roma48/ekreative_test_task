<?php

function _eds_demographics_installed_instances()
{
    $instances = array(
        'field_demograph_prop_id' => array(
            'label' => 'Property',
            'widget' => array(
                'weight' => '1',
                'type' => 'options_select',
                'module' => 'options',
                'active' => 1,
                'settings' => array(),
            ),
            'settings' => array(
                'user_register_form' => FALSE,
            ),
            'display' => array(
                'default' => array(
                    'label' => 'above',
                    'type' => 'list_default',
                    'settings' => array(),
                    'module' => 'list',
                    'weight' => 1,
                ),
                'teaser' => array(
                    'type' => 'hidden',
                    'label' => 'above',
                    'settings' => array(),
                    'weight' => 0,
                ),
                'related_list' => array(
                    'type' => 'hidden',
                    'label' => 'above',
                    'settings' => array(),
                    'weight' => 0,
                ),
                'preview_list' => array(
                    'type' => 'hidden',
                    'label' => 'above',
                    'settings' => array(),
                    'weight' => 0,
                ),
            ),
            'required' => 1,
            'description' => '',
            'default_value' => NULL,
            'field_name' => 'field_demograph_prop_id',
            'entity_type' => 'node',
            'bundle' => 'eds_demographics',
            'deleted' => '0',
        ),
    );
    return $instances;
}