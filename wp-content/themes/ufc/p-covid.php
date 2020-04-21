<?	/*
		Template Name: COVID-19

	 */

	get_header();	

	the_post();	
    
    $resources = get_posts(array(
		'post_type' => 'covid-19',
		'orderby' => 'post_title',
		'order' => 'asc',
		'post_status' => 'publish',
		'numberposts' => -1
	));

	?>

<div class="bg-green page-nav">
	<div class="grid">
		<div class="row text-center">		
            <ul class="menu ">
                <li><a class="btn btn-clear" target="" href="#">Support</a></li>
                <li><a class="btn btn-clear" target="" href="#">Our Role</a></li>
                <li><a class="btn btn-clear" target="" href="#">Resources</a></li>
            </ul>
		</div>
	</div>
</div>

<div id="main" class="grid">
	<div class="headline-row">
		<?php $hero_bg = get_field('hero_image');
			$bg_url = ($hero_bg ? $hero_bg : 'https://picsum.photos/1500/678?grayscale');
		?>
		<div class="row js-even-columns bg-cover bg-shaded white" style="background-position: center 55%;background-image:url(<?php echo $bg_url; ?>);">
			<div class="c3 emptycol"></div>
			<div class="c6">
				<div class="valign-middle text-center">
				  	<div>
						<h2 class="size10 margin-bot20"><?php the_title(); ?></h2>
						<?php if(get_field('subtitle')){
							the_field('subtitle');
						} ?>
					</div>
				</div>
			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>
	<a class="sectionanchor" name="section1"></a>
    <div class="bg-blue">
	    <div class="row white">
            <div class="c12 margin-bot120">
                <div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_1_headline'); ?></div>
                <div class="content text-center width60 size5">
                    <?php
                    if(the_field('content_1_body')){
                        the_field('content_1_body');
                    }
                    ?>
                </div>
                <div class="text-center margin-top40">
                    <ul class="menu">
                        <?php
                        $get_content_1_button_target = get_field('content_1_button_target');
                        $content_1_target = ($get_content_1_button_target == 1 ? 'target="_blank"' : ''); ?>
                        <li>
                            <a class="btn btn-orange" <?php echo $content_1_target; ?> href="<?php the_field('content_1_button_url'); ?>">
                                <?php echo the_field('content_1_button_copy'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<a class="sectionanchor" name="section2"></a>
	<?php
		$grid1 = get_field('content_grid__R');
		if($grid1['title']):
		$image = ($grid1['image'] ? $grid1['image'] : 'https://picsum.photos/925/678?random=3');
		$title = $grid1['title'];
		$blurb = $grid1['blurb'];
	?>
    <div class="row js-even-columns">
        <div class="c6 bg-grey">
            <div class="half-box margin-top75 margin-bot75">
                <div class="margin-bot10 green size7"><?php echo $title; ?></div>
                <div>
                    <?php echo $blurb; ?>
                </div>
            </div>
        </div>
			
		<div class="c6 bg-cover" style="background-image:url(<?php echo $image; ?>);">
			<div class="spacer"></div>
		</div>
    </div>
	<?php endif; ?>

	<?php
		$grid2 = get_field('content_grid__L');
		if($grid2['title']):
		$image = ($grid2['image'] ? $grid2['image'] : 'https://picsum.photos/925/678?random=2');
		$title = $grid2['title'];
		$blurb = $grid2['blurb'];
	?>
    <div class="row js-even-columns" id="leftGrid">
        <div class="c6 bg-cover" style="background-image:url(<?php echo $image; ?>);">
            <div class="spacer"></div>
        </div>

        <div class="c6 bg-grey">

            <div class="half-box margin-top75 margin-bot75">
                <div class="margin-bot10 green size7"><?php echo $title; ?></div>
                <div>
                    <?php echo $blurb; ?>
                </div>
            </div>
        </div>
    </div>
	<?php endif; ?>

	<?php
		$grid3 = get_field('content_grid__R2');
		if($grid3['title']):
		$image = ($grid3['image'] ? $grid3['image'] : 'https://picsum.photos/925/678?random=1');
		$title = $grid3['title'];
		$blurb = $grid3['blurb'];
	?>
    <div class="row js-even-columns">
        <div class="c6 bg-grey">

            <div class="half-box margin-top75 margin-bot75">
                <div class="margin-bot10 green size7"><?php echo $title; ?></div>
                <div>
                    <?php echo $blurb; ?>
                </div>
            </div>
        </div>

        <div class="c6 bg-cover" style="background-image:url(<?php echo $image; ?>);">
            <div class="spacer"></div>
        </div>
    </div>
	<?php endif; ?>

	<?php if(get_field('content_2_headline')):?>
    <div class="bg-blue">
    <div class="row white">

		<div class="c12 margin-bot120 text-center">
            <h2 class="size10 margin-bot20 margin-top90"><?php echo the_field('content_2_headline'); ?></h2>

			<?php if(get_field('content_2_button_url')):?>
			<div class="text-center margin-top40">
                <ul class="menu">
                    <li><a class="btn btn-orange" target="" href="<?php the_field('content_2_button_url'); ?>"><?php echo the_field('content_2_button_copy'); ?></a></li>
                </ul>
			</div>
			<? endif; ?>

		</div>

	</div>
    </div>
	<?php endif; ?>
	<a class="sectionanchor" name="section3"></a>
    <div class="bg-white"><div class="row">

		<div class="c12 margin-bot90">
            <div class="size7 margin-top90 margin-bot40 text-center">COVID-19 Resources</div>
			<?	if($resources):
				  // BUTTONS
				  echo '<ul data-default-content="Select Category" class="menu drop-down-buttons text-center margin-top40 margin-bot40 js-tabs-buttons menu-3n content-size2">';				
					foreach($resources as $resource) : 

						echo "<li><a class='btn btn-clear-green btn-size2 text-center' href='#'>".$resource->post_title."</a></li>";

					endforeach;
				  echo '</ul>';

				  // CONTENT
				  echo '<ul class="vmenu js-tabs">';				
					foreach($resources as $resource) :	?>
					<li>
					  <div class="content">

						<?	switch(get_field('layout',$resource->ID)) :								

								case "primary_links":
									echo "<ul class='vmenu'>";
										if($primary_links = get_field('primary_links',$resource->ID)):
											foreach($primary_links as $link):	?>
												<li><a class="bold underline" href='<?= $link['url']; ?>' target='_blank'><?= $link['title']; ?></a>
													<div><?= $link['description']; ?></div>

													<div class="clearfix margin-top20 margin-bot40">
														<div class='half left'>
															<? if($deadline = $link['deadline']) : ?>
																<div class='size1 margin-bot5 caps semibold'>Deadline</div>
																<div class='size0 margin-bot10'><?= $deadline; ?></div>
															<? endif; ?>
															<? if($information = $link['information']) : ?>
																<div class='size1 margin-bot5 caps semibold'>Information</div>
																<div class='size0 margin-bot10'><?= $information; ?></div>
															<? endif; ?>
															<? if($contact = $link['contact']) : ?>
																<div class='size1 margin-bot5 caps semibold'>Contact</div>
																<div class='size0 margin-bot10'><?= $contact; ?></div>
															<? endif; ?>
														</div>				

														<div class='half right'>
															<? if($eligability = $link['eligability']) /* spelled wrong in backend :-/ */ : ?>
																<div class='size1 margin-bot5 caps semibold'>Eligibility</div>
																<div class='size0'><?= $eligability; ?></div>
															<? endif; ?>
														</div>	
													</div>
													
												</li>
										<?	endforeach;
										endif;
									echo "</ul>";									
								break;

								case "secondary_links":
									echo "<ul class='vmenu menu half left'>";
										if($secondary_links = get_field('secondary_links',$resource->ID)):
											$count = count($secondary_links);
											$i=0;
											foreach($secondary_links as $link):	?>
												<li><a class="bold underline" href='<?= $link['url']; ?>' target='_blank'><?= $link['title']; ?></a>
													<div><?= $link['description']; ?></div>
												</li>
										<?		if($i==floor($count/2))
													echo "</ul><ul class='vmenu menu half right'>";
												$i++;
											endforeach;
										endif;
									echo "</ul>";
								break;

								case "sections_links":
									echo "<ul class='vmenu'>";
										if($sections_links = get_field('sections_links',$resource->ID)):
											foreach($sections_links as $section):
												echo "<li class='margin-bot40'><div class='green size7 regular margin-bot20'>".$section['section_title']."</div>";

												if($links = $section['links']):
													echo "<ul class='vmenu semibold'>";
													foreach($links as $link):
														echo "<li class='margin-bot5'><a class='underline' href='".$link['url']."' target='_blank'>".$link['title']."</a></li>";
													endforeach;
													echo "</ul>";													
												endif;

												echo "</li>";
											endforeach;
										endif;
									echo "</ul>";
								break;

							endswitch; ?>

					  </div>
					</li>
				<?	endforeach;
				  echo '</ul>';
				endif;	?>
		</div>

	</div></div>

</div>
	

<?	get_footer();	?>