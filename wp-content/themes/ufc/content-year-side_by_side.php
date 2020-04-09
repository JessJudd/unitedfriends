<div class="row">

	<div class="c6 nopadding margin-bot90">

		<div class="margin-bot30 bg-cover"<?	
			if($img = _get_pimg('large'))
				echo "style='background-image:url($img[0]);'";		?>>
			<div class="spacer"></div>
		</div>

		<div class="half-box">
			<div class="margin-bot30 green size7"><? the_title(); ?></div>
			<div class="margin-bot30 size7"><? the_field('headline'); ?></div>	
			<div><? the_content(); ?></div>
		</div>
	</div>

	<div class="c6 nopadding margin-bot90">

		<div class="margin-bot30 bg-cover"<?	
			if($img = get_field('year_right_image'))
				echo "style='background-image:url(".$img['sizes']['large'].");'";		?>>
			<div class="spacer"></div>
		</div>

		<div class="half-box">
			<div class="margin-bot30 green size7"><? the_field('year_right_year'); ?></div>
			<div class="margin-bot30 size7"><? the_field('year_right_headline'); ?></div>	
			<div><? the_field('year_right_body'); ?></div>
		</div>
	</div>
</div>