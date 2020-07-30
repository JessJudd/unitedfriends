<?
/*
Template Name: Email Landing
*/
get_header();	
the_post();	
?>

<div id="main" class="grid">
	<!-- Mission & Vision -->
	<a class="sectionanchor"></a>
	<div class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-image:url(<? echo get_field('hero_image')['url']; ?>)">
			<div class="c2 emptycol"></div>
			<div class="c8">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('hero_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('hero_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c2 emptycol"></div>
		</div>
	</div>

	<div class="row">
		<div class="c1 emptycol"></div>
		<div class="c10">
			<h3 class="size7 green text-center margin-top90 margin-bot40"><? the_field('page_headline'); ?></h3>
			<div class="content margin-bot40">
				<? the_field('page_body'); ?>
			</div>

		</div>
		<div class="c1 emptycol"></div>
	</div>
	<div class="row">
		<div class="c12 margin-bot90">		
			<div class="content">

				<? 
				global $newsletter_signup_type;
				global $subscription_success_heading;
				global $subscription_success_content;
				$newsletter_signup_type = 'page';
				$subscription_success_heading = get_field('subscription_success_heading');
				$subscription_success_content = get_field('subscription_success_content');
				get_template_part('section','newsletter-signup'); 
				?>

			</div>
		</div>
	</div>

</div>

<?	get_footer();	?>