<?	get_header();	
	global $post;
	the_post();
?>

	<div class="grid">
		<div class="row">
			<div class="c12">
				<div class="content">
					<? get_template_part('content','post'); ?>
				</div>
			</div>
		</div>


		<div class="bg-grey margin-top40">
			<div class="row js-even-columns">
				
				<div class="c6 bg-cover bg-shaded white" style="background-image:url(<? bloginfo('template_url'); ?>/JUNK/ufc1.jpg)">
					<div class="valign-middle">
						<div>
							<div class="half-box margin-top60 margin-bot60">
								<div class="size7 margin-bot30">Return to News</div>
								<ul class="menu"><li><a href="<? bloginfo('url'); ?>/news" class="btn btn-green">News</a></li></ul>
							</div>
						</div>
					</div>

				</div>

				<div class="c6">
					<div class="valign-middle">
						<div>
							<div class="half-box margin-top60 margin-bot60">
								<div class="size7 margin-bot20">Other News</div>
								<ul class="vmenu vborder margin-bot20 clearfix">							
								<?	$categories = wp_get_post_categories($post->ID);
									if($categories):
										$category = array_pop($categories);
										$other_news = get_posts(array('cat'=>$category,'post_type'=>'post','post_status'=>'publish','post__not_in'=>array($post->ID),'posts_per_page'=>2));								
										if(!$other_news)
											$other_news = get_posts(array('post_type'=>'post','post_status'=>'publish','post__not_in'=>array($post->ID),'posts_per_page'=>2,'orderby'=>'rand'));								
										if($other_news):
											foreach($other_news as $p):	?>
												<li class="left">
													<? if($img = _get_pimg('thumbnail',$p->ID)): ?><a href="<?= get_permalink($p->ID); ?>"><img src="<? echo $img[0]; ?>" height="80" class="left margin-right15 margin-bot25 round nostretch"></a><? endif; ?>													
													<div class="size4 margin-bot5 nounderline"><a class="black" href="<? the_permalink($p->ID); ?>"><?= $p->post_title; ?></a></div>
													<div class="size1"><? echo ufc_excerpt($p->ID,7); ?></div>
												</li>
									<?		endforeach;
										endif; 
								    endif; 	?>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

<?	get_footer(); 	?>