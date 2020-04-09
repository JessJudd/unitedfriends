<?	/*
		Template Name: About

	 */

	get_header();	

	the_post();	

	?>

<div class="bg-green page-nav">
	<div class="grid">
		<div class="row text-center">
			<?	ufc_buttons(get_field('page_nav'),"clear"); ?>
		</div>
	</div>
</div>

<div id="main" class="grid">
	<!-- Mission & Vision -->
	<a class="sectionanchor"></a>
	<div class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/about-0.jpg)">
			<div class="c2 emptycol"></div>
			<div class="c8">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c2 emptycol"></div>
		</div>
	</div>

	<div class="row">
		<div class="c1 emptycol"></div>
		<div class="c10">
			<h3 class="size7 green text-center margin-top90 margin-bot90"><? the_field('content_1_subheadline_1'); ?></h3>
			<h3 class="size7 text-center margin-bot40"><? the_field('content_1_subheadline_2'); ?></h3>
		</div>
		<div class="c1 emptycol"></div>
	</div>
	<div class="row">
		<div class="c12">		
			<div class="content">		
				<ol class="big-number">

				<?	$list = get_field('content_1_list'); 

					if($list) :
						foreach($list as $item) : ?>

							<li>
								<p><strong><?= $item['title']; ?></strong></p>
								<p><?= $item['body']; ?></p>
							</li>

				<?		endforeach;
					endif;
				?>


				</ol>
			</div>
		</div>
	</div>

	<!-- History -->
	<a class="sectionanchor"></a>
	<div class='bg-grey'>
		<div class="row">

			<div class="c12">
				<div class="content text-center">
					<h2 class="size10 margin-top90 margin-bot20 centered"><? the_field('content_2_headline'); ?></h2>
					<div class="size5 margin-bot40 halfwidth centered"><? the_field('content_2_blurb'); ?></div>
					
					<? ufc_buttons(get_field('content_2_buttons'),'green','','btn-size1'); ?>

					<? if($image = get_field('content_2_image'))
							echo "<img class='margin-top40' src='".$image['sizes']['large']."'/>"; ?>
					<? if($caption = get_field('content_2_image_caption'))
							echo "<div class='wp-caption-text text-left'>$caption</div>"; ?>
					<div class="text-left margin-bot90">
						<? the_field('content_2_body'); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Financials -->
	<a class="sectionanchor"></a>

	<div class="bg-light-green">
		<div class="row bg-pie">

			<div class='c2 emptycol'></div>

			<div class='c8 text-center margin-top90 margin-bot90'>
				<h2 class="size10 margin-bot25"><? the_field('content_3_headline'); ?></h2>
				<div class="size5 margin-bot40 content"><? the_field('content_3_blurb'); ?></div>

				<? ufc_buttons(get_field('content_3_buttons'),'green','','btn-size1'); ?>

			</div>

			<div class='c2 emptycol'></div>

		</div>
	</div>


	<!-- Leadership -->
	<a class="sectionanchor"></a>
	<div class="row">

		<div class='c2 emptycol'></div>

		<div class='c8 text-center margin-top90 margin-bot90'>
			<h2 class="size10 margin-bot25"><? the_field('content_4_headline'); ?></h2>
			<div class="size5 margin-bot40 content"><? the_field('content_4_blurb'); ?></div>


			<?	ufc_buttons(get_field('content_4_buttons'),'green','','btn-size1');	?>

			<div class="margin-top40">
			<?	if($team = get_field('content_4_team_selected')):
					query_posts(array(
						'post_type' => 'team',
						'post__in' => ufc_get_post_ids_from_posts($team),
						'orderby' => 'post__in'
						));

					get_template_part('loop','team');

					wp_reset_query();
				endif;
			?>
			</div>

		</div>

		<div class='c2 emptycol'></div>

	</div>


	<!-- Careers -->
	<a class="sectionanchor"></a>

	<div class="bg-grey">
		<div class="row">

			<div class='c2 emptycol'></div>

			<div class='c8 text-center'>
				<h2 class="size10 margin-top90 margin-bot20"><? the_field('content_5_headline'); ?></h2>
			</div>

			<div class='c2 emptycol'></div>
		</div>

		<div class="row bg-grey">

			<div class='c2 emptycol'></div>

			<div class='c6 centered margin-bot90'>

					<div class="margin-bot40"><? the_field('content_5_body'); ?></div>

					<div class="mobile-text-center">
						<?	ufc_buttons(get_field('content_5_buttons'),'green','','btn-size1');	?>
					</div>
			</div>

			<div class="c2 margin-bot90">

				<!--<div class="size3 bold margin-bot10">Recent Postions</div>

				<?	if($positions = get_posts(array('post_type'=>'careers','post_status'=>'publish','number_posts'=>5,'orderby'=>'post_date'))):
						echo "<ul class='vmenu size2 underline'>";
						foreach($positions as $position)
							echo "<li class='margin-bot5'><a href='".get_permalink($position->ID)."'>".$position->post_title."</a></li>";
						echo "</ul>";
					endif;
				?>

			</div>-->

			<div class='c2 emptycol'></div>

		</div>

	</div>

</div>

<?	get_footer();	?>