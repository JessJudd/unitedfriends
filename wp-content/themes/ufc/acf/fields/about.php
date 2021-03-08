<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'about2020',
        'title' => 'About Page',
        'style' => 'seamless',
        'position' => 'acf_after_title',
        'fields' => array (
            /* Hero */
            array(
                'key' => 'about2020__hero__tab',
                'label' => 'Hero',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__hero__d_img',
                'label' => 'Desktop Background Image',
                'name' => 'hero_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__hero__m_img',
                'label' => 'Mobile Background Image',
                'name' => 'hero_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__hero__headline',
                'label' => 'Headline',
                'name' => 'hero_headline',
                'type' => 'text',
                'default_value' => 'About United Friends',
                'required' => 1,
            ),

            /* Subhero */
            array(
                'key' => 'about2020__subhero__tab',
                'label' => 'Subhero',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__subhero__copy',
                'label' => 'Copy',
                'name' => 'subhero_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),

            /* Section 1 */
            array(
                'key' => 'about2020__s1__tab',
                'label' => 'Section 1',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__s1__headline',
                'label' => 'Headline',
                'name' => 's1_headline',
                'type' => 'text',
                'default_value' => 'Our Guiding Principles',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s1__featured',
                'label' => 'Section 1 Featured Content',
                'name' => 's1_featured',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 3,
                'max' => 3,
                'button_label' => 'Add Card',
                'sub_fields' => array(
                    array(
                        'key' => 'featured__header',
                        'label' => 'Header',
                        'name' => 's1_header',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'featured__copy',
                        'label' => 'Copy',
                        'name' => 's1_copy',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1
                    ),
                ),
            ),

            /* Section 1.1 - CTA with link */
            array(
                'key' => 'about2020__cta__link',
                'label' => 'Section 1.1',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__cta__headline',
                'label' => 'Headline',
                'name' => 'cta_headline',
                'type' => 'text',
                'default_value' => 'Click below to view our 3-year strategic plan to empower foster youth.',
            ),
            array(
                'key' => 'about2020__cta__button_url',
                'label' => 'Button URL',
                'name' => 'cta_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'about2020__cta__button_text',
                'label' => 'Button Text',
                'name' => 'cta_button_text',
                'type' => 'text',
            ),
            array(
                'key' => 'about2020__cta__button_target',
                'label' => 'Button Target',
                'name' => 'cta_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),

            /* Section 2 - Video */
            array(
                'key' => 'about2020__video__tab',
                'label' => 'Section 2',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__video__headline',
                'label' => 'Video Section Headline',
                'name' => 'video_headline',
                'type' => 'text',
                'default_value' => 'The United Friends Impact',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__video__embed',
                'label' => 'Video URL',
                'name' => 'video_embed',
                'type' => 'url',
                'required' => 1,
            ),

            /* Section 2 */
            array(
                'key' => 'about2020__s2__tab',
                'label' => 'Section 3',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__s2__headline',
                'label' => 'Headline',
                'name' => 's2_headline',
                'type' => 'text',
                'default_value' => 'History',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s2__copy',
                'label' => 'Copy',
                'name' => 's2_copy',
                'type' => 'textarea',
                'rows' => 2,
                'required' => 1
            ),
            array(
                'key' => 'about2020__s2__button_url',
                'label' => 'Button URL',
                'name' => 's2_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'about2020__s2__button_text',
                'label' => 'Button Text',
                'name' => 's2_button_text',
                'type' => 'text',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'about2020__s2button_target',
                'label' => 'Button Target',
                'name' => 's2_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            array(
                'key' => 'about2020__s2__d_img',
                'label' => 'Desktop Background Image',
                'name' => 's2_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),

            /* Section 3 */
            array(
                'key' => 'about2020__s3__tab',
                'label' => 'Section 4',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__s3__headline',
                'label' => 'Headline',
                'name' => 's3_headline',
                'type' => 'text',
                'default_value' => 'United Friends Serves 1,400 Current and Former Foster Youth Annually',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s3__left__title',
                'label' => 'Left Chart Title',
                'name' => 's3_left_title',
                'type' => 'text',
                'required' => 1,
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'about2020__s3__left__img',
                'label' => 'Left Chart Image',
                'name' => 's3_left_img',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'about2020__s3__right__title',
                'label' => 'Right Chart Title',
                'name' => 's3_right_title',
                'type' => 'text',
                'required' => 1,
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'about2020__s3__right__img',
                'label' => 'Right Chart Image',
                'name' => 's3_right_img',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'about2020__s3_demographics_repeat',
                'label' => 'Demographics',
                'name' => 's3_demographics_repeat',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => 'Add Demographic',
                'sub_fields' => array(
                    array(
                        'key' => 'about2020__s3_demographics_color',
                        'label' => 'Demographic Label Color',
                        'name' => 's3_color',
                        'type' => 'select',
                        'required' => 1,
                        'default' => '49',
                        'choices' => array(
                            'blue' => 'Blue',
                            'gold' => 'Gold',
                            'light-blue' => 'Light Blue',
                            'maroon' => 'Maroon',
                            'orange' => 'Orange',
                            'pink' => 'Pink',
                        ),
                        'wrapper' => array (
                            'width' => '25',
                        ),
                    ),
                    array(
                        'key' => 'about2020__s3_demographics_label',
                        'label' => 'Demographic Label Name',
                        'name' => 's3_label',
                        'type' => 'text',
                        'required' => 1,
                        'default' => '49',
                        'wrapper' => array (
                            'width' => '25',
                        ),
                    ),
                    array(
                        'key' => 'about2020__s3_demographics_value',
                        'label' => 'Demographic Percentage',
                        'name' => 's3_value',
                        'type' => 'text',
                        'required' => 1,
                        'default' => '49',
                        'instructions' => 'The % symbol is included, please only the type the number value.',
                        'wrapper' => array (
                            'width' => '25',
                        ),
                    ),
                ),
            ),
            /* Section 4 */
            array(
                'key' => 'about2020__s4__tab',
                'label' => 'Section 5',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__s4__d_img',
                'label' => 'Desktop Background Image',
                'name' => 's4_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            // array(
            //     'key' => 'about2020__s4__m_img',
            //     'label' => 'Mobile Background Image',
            //     'name' => 's4_image_m',
            //     'type' => 'image',
            //     'preview_size' => 'thumbnail',
            //     'return_format' => 'url',
            //     'required' => 1,
            // ),

            /* Section 5 */
            array(
                'key' => 'about2020__s5__tab',
                'label' => 'Section 5',
                'type' => 'tab',
            ),
            array(
                'key' => 'about2020__s5__left__headline',
                'label' => 'Left Headline',
                'name' => 's5_left_headline',
                'type' => 'text',
                'default_value' => 'Financials',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__left__copy',
                'label' => 'Left Copy',
                'name' => 's5_left_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__left__button_url',
                'label' => 'Left Button URL',
                'name' => 's5_left_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'about2020__s5__left__button_text',
                'label' => 'Left Button Text',
                'name' => 's5_left_button_text',
                'type' => 'text',
                'default_value' => 'Explore',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__left__button_target',
                'label' => 'Left Button Target',
                'name' => 's5_left_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            array(
                'key' => 'about2020__s5__right__headline',
                'label' => 'Right Headline',
                'name' => 's5_right_headline',
                'type' => 'text',
                'default_value' => 'Leadership',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__right__copy',
                'label' => 'Right Copy',
                'name' => 's5_right_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__right__button_url',
                'label' => 'Right Button URL',
                'name' => 's5_right_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'about2020__s5__right__button_text',
                'label' => 'Right Button Text',
                'name' => 's5_right_button_text',
                'type' => 'text',
                'default_value' => 'View All',
                'required' => 1,
            ),
            array(
                'key' => 'about2020__s5__right__button_target',
                'label' => 'Right Button Target',
                'name' => 's5_right_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'p-about-2020.php',
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