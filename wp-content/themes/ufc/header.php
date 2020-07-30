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

		$ver = 5; 

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

	<!-- Facebook Pixel Code -->
	<script type='text/javascript'>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '660550378033145', {}, {"agent": "wordpress-5.3.2-2.0.2"});
	fbq('track', 'PageView', []);
	</script>
	<noscript>
	<img height="1" width="1" style="display:none" alt="fbpx"
	src="https://www.facebook.com/tr?id=660550378033145&ev=PageView&noscript=1" />
	</noscript>
	<!-- End Facebook Pixel Code -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158818452-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-158818452-1');
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
						<? if( !is_page_template('p-donate.php') ): ?>
						<a id="header-donate" class="btn btn-blue right" href="<? bloginfo('url'); ?>/donate">Donate</a>
						<? endif; ?>
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