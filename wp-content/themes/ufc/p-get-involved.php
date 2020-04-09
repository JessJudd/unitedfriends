<?	/*
		Template Name: Get Involved

	 */

	get_header();	

	the_post();	

	?>

<div class="bg-dark-blue page-nav">
	<div class="grid">
		<div class="row text-center">
			<?	ufc_buttons(get_field('page_nav'),"clear"); ?>
		</div>
	</div>
</div>

<!-- /////////////// Change A Life /////////////// -->
<a class="sectionanchor"></a>
<div id="main" class="grid">

	<div class='headline-row'>
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-position: center 40%;background-image:url(<? bloginfo('template_url'); ?>/images/content/get-involved-1.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content"><? the_field('content_1_blurb'); ?></div>
					<div class="size2 margin-bot30"><? the_field('content_1_quote_author'); ?></div>

					<? ufc_buttons(get_field('content_1_buttons'),'blue'); ?>

				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="bg-blue">
		<div class="row white">
			<div class="c12 text-center margin-bot40 margin-top90">
				<div class="size10 content-size2">
					<? the_field('content_2_headline'); ?>
				</div>
			</div>
		</div>
		<div class="row white">
			<div class="c3 emptycol"></div>
			<div class="c6 margin-bot90"><? the_field('content_2_body'); ?></div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="bg-grey">
		<div class="row js-even-columns">
			<div class="c1 emptycol"></div>
			<div class="c5">
				<div class="padding-right content margin-top60 margin-bot60">
					<div class="size7 mobile-smaller-text"><? the_field('content_3_quote'); ?></div>
					<div class="margin-top20"><? the_field('content_3_quote_author'); ?></div>
				</div>
			</div>	
			<div class="c6 bg-cover" style="min-height:400px;background-image:url(<? bloginfo('template_url'); ?>/images/content/get-involved-2.jpg)">
			</div>
		</div>
	</div>

	<!-- /////////////// Volunteers /////////////// -->
	<a class="sectionanchor"></a>
	<div class="row">
		<div class="c12 text-center size7 margin-bot60 margin-top90"><? the_field('content_4_headline'); ?></div>
	</div>
	<div class="row">
		<div class="c12 text-center">
			<div class="thirds margin-bot90">
				<div class="col">
					<img src="<? bloginfo('template_url'); ?>/images/content/get-involved-volunteers-1.gif" height="105" class="nostretch"/>
					<div class="bold margin-top20"><? the_field('content_4_list_1'); ?></div>
				</div>
				<div class="col">
					<img src="<? bloginfo('template_url'); ?>/images/content/get-involved-volunteers-2.png" height="105" class="nostretch"/>
					<div class="bold margin-top20"><? the_field('content_4_list_2'); ?></div>
				</div>
				<div class="col">
					<img src="<? bloginfo('template_url'); ?>/images/content/get-involved-volunteers-3.png" height="105" class="nostretch"/>
					<div class="bold margin-top20"><? the_field('content_4_list_3'); ?></div>
				</div>
			</div>
		</div>
	</div>



	<div class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/get-involved-3.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_5_headline'); ?></h2>
					<div class="size5"><? the_field('content_5_blurb'); ?></div>

				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">
		<div class="c12 margin-top90 margin-bot60 size7 text-center"><? the_field('content_6_headline'); ?></div>
	</div>
	<div class="row">
		<div class="c12">
			<div class="content margin-bot90">
				<div class="clearfix">				
					<div class="half left">
						<ol class="big-number less-spacing blue-numbers">
							<?	if($list = ufc_texttolist(get_field('content_6_list'))): 
									foreach($list as $li):	?>
										<li><div class="bold"><?= $li ?></div></li>					
							<?		endforeach;
								endif;		?>		
						</ol>
					</div>
					<div class="half right">
						<div class="blue size6 bold"><? the_field('content_6_quote'); ?></div>
						<div class="margin-top20 margin-bot40"><? the_field('content_6_quote_author'); ?></div>
					</div>
				</div>
				<div>
					<a class="btn btn-blue" href="http://www.volunteermatch.org/search/org262996.jsp" target="_blank"><? the_field('content_6_button_text'); ?></a>
				</div>
			</div>
		</div>
	</div>


	<!-- /////////////// In Kind /////////////// -->
	<a class="sectionanchor"></a>

	<div class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/get-involved-4.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_7_headline'); ?></h2>
					<div class="size5"><? the_field('content_7_blurb'); ?></div>

				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">
		<div class="c12">
			<div class="content margin-top90 margin-bot90">
				<div class="size7 margin-bot40"><? the_field('content_8_headline'); ?></div>
				<div class="clearfix">
					<div class="third left">
						<ol class="big-number less-spacing blue-numbers">
							<?	if($list = ufc_texttolist(get_field('content_8_list'))): 
									foreach($list as $li):	?>
										<li><div class="bold"><?= $li ?></div></li>					
							<?		endforeach;
								endif;		?>		
						</ol>
					</div>
					<div class="twothirds right">
						<div class="blue size6 bold margin-bot40"><? the_field('content_8_blurb'); ?></div>

						<div>
							<a class="btn btn-blue" href="mailto:info@unitedfriends.org?subject=<? the_field('content_8_button_email_text'); ?>" target="_blank"><? the_field('content_8_button_text'); ?></a>
						</div>

					</div>			
				</div>
			</div>
		</div>
	</div>


	<!-- /////////////// Internships /////////////// -->
	<a class="sectionanchor"></a>

	<div class='bg-blue'>
		<div class="row white">
			<div class="c12 size10 text-center margin-bot40 margin-top90"><? the_field('content_9_headline'); ?></div>
		</div>
		<div class="row bg-blue white">
			<div class="c3 emptycol"></div>
			<div class="c6 margin-bot90"><? the_field('content_9_body'); ?></div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="bg-grey">
		<div class="row js-even-columns">
			<div class="c1 emptycol"></div>
			<div class="c5">
				<div class="padding-right content margin-top90 margin-bot90">
					<div class="size7"><? the_field('content_10_quote'); ?></div>
					<div class="margin-top20"><? the_field('content_10_quote_author'); ?></div>
				</div>
			</div>	
			<div class="c6 bg-cover" style="min-height:400px;background-position: center 10%;background-image:url(<? bloginfo('template_url'); ?>/images/content/get-involved-5.jpg)">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="c2 emptycol"></div>
		<div class="c8 margin-top90 margin-bot90 text-center">
			<div class="content-size2">
				<div class="size7 margin-bot60"><? the_field('content_11_headline'); ?></div>
				<ul class="logos menu margin-bot60">
				<?	if($logos = get_field('content_11_logos')):
						foreach($logos as $logo):	?>
							<li><img src="<?= $logo['sizes']['medium']; ?>"/></li>
				<?		endforeach;
					endif;	?>
				</ul>

				<div>
					<a class="btn btn-blue" href="mailto:info@unitedfriends.org?subject=<? the_field('content_11_button_email_text'); ?>" target="_blank"><? the_field('content_11_button_text'); ?></a>
				</div>

			</div>
		</div>
		<div class="c2 emptycol"></div>
	</div>

</div>

<?	get_footer();	?>