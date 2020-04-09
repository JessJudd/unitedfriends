<?	/*
		Template Name: Programs

	 */

	get_header();	

	the_post();	

	$sectors = get_terms('sector',array('hide_empty'=>false));

	?>

<div class="bg-green page-nav">
	<div class="grid">
		<div class="row text-center">		
			<?	ufc_buttons(get_field('page_nav'),"clear"); ?>
		</div>
	</div>
</div>

<div id="main" class="grid">

	<a class="sectionanchor" name="section1"></a>
	<div class="headline-row">
		<div class="row js-even-columns bg-cover bg-shaded white" style="background-position: center 55%;background-image:url(<? bloginfo('template_url'); ?>/images/content/programs-1.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size10 margin-bot20"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">

		<div class="c12 margin-bot120">

			<div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_1_subheadline'); ?></div>

			<div class="content">
				<? the_field('content_1_body'); ?>
			</div>

			<div class="text-center margin-top40">
				<?	ufc_buttons(get_field('content_1_buttons'),"orange"); ?>
			</div>

		</div>

	</div>

	<a class="sectionanchor" name="section2"></a>
	<div class="headline-row">
		<div class="row bg-cover js-even-columns bg-shaded white" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/programs-2.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">


				<div class="valign-middle text-center">
				  <div>
				  	<h2 class="size10 margin-bot20"><? the_field('content_2_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_2_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="bg-grey">
		<div class="row">

			<div class="c12 margin-bot200">
				
				<div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_2_subheadline'); ?></div>

				<div class="content">
					<? the_field('content_2_body'); ?>
				</div>

				<div class="margin-top30 margin-bot30">
					<?	get_template_part('section','programs-map');	?>
				</div>

				<div class="content text-center">
					<blockquote class="size7">
						<? the_field('content_2_quote'); ?>
					</blockquote>
					<div class="wp-caption-text"><? the_field('content_2_quote_author'); ?></div>
				</div>

				<div class="text-center margin-top40">
					<?	ufc_buttons(get_field('content_2_buttons'),"orange"); ?>
				</div>

			</div>

		</div>
	</div>

</div>
	

<?	get_footer();	?>