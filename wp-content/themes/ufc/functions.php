<?

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'f-common.php';      			// COMMON FUNCTIONS
//include 'f-show-more.php';      		// AJAX / LOAD MORE POSTS

include 'f-post-types.php';      		// CUSTOM POST TYPES
include 'f-taxonomies.php';      		// CUSTOM TAXONOMIES

include 'admin/admin.php';      		// ADMIN SPECIFIC


// ...
add_theme_support( 'post-thumbnails' ); 

// REGISTER MENUS
register_nav_menu('main-nav','Main Navigation');
register_nav_menu('second-nav','Second Navigation');
register_nav_menu('footer-nav','Footer Navigation');


// ACF OPTIONS PAGES
if(function_exists("register_options_page")) {
    register_options_page('Common & Misc');
    register_options_page('Footer');
    register_options_page('News');
    register_options_page('MailChimp');  
}

// IMAGE SIZES

//		X, X		// LARGE
//		X, X		// MEDIUM
//		X, X		// THUMBNAIL	

// add_image_size('' ,				,	,	false);		// WHERE


function ufc_excerpt($ID,$length) {
    $p = get_post($ID);
    if(!$p)
        return;
    $text = $p->post_excerpt;
    if(empty($text))
        $text = $p->post_content;

    return improved_trim_excerpt($text,$length);
}


function ufc_has_large_featured_post() {
    global $paged;
    if( (is_category() || is_home()) && ("post" == get_post_type())) {
        if($featured_posts = get_field('news_featured_posts','options')) {
            if(is_home() && $paged<2)
                return true;
            
            $top_post = array_shift($featured_posts);
            if(in_category(get_query_var('cat'),$top_post))
                return true;

        }
    }

    return false;
}

function ufc_buttons($buttons,$color="green",$classes="",$btn_classes="") {	
	$all_colors = array('blue','green','orange'); // "all" rotates through colors
	$do_all_colors = ($color=="all") ? true : false;

	if($buttons) {
		echo "<ul class='menu $classes'>";
		$i=0;
		foreach($buttons as $button) {


			if($do_all_colors)
				$color = $all_colors[$i%3];
			$url = (isset($button['url'])) ? $button['url'] : '#';
            if($url=='#' && array_key_exists('pdf',$button))
                $url = $button['pdf']['url'];
			$title = (isset($button['title'])) ? $button['title'] : '';
            $target = ($url!='#' && !stristr($url,"unitedfriends.org")) ? '_blank' : '';
            if($title || $url)
    			echo "<li><a class='btn btn-$color $btn_classes' target='$target' href='".$url."'>".$title."</a></li>";
			$i++;
		}
		echo "</ul>";
	}
}

function ufc_taxonomy_menu($taxonomy="category",$all_text="All News") {
////	$cur_cat_id = get_query_var( 'cat' );
	
	$terms = get_terms($taxonomy,array('hide_empty'=>false,'exclude'=>1)); 
	$btn_class = "btn btn-clear-green text-center ";
	$btn_class .= ($taxonomy=="category") ? "btn-size1" : "btn-size2";
	
    if ($taxonomy == "category")
        $index_link = "news";
    else if ($taxonomy == 'department')
        $index_link = 'careers';

    if($terms):	?>
		<div class="row">
			<div class="content-size2 drop-down-buttons-container margin-bot40 margin-top40">

			  	<ul data-default-content="Select Category" class='menu drop-down-buttons text-center menu-<? if($taxonomy=="category") echo '4'; else echo '3'; ?>n'>
					<li <? if(!is_tax() && !is_category()) echo 'class="selected"'; ?>><a class='<?= $btn_class; ?>' href="<? bloginfo('url'); ?><?= '/'.$index_link ?>"><?= $all_text; ?></a></li><?	
					foreach($terms as $term):
						?><li <? if((is_tax() || is_category()) && (get_query_var($taxonomy)==$term->slug || is_category($term->slug))) echo 'class="selected"' ?>><a class='<?= $btn_class; ?>' href='<?= get_term_link($term->term_id); ?>'><?= $term->name; ?></a></li><?
					endforeach;		?>
				</ul>

			</div>
		</div>
<?	endif;	
}


function ufc_get_post_ids_from_posts( $ps ) {
	if(empty($ps))
		return null;

	$returnme = array();

	foreach($ps as $p) : {
		array_push($returnme,$p->ID);
	}

	endforeach;

	return $returnme;
}

function ufc_get_iframe_url_from_video_url($video_url) {


    // VIMEO
    if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $video_url, $matches))
        return 'https://player.vimeo.com/video/'.$matches[5].'?color=c3a467&title=1&byline=0&portrait=0&amp;autoplay=1';    

    // YOUTUBE
    if(preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video_url, $matches))
        return 'https://www.youtube.com/embed/'.$matches[0].'?rel=0&amp;showinfo=1&amp;autoplay=1'; 

    return $video_url;

}


