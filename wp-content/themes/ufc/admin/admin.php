<?

// ADMIN / anything that does not affect the actual site, e.g. tinymce

// TINYMCE
/////////////

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');


// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
  // Define the style_formats array
  $style_formats = array(  
    // Each array child is a format with it's own settings
    array(  
      'title' => 'Caption',  
      'block' => 'div',  
      'classes' => 'wp-caption-text',
      'wrapper' => true,      
    ),
    array(  
      'title' => 'Headline - Big',  
      'block' => 'div',  
      'classes' => 'size7',
      'wrapper' => true,      
    ),
    array(  
      'title' => 'Two Column',  
      'block' => 'div',  
      'classes' => 'two-col',
      'wrapper' => true,      
    ),    
    array(  
      'title' => 'Green',  
      'block' => 'div',  
      'classes' => 'green',
//      'wrapper' => false,      
    ) 
  );  
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );  
  
  return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 



// ADMIN EDITOR MCE CSS 
function childtheme_mce_css($wp) {
    $ver = 52525;
    return $wp .= ',' . get_bloginfo('stylesheet_directory') . '/admin/admin-mce.css?v='.$ver;
}
add_filter( 'mce_css', 'childtheme_mce_css' );


// ADMIN CSS
function admin_extra_assets() {
    $ver = 99487;
    wp_enqueue_style( 'admin_css', get_bloginfo('template_url').'/admin/admin.css', NULL, $ver );
}
add_action( 'admin_head',   'admin_extra_assets' );


// HIDE ADMIN BAR
add_filter( 'show_admin_bar', '__return_false' );


?>