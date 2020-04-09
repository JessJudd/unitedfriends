<?
 /*********/
/* SHARE */

// Share buttons
function _share_menu( $url = "" , $title = "" , $desc = "", $which = array('twitter','facebook','pinterest'), $intro_text="share", $use_icons = true, $img="" ) {

  if(empty($url))
    $url = urlencode(get_permalink());      
  if(stristr($url,".jpg"))
    $img = $url;  
  if(empty($title))
    $title = get_the_title();
  if(empty($img) && is_single()) {
    if($thumb = _get_pimg('large'))
      $img = $thumb[0];    
  }

  //$via = "";

  $share['facebook'] = "http://www.facebook.com/share.php?u=$url";
  $share['twitter'] = "https://twitter.com/intent/tweet?url=$url&text=$title&via=$via";
  $share['googleplus'] = "https://plus.google.com/share?url=$url";
  $share['linkedin'] = "http://www.linkedin.com/shareArticle?mini=true&url=$url&title=$title";
  $share['pinterest'] = "http://pinterest.com/pin/create/button/?url=$url&media=$img&description=$title";

  echo '<div class="share-menu-container">';

  if($intro_text)
    echo "<strong>$intro_text</strong>";

  echo '<ul class="menu ';
  if($use_icons)  echo 'social-icons share-icons';
  else      echo 'share-no-icons';
  echo '">';

  foreach($which as $service) {
    $share_link = $share[$service];
    ?><li class='social-<?= strtolower($service); ?>'><a rel="nofollow" href="<?= $share_link; ?>" target="_new"></a></li><?
  }

  echo '</ul></div>';
  
}

// Links to external social accounts
function _social_menu( $which = array('facebook','twitter') , $use_icons = true , $icons_and_names = false ) {

  $icons = _get_social_links();

  echo '<ul class="vmenu ';
  if($use_icons)  echo 'social-icons';
  else      echo ' social-no-icons';
  echo '">';
    
  foreach($which as $service) {
    $link = $icons[strtolower($service)]; 
    $service_name = ($service == "googleplus") ? "google+" : $service;
    ?><li class='social-<?= strtolower($service); ?>'><a rel="nofollow" href="<?= $link; ?>" target="_new"></a><?
      if($icons_and_names) : ?><a rel="nofollow" href="<?= $link; ?>" target="_new" class="name"><?= $service_name ?></a><? endif;
    ?></li><?
  }
  
  echo '</ul>';

}

// Returns URLs for client's social accounts
function _get_social_links() {
  $icons['email'] = 'mailto:info@unitedfriends.org';
  $icons['twitter'] = 'https://twitter.com/unitedfriends';
  $icons['instagram'] = 'https://www.instagram.com/unitedfriendsla/';
  $icons['facebook'] = 'https://www.facebook.com/UnitedFriendsLA/';
  $icons['linkedin'] = 'https://www.linkedin.com/company/united-friends-of-the-children';
  return $icons;  
}

// Tweet button
function _share_tweet($link, $text="", $count='horizontal') {
  if($text=="")
    $text = get_the_title();
  $via = "";
  echo '<a rel="nofollow" href="http://twitter.com/share" data-text="'.$text.'" class="twitter-share-button" data-url="'.$link.'" data-count="'.$count.'" data-via="'.$via.'">Tweet</a>';
}

// Like button
function _share_like($link) {
  echo '<div class="fb-like" data-href="'.$link.'" data-width="75" data-layout="button_count" data-show-faces="false" data-send="false"></div>';
}


 /********/
/* POST */

// Get post image
function _get_pimg($size,$p_id=-1) {
  global $post;
  if($p_id < 0)
    $p_id = $post->ID;  


  if($thumb = get_post_thumbnail_id($p_id)) {   
    return wp_get_attachment_image_src($thumb,$size);
  }
  return "";
}

// Video embed - Vimeo/YouTube URLs AND full embed codes
function _get_embed($video, $height=290, $width=460) {

  $video = htmlspecialchars_decode($video);

  if(stristr($video,'<') !== FALSE)   // If embed code
    return $video;
  
  return wp_oembed_get($video,array('height'=>$height,'width'=>$width));

}




 /*********/
/* HELP */

// Wrap number
function _numwrap($i,$total) {

  if($total==0)
    return 0;

  if($i<0)
    return ($i+$total);
    
  return ($i%$total); 
}

// Get rid of HTML in string
function _nohtml($str) {
  return str_replace('\'','&#39;', str_replace('\"', '&quot;', addslashes(htmlspecialchars($str))));
}

// Get rid of fancy quotes in string
function _nofancyquotes($str) {
  return str_replace('&#8242;',"'",str_replace('&#8217;',"'",str_replace('&#8220;','"',str_replace('&#8221;','"',$str))));
}