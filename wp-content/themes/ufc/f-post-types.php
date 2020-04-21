<?

add_action( 'init', '_custom_post_types', 0 );

function _custom_post_types() {

     flush_rewrite_rules();

     register_post_type('events', array(
          'label' => __('Events'),
          'labels' => _custom_post_type_labels('Event','Events'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor','thumbnail','excerpt'),
          'taxonomies' => array('event_type'),
          'rewrite' => array('slug'=>'event'),
          'with_front' => false        
     ));

     register_post_type('years', array(
          'label' => __('Timeline Years'),
          'labels' => _custom_post_type_labels('Timeline Year','Timeline Years'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor'),
          'rewrite' => array('slug'=>'year'),
          'with_front' => false        
     ));

     register_post_type('resources', array(
          'label' => __('Resources'),
          'labels' => _custom_post_type_labels('Resource','Resources'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor'),
          'rewrite' => array('slug'=>'resource'),
          'with_front' => false        
     ));

     register_post_type('youth-resources', array(
          'label' => __('Youth Resources'),
          'labels' => _custom_post_type_labels('Youth Resource','Youth Resources'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor'),
          'rewrite' => array('slug'=>'youth-resource'),
          'with_front' => false        
     ));

     register_post_type('careers', array(
          'label' => __('Careers'),
          'labels' => _custom_post_type_labels('Career','Careers'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor'),
          'taxonomies' => array('department'),
          'with_front' => false        
     ));

     register_post_type('team', array(
          'label' => __('Team'),
          'labels' => _custom_post_type_labels('Team Member','Team'),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,
          'supports' => array('title','editor','thumbnail'),
          'rewrite' => array('slug'=>'people'),
          'with_front' => false        
     ));

     $covid_labels = array(
          'name' => __( 'COVID-19' ),
          'singular_name' => __( 'Resource' ),
          'add_new' => __( 'Add New' ),
          'add_new_item' => __( 'Add New Resource' ),
          'edit' => __( 'Edit' ),
          'edit_item' => __( 'Edit Resource' ),
          'new_item' => __( 'New COVID-19 Resource' ),
          'view' => __( 'View' ),
          'view_item' => __( 'View Resource' ),
          'search_items' => __( 'Search COVID-19 Resources' ),
          'not_found' => __( 'No COVID-19 Resources found' ),
          'not_found_in_trash' => __( 'No COVID-19 Resources found in Trash' ),
          'parent' => __( 'Parent Resource' ),
     );

     register_post_type('covid-19', array(
          'label' => __('COVID-19'),
          //'labels' => _custom_post_type_labels('Resource','COVID-19'),
          'labels' => $covid_labels,
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,          
          'supports' => array('title','editor'),
          'rewrite' => array('slug'=>'covid-resource'),
          'with_front' => false,
          'show_in_menu' => true      
     ));

     flush_rewrite_rules();
}

function _custom_post_type_labels($name,$plur=null) {
     if(empty($plur))
          $plur = $name;

     return array(
     'name' => __( $plur ),
     'singular_name' => __( $name ),
     'add_new' => __( 'Add New' ),
     'add_new_item' => __( 'Add New '.$name ),
     'edit' => __( 'Edit' ),
     'edit_item' => __( 'Edit '.$name ),
     'new_item' => __( 'New '.$name ),
     'view' => __( 'View '.$name ),
     'view_item' => __( 'View '.$name ),
     'search_items' => __( 'Search '.$plur ),
     'not_found' => __( 'No '.$plur.' found' ),
     'not_found_in_trash' => __( 'No '.$plur.' found in Trash' ),
     'parent' => __( 'Parent '.$name ),
     );
}

?>