<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'programs2020',
    'title' => 'Programs Page',
    'style' => 'seamless',
    'position' => 'acf_after_title',
    'fields' => array (
        /* Hero */
            array(
                'key' => 'programs2020__hero__tab',
                'label' => 'Hero',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__hero__d_img',
                'label' => 'Desktop Background Image',
                'name' => 'hero_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__hero__m_img',
                'label' => 'Mobile Background Image',
                'name' => 'hero_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__hero__m_align',
                'label' => 'Mobile Background Image Alignment',
                'name' => 'hero_image_m_align',
                'type' => 'select',
                'instructions' => 'Optimize vertical alignment of the mobile hero image. The image will be centered horizontally by default.',
                'choices' => array(
                    'center center' => 'Center',
                    'center top' => 'Top',
                    'center bottom' => 'Bottom'
                ),
            ),
            array(
                'key' => 'programs2020__hero__headline',
                'label' => 'Headline',
                'name' => 'hero_headline',
                'type' => 'text',
                'default_value' => 'Programs',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__hero__copy',
                'label' => 'Copy',
                'name' => 'hero_copy',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'United Friends offers housing and education programs for current and former foster youth.',
                'required' => 1,
            ),
        /* Subhero */
            array(
                'key' => 'programs2020__subhero__tab',
                'label' => 'Subhero',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__subhero__copy',
                'label' => 'Copy',
                'name' => 'subhero_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),
        /* Blue section */
            array(
                'key' => 'programs2020__blue__tab',
                'label' => 'Blue Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__blue__title',
                'label' => 'Title',
                'name' => 'blue_title',
                'type' => 'text',
                'default_value' => 'Pathways Program',
            ),
            array(
                'key' => 'programs2020__blue__subtitle',
                'label' => 'Subtitle',
                'name' => 'blue_subtitle',
                'type' => 'text',
                'default_value' => 'Get an apartment. Find a job. Build relationships.',
            ),
            array(
                'key' => 'programs2020__blue__copy',
                'label' => 'Copy',
                'name' => 'blue_copy',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'programs2020__blue__button_url',
                'label' => 'Button URL',
                'name' => 'blue_button_url',
                'type' => 'url',
            ),
            array(
                'key' => 'programs2020__blue__button_text',
                'label' => 'Button Text',
                'name' => 'blue_button_text',
                'type' => 'text',
                'default_value' => 'Learn More',
            ),
            array(
                'key' => 'programs2020__blue__button_target',
                'label' => 'Button Target',
                'name' => 'blue_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
            ),
        /* Quote / Image */
            array(
                'key' => 'programs2020__quote1__tab',
                'label' => 'Quote + Image',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__quote1__text',
                'label' => 'Quote',
                'name' => 'quote1_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'UFC has been like a second family and has always been there for me. My life with UFC has changed me completely. I learned who I am, what I want to become, and how I can get there.',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__quote1__name',
                'label' => 'Name',
                'name' => 'quote1_name',
                'type' => 'text',
                'default_value' => 'Ruby A. United Friends graduate',
                'required' => 1
            ),
            array(
                'key' => 'programs2020__quote1__d_img',
                'label' => 'Desktop Background Image',
                'name' => 'quote1_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__quote1__m_img',
                'label' => 'Mobile Background Image',
                'name' => 'quote1_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
        /* Blue section */
            array(
                'key' => 'programs2020__purple__tab',
                'label' => 'Purple Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__purple__title',
                'label' => 'Title',
                'name' => 'purple_title',
                'type' => 'text',
                'default_value' => 'Pathways Program',
            ),
            array(
                'key' => 'programs2020__purple__subtitle',
                'label' => 'Subtitle',
                'name' => 'purple_subtitle',
                'type' => 'text',
                'default_value' => 'Get an apartment. Find a job. Build relationships.',
            ),
            array(
                'key' => 'programs2020__purple__copy',
                'label' => 'Copy',
                'name' => 'purple_copy',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'programs2020__purple__button_url',
                'label' => 'Button URL',
                'name' => 'purple_button_url',
                'type' => 'url',
            ),
            array(
                'key' => 'programs2020__purple__button_text',
                'label' => 'Button Text',
                'name' => 'purple_button_text',
                'type' => 'text',
                'default_value' => 'Learn More',
            ),
            array(
                'key' => 'programs2020__purple__button_target',
                'label' => 'Button Target',
                'name' => 'purple_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
            ),
        /* Image / Quote */
            array(
                'key' => 'programs2020__quote2__tab',
                'label' => 'Image + Quote',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__quote2__text',
                'label' => 'Quote',
                'name' => 'quote2_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'I know that when I need help, I can just call my counselor. You go from just being alone in the world to having full support from someone.',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__quote2__name',
                'label' => 'Name',
                'name' => 'quote2_name',
                'type' => 'text',
                'default_value' => 'Scholars program participant',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__quote2__d_img',
                'label' => 'Desktop Background Image',
                'name' => 'quote2_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__quote2__m_img',
                'label' => 'Mobile Background Image',
                'name' => 'quote2_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
        /* Columns & Charts */
            array(
                'key' => 'programs2020__charts__tab',
                'label' => 'Charts',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__charts__headline',
                'label' => 'Headline',
                'name' => 'charts_headline',
                'type' => 'text',
                'default_value' => 'A Successful Relationship Model',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__charts__copy',
                'label' => 'Copy',
                'name' => 'charts_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),
            array(
                'key' => 'programs2020__charts__col1_title',
                'label' => 'Column 1: Headline',
                'name' => 'col1_title',
                'type' => 'text',
                'default_value' => 'Pathways',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__charts__col1_copy',
                'label' => 'Column 1: Copy',
                'name' => 'col1_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),
            array(
                'key' => 'programs2020__charts__col1_list',
                'label' => 'Column 1: List',
                'name' => 'col1_list',
                'type' => 'repeater',
                'min' => 1,
                'max' => 4,
                'sub_fields' => array(
                    array(
                        'key' => 'col1_list_item',
                        'label' => 'List Item',
                        'name' => 'list_copy',
                        'type' => 'text',
                        'required' => 1,
                    ),
                )
            ),
            array(
                'key' => 'programs2020__col1__button_url',
                'label' => 'Column 1: Button URL',
                'name' => 'col1_button_url',
                'type' => 'url',
            ),
            array(
                'key' => 'programs2020__col1__button_text',
                'label' => 'Column 1: Button Text',
                'name' => 'col1_button_text',
                'type' => 'text',
                'default_value' => 'Learn More',
            ),
            array(
                'key' => 'programs2020__col1__button_target',
                'label' => 'Column 1: Button Target',
                'name' => 'col1_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
            ),
            array(
                'key' => 'programs2020__charts__col2_title',
                'label' => 'Column 2: Headline',
                'name' => 'col2_title',
                'type' => 'text',
                'default_value' => 'Scholars',
                'required' => 1,
            ),
            array(
                'key' => 'programs2020__charts__col2_copy',
                'label' => 'Column 2: Copy',
                'name' => 'col2_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),
            array(
                'key' => 'programs2020__charts__col2_list',
                'label' => 'Column 2: List',
                'name' => 'col2_list',
                'type' => 'repeater',
                'min' => 1,
                'max' => 4,
                'sub_fields' => array(
                    array(
                        'key' => 'col2_list_item',
                        'label' => 'List Item',
                        'name' => 'list_copy',
                        'type' => 'text',
                        'required' => 1,
                    ),
                )
            ),
            array(
                'key' => 'programs2020__col2__button_url',
                'label' => 'Column 2: Button URL',
                'name' => 'col2_button_url',
                'type' => 'url',
            ),
            array(
                'key' => 'programs2020__col2__button_text',
                'label' => 'Column 2: Button Text',
                'name' => 'col2_button_text',
                'type' => 'text',
                'default_value' => 'Learn More',
            ),
            array(
                'key' => 'programs2020__col2__button_target',
                'label' => 'Column 2: Button Target',
                'name' => 'col2_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
            ),
            array(
                'key' => 'programs2020__charts__repeater',
                'label' => 'Charts',
                'name' => 'charts__repeater',
                'type' => 'repeater',
                'min' => 1,
                'max' => 3,
                'sub_fields' => array(
                    array(
                        'key' => 'chart_img',
                        'label' => 'Chart Image',
                        'name' => 'img',
                        'type' => 'image',
                        'preview_size' => 'thumbnail',
                        'return_format' => 'url',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'chart_value',
                        'label' => 'Chart Value (%)',
                        'name' => 'value',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'chart_copy',
                        'label' => 'Chart Description',
                        'name' => 'copy',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                )
            ),
        /* Yellow section */
            array(
                'key' => 'programs2020__yellow__tab',
                'label' => 'Yellow Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'programs2020__yellow__copy',
                'label' => 'Copy',
                'name' => 'yellow_copy',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'programs2020__yellow__button_url',
                'label' => 'Button URL',
                'name' => 'yellow_button_url',
                'type' => 'url',
            ),
            array(
                'key' => 'programs2020__yellow__button_text',
                'label' => 'Button Text',
                'name' => 'yellow_button_text',
                'type' => 'text',
                'default_value' => 'Learn More',
            ),
            array(
                'key' => 'programs2020__yellow__button_target',
                'label' => 'Button Target',
                'name' => 'yellow_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
            ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'p-programs-2020.php',
            ),
        ),
    ),
    'hide_on_screen' => array(
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
        5 => 'slug',
        6 => 'author',
        7 => 'format',
        8 => 'featured_image',
        9 => 'categories',
        10 => 'tags',
        11 => 'send-trackbacks',
    ),
));

endif;

?>