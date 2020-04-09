<?

/******************************/
/*** AJAX / LOAD MORE POSTS ***/

function _show_more_button() {
  global $wp_query;

  $get_params = array('cat','tag_id','taxonomy','posts_per_page','post_type','paged','s','orderby','post__in','order');

  $meta_key = get_query_var('meta_key');
  if(!empty($meta_key)) {
    $get_params[] = 'meta_key';
    $get_params[] = 'meta_value';   
  }

  $params = array();

  foreach($get_params as $p) {
    $val = get_query_var($p);
    if(!empty($val)) {
      if(is_array($val)) {
        $val = implode(', ',$val);
      }
      $params[$p] = $val;
    }
  }

  if($params['taxonomy']) {
    $params[$params['taxonomy']] = get_query_var($params['taxonomy']);
  } else {
    unset($params['taxonomy']);
  }

  if($params['paged']==0)   // Why do they do this.
    $params['paged'] = 1;

  if(!$params['post_type']) // Home has multiple post types in its loop...
    $params['post_type'] = get_post_type();  

  if($params['paged']>=$wp_query->max_num_pages)  // If no more posts to query, don't show the button
    return;

  echo '<a ';
  foreach($params as $k=>$val)
    echo ' data-'.$k.'="'.$val.'"';

  echo ' js-max_num_pages="'.$wp_query->max_num_pages.'"';

  echo ' id="show-more" href="#">Show More<span></span></a>';
}

function _show_more() {

  $params = array();
  foreach ($_POST as $k => $v) {
    $i = camelCaseToDashes($k);   
    $params[$i] = _sopt($k);
  }

  unset($params['action']);

  $params['post_status'] = 'publish';
  if($params['post__in'])
    $params['post__in'] = explode(', ',$params['post__in']);

  query_posts($params);

  get_template_part('loop',$params['post_type']);


  exit;  
}

add_action('wp_ajax_showmore', '_show_more');
add_action('wp_ajax_nopriv_showmore', '_show_more');


// CAMEL CASE TO DAHES - FOR AJAX ABOVE

function camelCaseToDashes($input) {
    $pattern = '/[A-Z]/';
    return preg_replace_callback($pattern,"camelCaseToDashes_callback",$input);
}

function camelCaseToDashes_callback($matches) {
    return '-'.strtolower($matches[0]);
}  

// SECURE GET/POST VARS - FOR AJAX ABOVE

/**
 * Savride's environment variables filtering ($_GET, $_POST, etc.) (c) 2008
 * wrapper function
 *
 * @return > a filtered value or redirect if filtered out as abuse  
 * @param $_option Object > get variable by index, example: 'pagename' (useful when var does'nt exist)
 * @param $_old_option Object > use this as default if no value is set
 * @param $_filter Object[optional] regexp for advanced filtering or simple /string/ to deny
 */
function _sopt( $_option, $_old_option = false, $_filter = false) {
  $_value = false;
  if( isset( $_GET[$_option] )) {
    $_get_t = $_GET[$_option];
   
    if( $_get_t !== false)
      $_value = $_get_t;
    }
 
  if( isset( $_POST[$_option] )) {
    $_post_t = $_POST[$_option];
    
    if( $_post_t !== false)
      $_value = $_post_t;
    }
 
  if( $_filter) {
    if ((( strpos($_filter, "#") !== false) && ( strpos($_filter, "#") == 0))
      ||
      (( strpos($_filter, "/") !== false) && ( strpos($_filter, "/") == 0))) {
        if ( !preg_match( $_filter, $_value)) {
          $_value = false;
              //echo "Error _sopt - unwanted chars";
          }
      }
      else
       if( strpos( $_value, $_filter) !== false) {
             //echo "$_value  | $_filter";
         Header( "HTTP/1.1 403 Forbidden" );
         exit;
         }
    }
 
  if( !$_value ) 
    {
    if ( isset( $_old_option) && ( $_old_option != "") )
      $_value = $_old_option;
      else
      $_value = false;   
      }
 
      //echo $_value;
  return( $_value );
}


?>