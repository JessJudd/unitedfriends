<?	if ( have_posts() ) :

	
		while ( have_posts() ) : the_post(); 
			get_template_part('content','post');	
		endwhile;

	else: 

		echo '<div class="post">Nothing here yet - Check back soon!</div>';

	endif;
?>