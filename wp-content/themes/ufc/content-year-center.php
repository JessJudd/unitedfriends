<div class="row">
	<div class="c12 margin-bot90">
		<div class="content">
		<?	if($img = _get_pimg('large'))
				echo "<img class='margin-bot40' src='$img[0]'/>";		?>
			<div class="margin-bot10 green size7"><? the_title(); ?></div>
			<div class="size7 margin-bot20"><?= the_field('headline'); ?></div>	
			<div><? the_content(); ?></div>
		</div>
	</div>
</div>