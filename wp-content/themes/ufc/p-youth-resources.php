<?	/*
		Template Name: Youth Resources

	 */

	get_header();	

	the_post();	
	
	$resources = get_posts(array(
		'post_type' => 'youth-resources',
		'orderby' => 'menu_order',
		'order' => 'desc',
		'numberposts' => -1
	));

	?>

<div id="main" class="grid">

	<div class="bg-purple headline-row">
		<div class="row widerow bg-cover js-even-columns white" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-applications.jpg)">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size14 light italic margin-bot25"><? the_field('content_1_headline'); ?></h2>
					<div class="size6 light content margin-bot40"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
		<div id="yar-skew1" class="skew"></div>
	</div>
	<div class="bg-purple">

		<div class="row white">

			<div class="c12 margin-bot90">
				<?	if($resources):
					  // BUTTONS
					  echo '<ul class="menu margin-top40 margin-bot40 js-tabs-buttons menu-3n content-size2">';				
						foreach($resources as $resource) : 

							echo "<li><a class='btn btn-clear-orange btn-size2 text-center' href='#'>".$resource->post_title."</a></li>";

						endforeach;
					  echo '</ul>';

					  // CONTENT
					  echo '<ul class="vmenu js-tabs">';				
						foreach($resources as $resource) :	?>
						<li>
						  <div class="content">
						  	<ul class="menu vmenu">
						  	<?	if($items = get_field('items',$resource->ID)):

							  		foreach($items as $item):	?>
							  		<li>
							  			<div class="bold underline"><?= $item['title']; ?></div>
							  			<div class="margin-bot20"><?= $item['blurb']; ?></div>
							  			<ul class="menu margin-bot30">
							  				<?	if(array_key_exists('apply_url',$item) && ($apply_url = $item['apply_url'])) : ?><li><a class="btn btn-green" href="<?= $apply_url; ?>" target="_blank">Apply Online</a></li><? endif; ?>
							  				<?	if(array_key_exists('pdf',$item) && ($download_url = $item['pdf']['url'])) : ?><li><a class="btn btn-green" href="<?= $download_url; ?>" target="_blank">Download <? $ext = pathinfo($download_url,PATHINFO_EXTENSION); if($ext == "doc" || $ext == "docx") echo "word doc"; else if($ext == "pdf") echo "pdf"; ?></a></li><? endif; ?>
							  			</ul>
							  		</li>
							  	<?	endforeach;				
							  	endif;	?>
						  	</ul>
						  </div>
						</li>
					<?	endforeach;
					  echo '</ul>';
					endif;	?>
			</div>

		</div>

		<div class="row white bg-cover js-even-columns" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-top.jpg)">			
			
			<div class="c2 emptycol"></div>
			<div class="c8 text-center">
				<div class="margin-top200 margin-bot200">
					<div class="size13 italic light margin-bot40"><? the_field('content_2_headline'); ?></div>
					<div class="size6 light margin-bot40"><? the_field('content_2_blurb'); ?></div>
					<? ufc_buttons(get_field('content_2_buttons'),'orange'); ?>
				</div>
			</div>
			<div class="c2 emptycol"></div>
			<div id="yar-skew2" class="skew"></div>
		</div>

		<div class="row bg-grey">
			<div class="c2 emptycol"></div>
			<div class="c8 text-center">

				<div class="margin-top60 margin-bot120">

					<div class="size10 margin-bot30"><? the_field('content_3_headline'); ?></div>
					<div class="half size5 centered margin-bot30"><? the_field('content_3_blurb'); ?></div>
					<? ufc_buttons(get_field('content_3_buttons')); ?>

				</div>

			</div>
			<div class="c2 emptycol"></div>

			<div id="yar-skew3" class="skew"></div>

		</div>
	</div>

</div>
	

<?	get_footer();	?>