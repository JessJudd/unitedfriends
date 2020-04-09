<?	/*
		Template Name: Events

	 */

	get_header();	

	the_post();	

	$events = get_field('featured_events');

	?>

<div id="main" class="grid">

	<div class="headline-row">
		<div class="row white js-even-columns <? if($img = _get_pimg('full',$events[0]->ID)): ?>bg-cover bg-shaded" style="background-image:url(<?= $img[0] ?>)<? endif; ?>">
			<div class="c2 emptycol"></div>
			<div class="c8">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 centered margin-bot20 content"><?= $events[0]->post_title; ?></h2>
					<h2 class="size5 bold margin-bot25"><? if($date = get_field('event_date',$events[0]->ID)) echo $date;  ?></h2>
					<div class="size5 content-size2 margin-bot30"><?= $events[0]->post_excerpt; ?></div>
					<a href="<? the_permalink($events[0]->ID); ?>" class="btn btn-green">Details</a>			
				  </div>
				</div>

			</div>
			<div class="c2 emptycol"></div>
		</div>	
	</div>


	<div class="half-bg half-bg-blue-grey">
		<div class="row js-even-columns">
		<?	$bg_colors = array('blue','dark-grey','dark-grey');
			for($i=1; $i<4; $i++) :	?>
				<div class="c6 white bg-<?= $bg_colors[$i-1]; ?>" <? /*if($img = _get_pimg('large',$events[$i]->ID)) echo "bg-cover bg-shaded"; ?> <? if($i<3) echo "white"; ?>" <? if($img): ?>style="background-image:url(<?= $img[0] ?>)"<? endif; */?>>
					<? if(!empty($events[$i])) : ?>
					<div class="half-box margin-top90 margin-bot90">

						<h2 class="size7 margin-bot25"><?= $events[$i]->post_title; ?></h2>
						<div class="size5 margin-bot30" style="height:140px"><?= $events[$i]->post_excerpt; ?></div>
						<a href="<? the_permalink($events[$i]->ID); ?>" class="btn btn-green">Details</a>			

					</div>
					<div class="topleft size5 bold margin-bot25"><? if($date = get_field('event_date',$events[$i]->ID)) echo date('n/j',strtotime($date));  ?></div>
					<? endif; ?>
				</div>
				<?	if($i==2)	echo "</div></div><div class='half-bg half-bg-grey-white'><div class='row js-even-columns'>";	?>
		<?	endfor;  ?>
	
		<? get_template_part('section','other-events'); ?>

		</div>
	</div>
			

</div>

<?	get_footer();	?>