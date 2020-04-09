<?	if ( have_posts() ) :

		$i=0;
		while ( have_posts() ) : the_post(); ?>
				<div class="half <? if($i++%2==0) echo 'left'; else echo "right";  ?>">
					<?	get_template_part('content','careers-preview');	?>
				</div>
			<? $i++; ?>
	<?	endwhile;

	else: 

		echo '<div class="margin-bot90 text-center">Nothing here yet - Check back soon!</div>';

	endif;
?>