<?	/*
		Template Name: Team

	 */

	get_header();	

	the_post();	

	$sectors = get_terms('sector',array('hide_empty'=>false));

	?>

<div id="main" class="grid">

	<div id="team-bio"></div>

	<div class="headline-row">
		<div class="row bg-cover bg-shaded js-even-columns white" <? if($image = get_field('content_1_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				  	<h2 class="size10 margin-bot20"><? the_field('content_1_headline'); ?></h2>
					<div class="size5"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">

		<div class="c2 emptycol"></div>

		<div class="c8">
			<ul data-default-content="Select Type" class="menu drop-down-buttons js-tabs-buttons margin-top40 margin-bot40  text-center">
			<?	foreach($sectors as $sector) :	?>

				<li><a class="btn btn-clear-green btn-size1" href="#"><?= $sector->name; ?></a></li>

			<?	endforeach;	?>
			</ul>
			<ul class="js-tabs vmenu">

			<?	

			foreach($sectors as $sector) :

				echo "<li>";
		
					query_posts(array(
							'sector' => $sector->slug,
							'post_type' => 'team',
							'post_status' => 'publish',
							'orderby' => 'menu_order',
							'order' => 'asc',
							'posts_per_page' => 99
						));

					get_template_part('loop','team');

					wp_reset_query();

				echo "</li>";

				endforeach;
			?>

			</ul>

		</div>

		<div class="c2 emptycol"></div>

	</div>


	<div class="bg-grey margin-top40">
		<div class="row js-even-columns">
			
			<div class="c6 bg-cover bg-shaded white" <? if($image = get_field('footer_left_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
				<div class="valign-middle">
					<div>
						<div class="half-box margin-top60 margin-bot60">
							<div class="size7 margin-bot30"><? the_field('footer_left_headline'); ?></div>
							<?	ufc_buttons(get_field('footer_left_buttons')); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="c6 bg-grey">
				<div class="valign-middle">
					<div>
						<div class="half-box margin-top60 margin-bot60">
							<div class="size7 margin-bot10"><? the_field('footer_right_headline'); ?></div>

							<ul class="vmenu vborder">
								<? if($footer_right_link_1_buttons = get_field('footer_right_link_1_button')): ?>							
									<li>
										<div class="size1"><? the_field('footer_right_link_1_blurb'); ?></div>
										<?	ufc_buttons($footer_right_link_1_buttons,'green','','btn-size1'); ?>
									</li>
								<? endif; ?>
								<? if($footer_right_link_2_buttons = get_field('footer_right_link_2_button')): ?>
									<li>
										<div class="size1"><? the_field('footer_right_link_2_blurb'); ?></div>
										<?	ufc_buttons($footer_right_link_2_buttons,'green','','btn-size1'); ?>
									</li>
								<? endif; ?>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


</div>
	

<?	get_footer();	?>