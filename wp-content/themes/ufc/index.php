<?	get_header();	
	global $post,$paged;

//	$cur_cat_id = get_query_var( 'cat' );

$featured_posts = get_field('news_featured_posts','options');

?>


<div id="main" class="grid">

	<?	if($featured_posts && $paged<2):
			$top_post = array_shift($featured_posts); 
			$post = get_post($top_post);
			setup_postdata($post);
			if(!is_category() || has_category(get_query_var('cat'),$post)) :
				


				$bg = "";
				if($bg_img = _get_pimg('large')) 
					$bg = 'style="background-position:center 15%;background-image:url('.$bg_img[0].')"';

				?>

				<div class='headline-row post-preview-large'>
					<div class="row js-even-columns bg-cover bg-shaded white" <?= $bg; ?>>
						<div class="c3 emptycol"></div>
						<div class="c6">

							<div class="valign-middle text-center">
							  <div>
							 	<h2 class="size10 margin-bot10"><? the_title(); ?></h2>
								<div class="size5 margin-bot30"><?= ufc_excerpt($post->ID,42); ?></div>
								<a href="<? the_permalink(); ?>" class="btn btn-green">Read More</a>
							  </div>
							</div>

						</div>
						<div class="c3 emptycol"></div>
					</div>
				</div>
	<?			
			endif;
			wp_reset_postdata();	

		endif;		?>

	
	<div class="row">
		<div class="c12">
			<?	ufc_taxonomy_menu('category');		?>
		</div>
	</div>

	<div class="row">
		<div class="c12">
			<div class="content">
					<? /* if($featured_posts && $paged<2): // secondary featured post area
							foreach($featured_posts as $f_p):
								$post = get_post($f_p);
								setup_postdata($post);
								if(!is_category() || has_category(get_query_var('cat'),$post))						
									get_template_part('content','post-preview');
								wp_reset_postdata();
							endforeach;
						endif;
					*/ ?>
				<div class="Xmargin-top120 margin-top30 margin-bot60">
					<?	get_template_part('loop','post-preview-small');  ?>
				</div>
			</div>
		</div>
	</div>

	<?	get_template_part('section','pagination'); ?>


</div>

<?	get_footer(); 	?>