<div class="row js-even-columns">
	<div class="c6 bg-grey">

		<div class="half-box margin-top75 margin-bot75">
			<div class="margin-bot10 green size7"><? the_title(); ?></div>
			<div class="margin-bot20 size7"><? the_field('headline'); ?></div>	
			<div><? the_content(); ?></div>
		</div>
	</div>

	<div class="c6 bg-cover"<?	
		if($img = _get_pimg('large'))
			echo "style='background-image:url($img[0])'";		?>>
		<div class="spacer"></div>
	</div>
</div>
<div class="margin-bot90"></div>