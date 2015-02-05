<?php

function _edsuite_installed_fields_news()
{
    $fields = array(
        'field_news_authors' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    array(
                        'vocabulary' => 'authors',
                        'parent' => '0',
                    ),
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
                            'field_data_field_news_authors' => array(
                                'tid' => 'field_news_authors_tid',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_news_authors' => array(
                                'tid' => 'field_news_authors_tid',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'tid' => array(
                    'table' => 'taxonomy_term_data',
                    'columns' => array(
                        'tid' => 'tid',
                    ),
                ),
            ),
            'indexes' => array(
                'tid' => array(
                    'tid',
                ),
            ),
            'field_name' => 'field_news_authors',
            'type' => 'taxonomy_term_reference',
            'module' => 'taxonomy',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'tid' => array(
                    'type' => 'int',
                    'unsigned' => TRUE,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'news',
                ),
            ),
        ),
        'field_news_image' => array(
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
                            'field_data_field_news_image' => array(
                                'fid' => 'field_news_image_fid',
                                'alt' => 'field_news_image_alt',
                                'title' => 'field_news_image_title',
                                'width' => 'field_news_image_width',
                                'height' => 'field_news_image_height',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_news_image' => array(
                                'fid' => 'field_news_image_fid',
                                'alt' => 'field_news_image_alt',
                                'title' => 'field_news_image_title',
                                'width' => 'field_news_image_width',
                                'height' => 'field_news_image_height',
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
            'field_name' => 'field_news_image',
            'type' => 'image',
            'module' => 'image',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
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
                    'news',
                ),
            ),
        ),
    );
    return $fields;
}

function _edsuite_installed_fields_blog()
{
    $fields = array(
        'field_blog_authors' => array(
            'translatable' => '0',
            'entity_types' => array(),
            'settings' => array(
                'allowed_values' => array(
                    array(
                        'vocabulary' => 'authors',
                        'parent' => '0',
                    ),
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
                            'field_data_field_blog_authors' => array(
                                'tid' => 'field_blog_authors_tid',
                            ),
                        ),
                        'FIELD_LOAD_REVISION' => array(
                            'field_revision_field_blog_authors' => array(
                                'tid' => 'field_blog_authors_tid',
                            ),
                        ),
                    ),
                ),
            ),
            'foreign keys' => array(
                'tid' => array(
                    'table' => 'taxonomy_term_data',
                    'columns' => array(
                        'tid' => 'tid',
                    ),
                ),
            ),
            'indexes' => array(
                'tid' => array(
                    'tid',
                ),
            ),
            'field_name' => 'field_blog_authors',
            'type' => 'taxonomy_term_reference',
            'module' => 'taxonomy',
            'active' => '1',
            'locked' => '0',
            'cardinality' => '1',
            'deleted' => '0',
            'columns' => array(
                'tid' => array(
                    'type' => 'int',
                    'unsigned' => TRUE,
                    'not null' => FALSE,
                ),
            ),
            'bundles' => array(
                'node' => array(
                    'blog',
                ),
            ),
        ),
    );
    return $fields;
}