function ufc_get_decade_from_year_title($year_title) {
    // isolate year from words
    if (strlen($year_title)>4 && preg_match('/\b\d{4}\b/', $year_title, $matches)) {
        $decade = $matches[0];
    } else {
        $decade = $year_title;
    }
    return substr($decade,0,3)."0"; // year might not be 0 year
}

function ufc_texttolist($text) {
    $text = strip_tags($text,"<a><em><i><b>");
    $list = explode("\n",$text);
    foreach($list as $k => $li) {   // delete empty rows
        if(empty($li))
            unset($list[$k]);
    }
    return $list;
}

function ufc_monthtoseason($m) {    // MM
    if ($currentMonth>="03" && $currentMonth<="05")
      return "spring";
    else if ($currentMonth>="06" && $currentMonth<="08")
      return "summer";
    else if ($currentMonth>="09" && $currentMonth<="11")
      return "fall";
    
    return "winter";    
}

// MODS


// POSTS PER PAGE on careers, etc...
function adjust_posts_per_page( $query ) {
    if (!is_admin() && is_main_query() && (is_post_type_archive('careers')) ) 
        $query->set( 'posts_per_page', 99 );


    return;
}

add_action( 'pre_get_posts', 'adjust_posts_per_page' );

// EXCLUDE FEATURED POSTS FROM MAIN NEWS FEEDS
function exclude_category( $query ) {
    if (($query->is_category() || $query->is_home()) && $query->is_main_query() && !is_admin() ) {
        if($featured_posts = get_field('news_featured_posts'))
            $query->set( 'post__not_in', $featured_posts );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

// GALLERY shortcode for posts
add_filter( 'post_gallery', 'my_post_gallery', 10, 2 );
function my_post_gallery( $output, $attr) {
    global $post, $wp_locale;

    static $instance = 0;
    $instance++;

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);

    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    $output = '
<div class="slideshow-container">
<div class="cycle-slideshow" 
    data-cycle-loader=wait
    data-cycle-fx=fade
    data-cycle-timeout=0
    data-cycle-speed=100
    data-cycle-auto-height=false
    data-cycle-next="div.slide"
    data-cycle-slides="div.slide"
    data-cycle-pager=".cycle-pager"
    data-cycle-tmpl-regex="\[\[((\.)?.*?)\]\]"
    data-cycle-pager-template="<span> [[slideNum]] </span>"    
    >
';


    $i = 0;
    foreach ( $attachments as $id => $attachment ) {

        $img =  wp_get_attachment_image_src($attachment->ID,"large");
        $output .= "<div class='slide' style='background-image:url(" .$img[0]. ");'>";
        $output .= "<img src='".$img[0]."'/>";   
        if ( trim($attachment->post_excerpt) )
            $output .= "<div class='slide-caption'>".$attachment->post_excerpt."</div>";
        $output .= "</div>";        

    }

    $output .= '</div><div class="cycle-pager"></div></div>';

    return $output;
}


// EXCERPT mods
function improved_trim_excerpt($text,$excerpt_length=55) {
        global $post;

        if ( '' == $text || $excerpt_length!=55 ) {
                if('' == $text)
                    $text = get_the_content('');


				$lines = explode("\n",$text);
				$c = 0;
				if(count($lines)>5) {
					$output = "";
					foreach($lines as $line) {
						if($c==6) break;
						$output .= $line."\n";
						$c++;
					}
					$text = $output."...";
				}


                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<p><a>');

                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '...');
                        $text = implode(' ', $words);
                }


        }
        return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


// Always has "Read More" for excerpts, even if short.
function _excerpt_read_more_link($output) {
  global $post;

  if(strlen($output)<2)
  	return $output;

  $read_more = '<div class="margin-top30"><a class="btn btn-green" href="'. get_permalink($post->ID) . '">Read More</a></div>';

  return $output.$read_more;

}
add_filter('the_excerpt', '_excerpt_read_more_link');


// VIDEO PLAYER HACK to add play button overlay to user content videos...also needed to add some js... :-/
function filter_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size, $alt) {
 
    $video_url = get_field('video_url',$id);
   if($video_url) {
        $video_url = ufc_get_iframe_url_from_video_url($video_url);
        $html = '<a class="video-preview" href="'.$video_url.'">'.$html.'</a>';
    }

  return $html;
}
add_filter('image_send_to_editor', 'filter_image_send_to_editor', 10, 8);


// EMAIL OBFUSCATOR
function hide_email($email) {
  $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';

  $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);

  for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];

  $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';

  $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';

  $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';

  $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; 

  $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

  return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;

}

function linkify_twitter_status($status_text)
{
  // linkify URLs
  $status_text = preg_replace(
    '/(https?:\/\/\S+)/',
    '<a href="\1">\1</a>',
    $status_text
  );

  // linkify twitter users
  $status_text = preg_replace(
    '/(^|\s)@(\w+)/',
    '\1<a href="http://twitter.com/\2">@\2</a>',
    $status_text
  );

  // linkify tags
  $status_text = preg_replace(
    '/(^|\s)#(\w+)/',
    '\1<a href="http://search.twitter.com/search?q=%23\2">#\2</a>',
    $status_text
  );

  return $status_text;
}