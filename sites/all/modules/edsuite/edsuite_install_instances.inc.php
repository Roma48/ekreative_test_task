<?php

function _edsuite_installed_instances_news()
{
    $instances = array(
        'field_news_authors' => array(
            'label' => 'Author',
            'widget' => array(
                'weight' => '33',
                'type' => 'taxonomy_autocomplete',
                'module' => 'taxonomy',
                'active' => 0,
                'settings' => array(
                    'size' => 60,
                    'autocomplete_path' => 'taxonomy/autocomplete',
                ),
            ),
            'settings' => array(
                'user_register_form' => FALSE,
            ),
            'display' => array(
                'default' => array(
                    'label' => 'inline',
                    'type' => 'taxonomy_term_reference_plain',
                    'settings' => array(),
                    'module' => 'taxonomy',
                    'weight' => 2,
                ),
                'teaser' => array(
                    'type' => 'hidden',
                    'label' => 'inline',
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
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'field_name' => 'field_news_authors',
            'entity_type' => 'node',
            'bundle' => 'news',
            'deleted' => '0',
        ),
        'field_news_image' => array(
            'label' => "What's Happening Thumbnail",
            'widget' => array(
                'weight' => '3',
                'type' => 'image_image',
                'module' => 'image',
                'active' => 1,
                'settings' => array(
                    'progress_indicator' => 'throbber',
                    'preview_image_style' => 'thumbnail',
                ),
            ),
            'settings' => array(
                'file_directory' => '',
                'file_extensions' => 'png gif jpg jpeg',
                'max_filesize' => '',
                'max_resolution' => '',
                'min_resolution' => '',
                'alt_field' => 0,
                'title_field' => 0,
                'default_image' => 0,
                'user_register_form' => FALSE,
            ),
            'display' => array(
                'default' => array(
                    'label' => 'above',
                    'type' => 'image',
                    'settings' => array(
                        'image_style' => '',
                        'image_link' => '',
                    ),
                    'module' => 'image',
                    'weight' => 3,
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
            'required' => 0,
            'description' => '',
            'field_name' => 'field_news_image',
            'entity_type' => 'node',
            'bundle' => 'news',
            'deleted' => '0',
        ),
    );
    return $instances;
}

function _edsuite_installed_instances_blog()
{
    $instances = array(
        'field_blog_authors' => array(
            'label' => 'Authors',
            'widget' => array(
                'weight' => '33',
                'type' => 'taxonomy_autocomplete',
                'module' => 'taxonomy',
                'active' => 0,
                'settings' => array(
                    'size' => 60,
                    'autocomplete_path' => 'taxonomy/autocomplete',
                ),
            ),
            'settings' => array(
                'user_register_form' => FALSE,
            ),
            'display' => array(
                'default' => array(
                    'label' => 'inline',
                    'type' => 'taxonomy_term_reference_plain',
                    'settings' => array(),
                    'module' => 'taxonomy',
                    'weight' => 2,
                ),
                'teaser' => array(
                    'type' => 'hidden',
                    'label' => 'inline',
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
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'field_name' => 'field_blog_authors',
            'entity_type' => 'node',
            'bundle' => 'blog',
            'deleted' => '0',
        ),
    );
    return $instances;
}