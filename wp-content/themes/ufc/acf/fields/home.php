<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'home2020',
        'title' => 'Home Page',
        'style' => 'seamless',
        'position' => 'acf_after_title',
        'fields' => array (
            /* Hero */
            array(
                'key' => 'home2020__hero__tab',
                'label' => 'Hero',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__hero__d_img',
                'label' => 'Desktop Background Image',
                'name' => 'hero_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__hero__m_img',
                'label' => 'Mobile Background Image',
                'name' => 'hero_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__hero__headline',
                'label' => 'Headline',
                'name' => 'hero_headline',
                'type' => 'text',
                'default_value' => 'Empowering foster youth since 1979.',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__hero__copy',
                'label' => 'Copy',
                'name' => 'hero_copy',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Helping current and former foster youth transition to adulthood through housing and educational services.',
                'required' => 1,
            ),

            /* Subhero */
            array(
                'key' => 'home2020__subhero__tab',
                'label' => 'Subhero',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__subhero__headline',
                'label' => 'Headline',
                'name' => 'subhero_headline',
                'type' => 'text',
                'default_value' => 'Emergency Funds Needed',
            ),
            array(
                'key' => 'home2020__subhero__copy',
                'label' => 'Copy',
                'name' => 'subhero_copy',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Make an emergency gift today to support current and former foster youth who need housing, food, technology for remote learning, mental health services and more.',
            ),
            array(
                'key' => 'home2020__subhero__button_type',
                'label' => 'Button Type',
                'name' => 'subhero_button_type',
                'type' => 'true_false',
                'ui' => 1,
                'ui_on_text' => 'FundraiseMe Button',
                'ui_off_text' => 'Custom Button',
            ),
            array(
                'key' => 'home2020__subhero__button_url',
                'label' => 'Button URL',
                'name' => 'subhero_button_url',
                'type' => 'url',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'home2020__subhero__button_type',
                            'operator' => '==',
                            'value' => 0,
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'home2020__subhero__button_text',
                'label' => 'Button Text',
                'name' => 'subhero_button_text',
                'type' => 'text',
                'default_value' => 'Donate',
            ),
            array(
                'key' => 'home2020__subhero__button_target',
                'label' => 'Button Target',
                'name' => 'subhero_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'home2020__subhero__button_type',
                            'operator' => '==',
                            'value' => 0,
                        ),
                    ),
                ),
            ),
            /* Section 1 */
            array(
                'key' => 'home2020__s1__tab',
                'label' => 'Section 1',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s1__headline',
                'label' => 'Right Copy',
                'name' => 's1_headline',
                'type' => 'text',
                'default_value' => 'The way to unlock the potential of foster youth is through long-term consistent relationships.',
                'required' => 1,
            ),
            /* Section 2 */
            array(
                'key' => 'home2020__s2__tab',
                'label' => 'Section 2',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s2__headline',
                'label' => 'Section Headline',
                'name' => 's2_headline',
                'type' => 'text',
                'default_values' => 'The Challenges Facing Foster Youth',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s2__featured',
                'label' => 'Section 2 Featured Content',
                'name' => 's2__featured',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 4,
                'max' => 4,
                'button_label' => 'Add Content',
                'sub_fields' => array(
                    array(
                        'key' => 's2__featured__img',
                        'label' => 'Image',
                        'name' => 'featured_img',
                        'type' => 'image',
                        'preview_size' => 'thumbnail',
                        'return_format' => 'url',
                        'required' => 1,
                    ),
                    array(
                        'key' => 's2__featured__headline',
                        'label' => 'Headline',
                        'name' => 'featured_headline',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 's2__featured__blurb',
                        'label' => 'Blurb',
                        'name' => 'featured_blurb',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                    array(
                        'key' => 's2__featured__m_height',
                        'label' => 'Mobile Height',
                        'name' => 'featured_m_height',
                        'type' => 'select',
                        'required' => 1,
                        'choices' => [
                            'default' => 'Default',
                            'short' => 'Short',
                            'long' => 'Long'
                        ]
                    ),
                ),
            ),
            
            /* Section 3 */
            array(
                'key' => 'home2020__s3__tab',
                'label' => 'Section 3',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s3__headline',
                'label' => 'Section Headline',
                'name' => 's3_headline',
                'type' => 'text',
                'default_value' => 'The United Friends Impact',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s3__featured',
                'label' => 'Section 3 Featured Content',
                'name' => 's3__featured',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 4,
                'max' => 4,
                'button_label' => 'Add Content',
                'sub_fields' => array(
                    array(
                        'key' => 's3__featured__img',
                        'label' => 'Image',
                        'name' => 'featured_img',
                        'type' => 'image',
                        'preview_size' => 'thumbnail',
                        'return_format' => 'url',
                        'required' => 1,
                    ),
                    array(
                        'key' => 's3__featured__headline',
                        'label' => 'Headline',
                        'name' => 'featured_headline',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 's3__featured__blurb',
                        'label' => 'Blurb',
                        'name' => 'featured_blurb',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                    array(
                        'key' => 's3__featured__m_height',
                        'label' => 'Mobile Height',
                        'name' => 'featured_m_height',
                        'type' => 'select',
                        'required' => 1,
                        'choices' => [
                            'default' => 'Default',
                            'short' => 'Short',
                            'long' => 'Long'
                        ]
                    ),
                ),
            ),
            /* Section 4 */
            array(
                'key' => 'home2020__s4__tab',
                'label' => 'Section 4',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s4__d_img',
                'label' => 'Desktop Background Image',
                'name' => 's4_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s4__m_img',
                'label' => 'Mobile Background Image',
                'name' => 's4_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s4__headline',
                'label' => 'Section Headline',
                'name' => 's4_headline',
                'type' => 'text',
                'default_value' => 'Programs',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s4__copy',
                'label' => 'Section Copy',
                'name' => 's4_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s4__button_url',
                'label' => 'Button URL',
                'name' => 's4_button_url',
                'type' => 'url',
                'required' => 0,
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'home2020__s4__button_text',
                'label' => 'Button Text',
                'name' => 's4_button_text',
                'type' => 'text',
                'default_value' => 'Explore the Programs',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s4__button_target',
                'label' => 'Button Target',
                'name' => 's4_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            /* Section 5 */
            array(
                'key' => 'home2020__s5__tab',
                'label' => 'Section 5',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s5__d_img',
                'label' => 'Desktop Background Image',
                'name' => 's5_image_d',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s5__m_img',
                'label' => 'Mobile Background Image',
                'name' => 's5_image_m',
                'type' => 'image',
                'preview_size' => 'thumbnail',
                'return_format' => 'url',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s5__headline',
                'label' => 'Section Headline',
                'name' => 's5_headline',
                'type' => 'text',
                'default_value' => 'Get Involved',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s5__copy',
                'label' => 'Section Copy',
                'name' => 's5_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s5__button_url',
                'label' => 'Button URL',
                'name' => 's5_button_url',
                'type' => 'url',
                'required' => 0,
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'home2020__s5__button_text',
                'label' => 'Button Text',
                'name' => 's5_button_text',
                'type' => 'text',
                'default_value' => 'Get Involved',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s5__button_target',
                'label' => 'Button Target',
                'name' => 's5_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            /* Section 6 */
            array(
                'key' => 'home2020__s6__tab',
                'label' => 'Section 6',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__s6__left__headline',
                'label' => 'Left Headline',
                'name' => 's6_left_headline',
                'type' => 'text',
                'default_value' => 'Youth Access',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__left__copy',
                'label' => 'Left Copy',
                'name' => 's6_left_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__left__button_url',
                'label' => 'Left Button URL',
                'name' => 's6_left_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'home2020__s6__left__button_text',
                'label' => 'Left Button Text',
                'name' => 's6_left_button_text',
                'type' => 'text',
                'default_value' => 'Explore',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__left__button_target',
                'label' => 'Left Button Target',
                'name' => 's6_left_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            array(
                'key' => 'home2020__s6__right__headline',
                'label' => 'Right Headline',
                'name' => 's6_right_headline',
                'type' => 'text',
                'default_value' => 'Events',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__right__copy',
                'label' => 'Right Copy',
                'name' => 's6_right_copy',
                'type' => 'textarea',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__right__button_url',
                'label' => 'Right Button URL',
                'name' => 's6_right_button_url',
                'type' => 'url',
                'instructions' => 'If empty, this button will not show.'
            ),
            array(
                'key' => 'home2020__s6__right__button_text',
                'label' => 'Right Button Text',
                'name' => 's6_right_button_text',
                'type' => 'text',
                'default_value' => 'View All',
                'required' => 1,
            ),
            array(
                'key' => 'home2020__s6__right__button_target',
                'label' => 'Right Button Target',
                'name' => 's6_right_button_target',
                'type' => 'true_false',
                'message' => 'Open link in a new tab'
            ),
            /* Instagram Feed */
            array(
                'key' => 'home2020__insta__tab',
                'label' => 'Instagram',
                'type' => 'tab',
            ),
            array(
                'key' => 'home2020__instagram_feed',
                'label' => 'Instagram Section',
                'name' => 'instagram_feed',
                'type' => 'true_false',
                'ui' => 1,
                'ui_on_text' => 'Show Instagram feed',
                'ui_off_text' => 'Hide Instagram feed',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'p-home-2020.php',
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