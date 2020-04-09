<?	/*
		Template Name: Resources

	 */

	get_header();	

	the_post();	


	
	$resources = get_posts(array(
		'post_type' => 'resources',
		'orderby' => 'post_title',
		'order' => 'asc',
		'post_status' => 'publish',
		'numberposts' => -1
	));

	?>

<div id="main" class="grid">

	<div class="headline-row">
		<div class="row js-even-columns bg-cover bg-shaded white" <? if($image = get_field('content_1_image')): ?>style="background-position: center 20%;background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size10 margin-bot10"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

	<div class="row">

		<div class="c12 margin-bot90">
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

	</div>



	<div class="row white bg-cover js-even-columns" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-top.jpg)">			
		
		<div class="c2 emptycol"></div>
		<div class="c8 text-center">
			<div class="margin-top200 margin-bot90">
				<div class="size13 italic light margin-bot40"><? the_field('content_2_headline'); ?></div>
				<div class="size6 light margin-bot40 half centered"><? the_field('content_2_blurb'); ?></div>
				<? ufc_buttons(get_field('content_2_buttons'),'orange'); ?>
			</div>
		</div>
		<div class="c2 emptycol"></div>

		<div id="resources-skew1" class="skew"></div>


	</div>




</div>
	

<?	get_footer();	?>