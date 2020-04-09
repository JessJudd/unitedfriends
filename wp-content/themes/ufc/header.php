<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>

	<meta charset="<? bloginfo( 'charset' ); ?>" />
	<meta id="vp" name="viewport" content="width=device-width">

	<meta name="keywords" content="'United Friends of the Children', UFC, 'United Friends of Children', 'Foster Youth', Youth, Non-profit, charity, giving, Los Angeles, Southern California, Foster Kids, scholarships, 'youth housing', Foster care, 'Youth Resources', education resources" />
	<meta name="description" content="Preparing Foster Youth for a Future that Works. United Friends of the Children is a nonprofit organization dedicated to bettering the lives of foster children and to supporting former foster youth in their journey to become successful, independent adults." />

	<link rel="shortcut icon" href="<? bloginfo('url'); ?>/favicon.ico"  type="image/x-icon"  />

	<title><?	
				wp_title(' - ',true,'right');
	?>United Friends of the Children | Housing, Education, &amp; Resources for Foster Youth in Southern California</title>


	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,300,700' rel='stylesheet' type='text/css'>


	<?	global $post;

		$ver = rand(); 

		// STYLES		
		wp_enqueue_style('style', get_bloginfo('template_url').'/style.css', array(), $ver); 
		wp_enqueue_style('responsive', get_bloginfo('template_url').'/css/responsive.css', array('style'), $ver); 

		// SCRIPTS
		wp_enqueue_script('jquery');
		wp_enqueue_script('waypoints', get_bloginfo('template_url').'/js/jquery.waypoints.min.js', array('jquery'), $ver);
		wp_enqueue_script('cycle2', get_bloginfo('template_url').'/js/jquery.cycle2.min.js', array('jquery'), $ver);
		wp_enqueue_script('fittext', get_bloginfo('template_url').'/js/jquery.fittext.js', array('jquery'), $ver);
		wp_enqueue_script('insta', get_bloginfo('template_url').'/js/insta.js', array(), $ver);
		wp_enqueue_script('actions', get_bloginfo('template_url').'/js/actions.js', array('jquery','insta','waypoints','fittext'), $ver);
		wp_enqueue_script('mailchimp', get_bloginfo('template_url').'/js/mailchimp-submit.js', array('jquery'), $ver);
		
		$body_classes = "";
		if(ufc_has_large_featured_post())
			$body_classes .= "overlay-header";

		$body_classes .= " header-alert-active";
	?>
    
	<? wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-158818452-1', 'auto');
	  ga('send', 'pageview');

	</script>

</head>

<body <? body_class($body_classes); ?>>

<? //get_template_part('section','header-alert'); ?>

<div id="outer-wrapper">

	<div id="page-wrapper">
		
		<header id="header">

			<div class="grid">
				<div class="row">
					<div class="c12">
						<a id="mobile-menu-button"></a>
						<h1 id="logo" class="left"><a href="<? bloginfo('url'); ?>"><img class="nostretch" src="<? bloginfo('template_url'); ?>/images/logo-text-2x.png" title="United Friends of the Children"/></a></h1>
						<a id="header-donate" class="btn btn-blue right" href="<? bloginfo('url'); ?>/donate">Donate</a>
					</div>
				</div>
			</div>
			
		</header>
		<nav id="nav">

			<a id="menu-button" href="#"><span class="hamburger"></span><span class="menu-text"></span></a>

			<div class="nav-main">

				<? wp_nav_menu(array('theme_location'=>'main-nav','menu_class'=>'vmenu white-links size7 light','container'=>false)); ?>

				<div class="nav-main-bottom">
					<? wp_nav_menu(array('theme_location'=>'second-nav','menu_class'=>'menu size3 white-links','container'=>false)); ?>
	
					<? 
					global $newsletter_signup_type;
					$newsletter_signup_type = 'header';
					get_template_part('section','newsletter-signup'); 
					?>

					<? _social_menu(array('email','twitter','facebook','instagram','linkedin')); ?>

					<div id="nav-logo"></div>
				</div>
			</div>

		</nav>