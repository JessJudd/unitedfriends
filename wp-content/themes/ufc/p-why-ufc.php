<?	/*
		Template Name: Why UFC

	 */

	get_header();	

	the_post();	

	?>

<div id="main" class="grid">

	<div class='headline-row'>
		<div class="row white bg-cover bg-shaded js-even-columns" <? if($image = get_field('content_1_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_1_headline'); ?></h2>
					<div class="size5"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="half-bg half-bg-grey-green">
		<div class="row js-even-columns">
			<div class="c1 emptycol"></div>		
			<div class="c4 ">
				<div class="size5 margin-top60"><? the_field('content_2_text_1'); ?></div>
				<div class="size20 green bold margin-bot10 responsive-headline"><? the_field('content_2_text_2'); ?></div>
				<div class="margin-bot60"><? the_field('content_2_text_3'); ?></div>
			</div>
			<div class="c1 emptycol"></div>		
			<div class="c6 bg-green white">

				<div class="half-box">				

					<div class="size7 margin-top60 margin-bot10"><? the_field('content_3_headline'); ?></div>
					<div class="margin-bot60"><? the_field('content_3_blurb'); ?></div>

				</div>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="c12 margin-top120 margin-bot40 text-center">
			<div class="size7"><? the_field('content_4_headline'); ?></div>
		</div>
	</div>

	<div class="row">

		<div class="thirds text-center margin-bot120">
			<?	if($list = get_field('content_4_list')) : 
					$i=0;
					foreach($list as $item) : ?>
						<div class="col margin-bot40">
							<img height="95" src="<? bloginfo('template_url'); ?>/images/content/why-challenges-<?= $i++; ?>.png" class="nostretch"/>
							<div class="bold margin-bot10 margin-top10"><?= $item['title']; ?></div>
							<div><?= $item['body']; ?></div>
						</div>
			<?		endforeach;
				endif;	?>
		</div>

	</div>	


	<div class="bg-grey">
		<div class="row js-even-columns">

			<div class="c6 bg-cover" style="background-position: center 5%;min-height:400px;background-image:url(<? bloginfo('template_url'); ?>/images/content/whyufc-2.jpg)">

			</div>
			<div class="c6 bg-grey">
				<div class="half-box">
					<div class="size7 margin-top120 margin-bot120">
						<? the_field('content_5_blurb'); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="c12 text-center margin-top120 margin-bot90">
			<div class="size7"><? the_field('content_6_headline'); ?></div>
		</div>
	</div>

	
	<div class="row">

		<div class="thirds text-center margin-bot90">
			<?	if($list = get_field('content_6_list')) : 
					$i=0;
					foreach($list as $item) : ?>
						<div class="col margin-bot40">
							<img height="95" src="<? bloginfo('template_url'); ?>/images/content/why-impact-<?= $i++; ?>.png" class="nostretch"/>
							<div class="bold margin-bot10 margin-top10"><?= $item['title']; ?></div>
							<div><?= $item['body']; ?></div>
						</div>
			<?		endforeach;
				endif;	?>
		</div>

	</div>	

	<div class="row">
		<div class="c2 emptycol"></div>
		<div class="c8 text-center">
			<div class="size7 green margin-bot120"><? the_field('content_6_headline_bottom'); ?></div>
		</div>
		<div class="c2 emptycol"></div>
	</div>	


	<div class="bg-black headline-row">
		<div class="bg-cover row" style="min-height: 550px; background-image:url(<? bloginfo('template_url'); ?>/images/content/whyufc-3.jpg);"></div>
	</div>

	<div class="bg-grey">
		<div class="row">
			<div class="c12 text-center">
				<div class="size10 bold margin-top120"><? the_field('content_7_text_1'); ?></div>
				<div class="size25 margin-bot10 bold green responsive-headline"><? the_field('content_7_text_2'); ?></div>
				<div class="size5 margin-bot40"><? the_field('content_7_text_3'); ?></div>

				<div class="sixths text-center margin-bot40">
					<?	if($stats = get_field('content_7_stats')) :
							foreach($stats as $stat):	?>
								<div class='col'>
									<div class='size7 bold'><?= $stat['number']; ?></div>
									<div class='semibold caps size1'><?= $stat['text']; ?></div>
								</div>
					<?		endforeach;
						endif;
					?>

				</div>
			</div>
		</div>	

		<div id="why-stats-images" class="row text-center js-even-columns">
			<div class="c4">
				<img src="<? bloginfo('template_url'); ?>/images/content/why-stats-1.png" height="250" class=""/>				
			</div>

			<div class="c4">
				<img src="<? bloginfo('template_url'); ?>/images/content/why-stats-2.png"  height="250" class=""/>
			</div>

			<div class="c4">
				<img src="<? bloginfo('template_url'); ?>/images/content/why-stats-3.png"  height="250" class=""/>
				<div class="margin-bot120"></div>
			</div>
		</div>
	</div>
	
	<div class="bg-green">
		<div class="row white">
			<div class="content margin-top90 margin-bot90">

				<? the_field('content_8_body'); ?>

			</div>
		</div>
	</div>

	<div class="bg-blue">
		<div class="row white">
			<div class="c2 emptycol"></div>

			<div class="c8 text-center margin-top120 margin-bot120">

				<div class="size10 margin-bot20"><? the_field('content_10_headline'); ?></div>
				<div class="size5 margin-bot30"><? the_field('content_10_blurb'); ?></div>

				<?	ufc_buttons(get_field('content_10_buttons'),'blue'); ?>

			</div>

			<div class="c2 emptycol"></div>
		</div>
	</div>

</div>

<?	get_footer();	?>