<?	/*
		Template Name: History

	 */

	get_header();	

	the_post();	

	$years = query_posts(array('post_type'=>'years','post_status'=>'publish','orderby'=>'menu_order','order'=>'desc','posts_per_page'=>99,'meta_key'=>'layout','meta_value'=>'decade'));

	?>

<div class="bg-green page-nav">
	<div class="grid">
		<div class="row text-center">
			<ul class="menu">
				<?	foreach($years as $year) {

						echo '<li><a href="#" class="btn btn-clear nocaps">'.ufc_get_decade_from_year_title($year->post_title).'s</a></li>';
				
					}
				?>
			</ul>
		</div>
	</div>
</div>

<div id="main">
	<div class="grid">

		<div class="headline-row">

			<div class="row white bg-cover bg-shaded js-even-columns" <? if($image = get_field('content_1_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
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
			<div class="c12">
				<div id="timeline-line"></div>
			</div>
		</div>

	<?	query_posts(array('post_type'=>'years','post_status'=>'publish','orderby'=>'menu_order','order'=>'desc','posts_per_page'=>99));

		get_template_part('loop','year');

		wp_reset_query();	?>

	</div>
</div>

<div class="bg-blue white">
	<div class="grid">
		<div class="row">
			<div class="c2 emptycol"></div>
			<div class="c8 margin-top90 margin-bot90 text-center">
			  	<div class="size10 margin-bot20"><? the_field('content_2_headline'); ?></div>
			  	<div class="margin-bot40"><? the_field('content_2_blurb'); ?></div>

				<?	ufc_buttons(get_field('content_2_buttons'),"blue"); ?>

			</div>
			<div class="c2 emptycol"></div>
		</div>
	</div>
</div>


<?	get_footer();	?>