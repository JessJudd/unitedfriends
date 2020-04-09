<?	if ( have_posts() ) :

		$i=0;
		echo "<div class='clearfix'>";
		while ( have_posts() ) : the_post(); 
			if($i%2==0) $side = 'left'; else $side = 'right';
			if($i%2==0 && $i!=0) echo "</div><div class='clearfix'>";
			echo "<div class='half $side'>";
			get_template_part('content','post-preview-small');	
			echo "</div>";

			$i++;
		endwhile;
		echo "</div>";

	else: 

		echo '<div class="post">Nothing here yet - Check back soon!</div>';

	endif;
?>