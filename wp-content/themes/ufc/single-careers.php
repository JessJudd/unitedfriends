<?	get_header();	
	
	the_post();

	global $post;

	$responsibilities = get_field('responsibilities');
	$careers_page = get_page_by_path('career',OBJECT,'page');
?>

	<div id="main" class='grid'>
		<div class='row'>
			<div class="c12 margin-top90">

				<div class="content">
					<h2 class="size10 text-center margin-bot10 twothirds centered"><? the_title(); ?></h2>
					<div class="size0 grey text-center margin-bot20"><? the_field('position_type'); ?></div>
					<div><? the_content(); ?></div>
				</div>

				<div>

					<?	if($responsibilities) : ?>
						<ul class="menu js-tabs-buttons text-center margin-top60 margin-bot40">
						<?	foreach($responsibilities as $r) : ?>
							<li><a class="btn btn-clear-green" href="#"><?= $r['title'] ?></a></li>
						<?	endforeach; ?>
						</ul>

						<ul class="js-tabs">
						<?	foreach($responsibilities as $r) : ?>
							<li class="content">
								<div class='bold margin-bot20'><?= $r['title']; ?>:</div>
									<?= $r['body']; ?>
							</li>
						<?	endforeach; ?>
						</ul>
					<?	endif; ?>

				</div>

			</div>
		</div>

		<div class='bg-light-green margin-top60'>
			<div class="row">
				<div class="c12">
					<div class="content text-center margin-top60 margin-bot60">										
						<?
							$footer_blurb = get_field('footer_blurb');
							$footer_buttons = get_field('footer_buttons');

							if(empty($footer_blurb)):
								$footer_blurb = get_field('permalinks_footer_blurb',$careers_page->ID);
								$footer_buttons = get_field('permalinks_footer_buttons',$careers_page->ID);
							endif;

						?>
						<div class="margin-bot30">
							<? 	echo $footer_blurb; ?>
						</div>

						<? ufc_buttons($footer_buttons,"green","","btn-size1");?>				
					</div>
				</div>
			</div>
		</div>

		<div class="bg-grey">
				<div class="c6 bg-cover bg-shaded white" style="background-image:url(<? bloginfo('template_url'); ?>/JUNK/ufc1.jpg)">
					<div class="valign-middle">
						<div>
							<div class="half-box margin-top60 margin-bot60">
								<div class="size7 margin-bot30"><? the_field('permalinks_footer_left_headline',$careers_page->ID); ?></div>
								<?	ufc_buttons(get_field('permalinks_footer_left_buttons',$careers_page->ID)); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="c6 bg-grey">
					<div class="valign-middle">
						<div>
							<div class="half-box margin-top60 margin-bot60">
								<div class="size7 margin-bot20">Related Jobs</div>
								<ul class="vmenu vborder margin-bot20">							
								<?	$department = wp_get_post_terms($post->ID,'department');
									if($department):
										$department = array_pop($department);
										$related_jobs = get_posts(array('department'=>$department->term_name,'post_type'=>'careers','post__not_in'=>array($post->ID),'posts_per_page'=>2));								
										if($related_jobs):
											foreach($related_jobs as $job):	?>
												<li>
													<div class="size4 margin-bot5 nounderline"><a class="black" href="<? the_permalink($job->ID); ?>"><?= $job->post_title; ?></a></div>
													<div class="size1"><? echo ufc_excerpt($job->ID,8); ?></div>
												</li>
									<?		endforeach;
										endif; 
								    endif; 	?>
								</ul>
								<ul class="menu">
									<li><a class="btn btn-green btn-size1" href="<? bloginfo('url'); ?>/careers">All Careers</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>





	</div>

<?	get_footer(); 	?>