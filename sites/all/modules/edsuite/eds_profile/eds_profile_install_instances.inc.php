<?php

function _eds_profile_installed_instances()
{
    $instances = array(
        'field_parent' => array(
            'label' => 'Parent',
            'widget' => array(
              'weight' => '2',
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
                'type' => 'hidden',
                'weight' => '1',
                'settings' => array(),
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '0',
                'settings' => array(),
              ),
              'rss' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '1',
                'settings' => array(),
              ),
              'token' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '1',
                'settings' => array(),
              ),
              'related_list' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '0',
                'settings' => array(),
              ),
              'preview_list' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '0',
                'settings' => array(),
              ),
              'node_embed' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '0',
                'settings' => array(),
              ),
              'book_report' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '0',
                'settings' => array(),
              ),
            ),
            'required' => 1,
            'description' => '',
            'default_value' => array(
              array(
                'value' => '0',
              ),
            ),
            'field_name' => 'field_parent',
            'entity_type' => 'node',
            'bundle' => 'book',
            'deleted' => '0',
          ),
        'field_header_image' => array(
            'label' => 'Header Image',
            'widget' => array(
                'weight' => '3',
                'type' => 'media_generic',
                'module' => 'media',
                'active' => 1,
                'settings' => array(
                    'allowed_types' => array(
                        'image' => 'image',
                        'audio' => 0,
                        'video' => 0,
                        'default' => 0,
                    ),
                    'allowed_schemes' => array(
                        'public' => 'public',
                        'private' => 'private',
                    ),
                    'progress_indicator' => 'throbber',
                ),
            ),
            'settings' => array(
                'file_extensions' => 'jpg jpeg gif png',
                'user_register_form' => FALSE,
            ),
            'display' => array(
                'default' => array(
                    'label' => 'above',
                    'type' => 'hidden',
                    'weight' => '2',
                    'settings' => array(),
                ),
                'teaser' => array(
                    'label' => 'hidden',
                    'type' => 'media',
                    'weight' => '0',
                    'settings' => array(
                        'file_view_mode' => 'media_preview',
                    ),
                    'module' => 'media',
                ),
                'rss' => array(
                    'label' => 'above',
                    'type' => 'hidden',
                    'weight' => '2',
                    'settings' => array(),
                ),
                'token' => array(
                    'label' => 'hidden',
                    'type' => 'media',
                    'weight' => '2',
                    'settings' => array(
                        'file_view_mode' => 'media_preview',
                    ),
                    'module' => 'media',
                ),
                'related_list' => array(
                    'label' => 'above',
                    'type' => 'hidden',
                    'weight' => '0',
                    'settings' => array(),
                ),
                'preview_list' => array(
                    'label' => 'hidden',
                    'type' => 'media',
                    'weight' => '0',
                    'settings' => array(
                        'file_view_mode' => 'media_preview',
                    ),
                    'module' => 'media',
                ),
                'book_report' => array(
                    'label' => 'above',
                    'type' => 'hidden',
                    'weight' => '0',
                    'settings' => array(),
                ),
            ),
            'required' => 0,
            'description' => '',
            'field_name' => 'field_header_image',
            'entity_type' => 'node',
            'bundle' => 'book',
            'deleted' => '0',
        ),
    );
    return $instances;
}