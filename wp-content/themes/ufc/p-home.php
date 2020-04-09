<?	/*
		Template Name: Home

	 */

	get_header();	

	the_post();		

	?>

<div id="main" class="grid">

<?	$content_0_image = get_field('content_0_image');
	$content_0_headline = get_field('content_0_headline');
	$content_0_buttons = get_field('content_0_buttons');

	if($content_0_headline):	?>

	<div class="headline-row">
		<div class="row white bg-blue <? if($content_0_image) echo 'bg-cover bg-shaded'; ?> js-even-columns" style="<? if($content_0_image) echo 'background-image:url('.$content_0_image['url'].');'; ?> min-height:364px">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				  	<h2 class="size10 margin-top20 margin-bot40"><?= $content_0_headline; ?></h2>

					<?	ufc_buttons($content_0_buttons); ?>

				  </div>
				</div>
			</div>
		</div>
	</div>

	<?	endif; ?>

	<div id="home-headline-row" class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-position: 70% 19%;background-image:url(<? bloginfo('template_url'); ?>/images/content/home-1.jpg);min-height:364px">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				  	<h2 class="size10 margin-top20 margin-bot40"><? the_field('content_1_headline'); ?></h2>

					<?	ufc_buttons(get_field('content_1_buttons'),"all"); ?>

				  </div>
				</div>
			</div>
			<div id="caption-container" class="c3 emptycol">

				<div class="bottomright text-right">
					<div class="size4 bold"><? the_field('content_1_caption_1'); ?></div>
					<div class="size2"><? the_field('content_1_caption_2'); ?></div>
				</div>								

			</div>
		</div>
	</div>

	<div id="home-row2" class="headline-row">
	<div class="row bg-cover bg-shaded js-even-columns white" style="background-position: 20% center;background-image:url(<? bloginfo('template_url'); ?>/images/content/home-2.jpg);min-height:409px">

		<div class="c7 emptycol"></div>	

		<div class="c4">
			<div class="valign-middle">
				<div class="margin-top90 margin-bot90 text-center">
					<h2 class="size7 margin-bot20"><? the_field('content_2_headline'); ?></h2>
					<div class="size5 margin-bot20 content-size2"><? the_field('content_2_blurb'); ?></div>

					<?	ufc_buttons(get_field('content_2_buttons')); ?>

				</div>
			</div>
		</div>

		<div class="c1 emptycol"></div>	

	</div>
	</div>

	<!-- //////// Get Involved / Programs ///////// -->

	<div id="row-home-get-involved-programs" class="row js-even-columns">
		<div class="c6 bg-blue white">

			<div class="half-box margin-top90 margin-bot90">
				<div style="min-height: 200px">
					<h2 class="size10 margin-bot20"><? the_field('content_3_headline'); ?></h2>
					<div class="size5 margin-bot30"><? the_field('content_3_blurb'); ?></div>
				</div>
				<?	ufc_buttons(get_field('content_3_buttons'),'blue'); ?>
			</div>
		</div>


		<div class="c6 bg-white">
			<div class="half-box margin-top90 margin-bot200">
				<div style="min-height: 200px">
					<h2 class="size10 margin-bot20"><? the_field('content_4_headline'); ?></h2>
					<div class="size5 margin-bot30"><? the_field('content_4_blurb'); ?></div>				
				</div>
				<?	ufc_buttons(get_field('content_4_buttons')); ?>
			</div>

		</div>
	</div>



	<!-- //////// Youth Access ///////// -->

	<div class="row white">
		<div class="c2 emptycol"></div>	

		<div class="c4">
			<div class="size15 italic mobile-text-center"><? the_field('content_5_headline'); ?></div>
		</div>		

		<div class="c1 emptycol"></div>	

		<div class="c4 text-center">
			<div class="size6 margin-top40 margin-bot20 light italic"><? the_field('content_5_blurb'); ?></div>
			<?	ufc_buttons(get_field('content_5_buttons'),"orange"); ?>
		</div>		

		<div class="c1 emptycol"></div>	

		<div id="home-skew1" class="skew"></div>
	</div>


	<!-- //////// Events / Latest News ///////// -->

	<div id="row-home-events-news" class="row js-even-columns">

		<div class="c6 white bg-cover" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/home-events.jpg)">
			<div class="half-box margin-top300 margin-bot90">
				<h2 class="size10 margin-bot20"><? the_field('content_6_headline'); ?></h2>
				<div class="size5 margin-bot30"><? the_field('content_6_blurb'); ?></div>

				<?	ufc_buttons(get_field('content_6_buttons')); ?>
			</div>
		</div>


		<div class="c1 bg-white emptycol"></div>	

		<div class="c4 bg-white">
			<div class="margin-top250 margin-bot40">
				<h2 class="size10 margin-bot20"><? the_field('content_7_headline'); ?></h2>

				<ul class="vmenu vborder mobile-hide-images margin-bot30 clearfix">
					<?	if($recents = get_posts(array('post_type'=>'post','orderby'=>'post_date','order'=>'desc','posts_per_page'=>3))):
							foreach($recents as $p):	?>
								<li class="left">
									<? if($img = _get_pimg('thumbnail',$p->ID)): ?><a href="<?= get_permalink($p->ID); ?>"><img src="<? echo $img[0]; ?>" height="80" class="left margin-right15 margin-bot25 round nostretch"></a><? endif; ?>
									<div class="size5 nounderline"><a class="black" href="<?= get_permalink($p->ID); ?>"><?= $p->post_title; ?></a></div>
									<div class="size1"><?= ufc_excerpt($p->ID,17); ?></div>

								</li>
					<?		endforeach;
						endif; ?>
					
				</ul>
				<div class="margin-top40">
					<?	ufc_buttons(get_field('content_7_buttons')); ?>
				</div>
			</div>
		</div>

		<div class="c1 bg-white emptycol"></div>	
	</div>

</div>


<?	get_footer();	?>