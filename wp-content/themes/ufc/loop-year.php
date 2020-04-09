<?	if ( have_posts() ) :

		$i=0;
		while ( have_posts() ) : the_post(); ?>
		<?	get_template_part('content','year-'.get_field('layout'));	?>
	<?	endwhile;

	else: 

		echo '<div class="post">Nothing here yet - Check back soon!</div>';

	endif;
?>