<?	$careers_page = get_page_by_path('career',OBJECT,'page');	?>

<div id="main" class="grid">

<?		if($bg_img = _get_pimg('large',$careers_page->ID))
			$bg = 'style="background-image:url('.$bg_img[0].')"';
		?>

	<div class="headline-row">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size10 margin-bot10"><? the_field('content_1_headline',$careers_page->ID); ?></h2>
					<div class="size5"><? the_field('content_1_blurb',$careers_page->ID); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">
		<div class='c12'>	
			<?	ufc_taxonomy_menu('department',"All Current Job Openings");	?>
		</div>
	</div>

	<div class="row">
		<div class="content">
			<?	get_template_part('loop','careers'); ?>
		</div>
	</div>

</div>