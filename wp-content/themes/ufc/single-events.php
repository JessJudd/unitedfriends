<?	global $post;

	get_header();	
	
	the_post();

	$event_form_id = get_field('event_form_id');
	$event_form_iframe = get_field('event_form_iframe');

	$has_event_form = (!empty($event_form_id) || !empty($event_form_iframe)) ? true : false;

?>

<div id="main" class="grid">

	<div class="headline-row">
		<div class="row white bg-cover bg-shaded js-even-columns" <? if($img = _get_pimg('large')): ?>style="background-image:url(<?= $img[0] ?>)"<? endif; ?>>
			<div class="c2 emptycol"></div>
			<div class="c8">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25 content"><? the_title(); ?></h2>
					<h2 class="size5 bold margin-bot25"><?  the_field('event_date');  ?></h2>
					<div class="size5 underline margin-bot30"><a class="white" href="https://www.google.com/maps/search/<? the_field('event_address') ?>" target="_blank"><? the_field('event_address') ?></a></div>
					<? if($has_event_form) : ?><a href="#" class="btn btn-green js-show-event-form"><? if($text=get_field('form_button_text')) echo $text; else echo "Buy Tickets";  ?></a><? endif; ?>		
				  </div>
				</div>

			</div>
			<div class="c2 emptycol"></div>
		</div>	
	</div>

	<? if($has_event_form) : ?>

	<div id="event-form" class="row border-bottom">
		<div class="c12 margin-top60 margin-bot60">

			<div class="content">
				<?	if($event_form_id)
						echo do_shortcode('[gravityform id="'.$event_form_id.'" title="true" description="true" ajax="true"]'); 

					else if($event_form_iframe)
						echo '<div class="text-center">'.$event_form_iframe.'</div>';

						?>
			</div>

		</div>
	</div>

	<?	endif;  ?>

	<div class="row">
		<div class="c12 margin-top90 margin-bot90">
			<div class="content">
				<? the_content(); ?>
			</div>
		</div>
	</div>


	<?	if($events = get_field('past_events')): ?>

	<div class="bg-grey2">
		<div class="row">
			<div class="c12 margin-top90 margin-bot60">
				<div class="content">
					<div class="size10 text-center margin-bot10">Past Events</div>
					<div class="twothirds text-center centered margin-bot40"><? the_field('past_events_blurb','options'); ?></div>
					
					<?		
								$i=0;
								foreach($events as $event):	
									$date_str = get_field('event_date',$event->ID);
									if($date_str) $timestamp = strtotime($date_str);



									?>
										<div class="clearfix js-even-columns margin-bot60">

											<div class="half left">
												<div class="size7 margin-bot10"><?= $event->post_title; ?></div>
												<div class="grey size1 margin-bot20"><?  													
													if($date_str)
														date('F dS,  Y', $timestamp);
												  ?></div>
												<div class="margin-bot20"><?= $event->post_excerpt; ?></div>
												<a class="btn btn-green btn-size1" href="<? the_permalink($event->ID); ?>">Read More</a>
											</div>
											<div class="half right bg-cover"
												<?	if($img = _get_pimg('large',$event->ID))
														echo "style='background-image:url($img[0])'";		?>>						
											</div>

										</div>
							<?		$i++;

									if($i>=2)
										break;
									
								endforeach;

							?>

				</div>
			</div>
		</div>
	</div>

	<?	endif;	?>
	
	<div class="half-bg half-bg-light-blue-white">
		<div class="row js-even-columns">
			
			<div class="c6 white">
				<div class="valign-middle">
					<div>
						<div class="half-box margin-top30 margin-bot30">
							<div class="size7 margin-bot30">Return to Events</div>
							<a href="<? bloginfo('url'); ?>/events" class="btn btn-green">Events</a>
						</div>
					</div>
				</div>
			</div>

			<? get_template_part('section','other-events'); ?>

		</div>
	</div>

</div>

<?	get_footer(); 	?>