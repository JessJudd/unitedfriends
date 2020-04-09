<?	if ( have_posts() ) :

		$i=0;
		echo "<div class='thirds js-bio-row'>";
		while ( have_posts() ) : the_post(); 
			get_template_part('content','team');
			if($i%3==2)
				echo "</div><div class='thirds js-bio-row'>";
			$i++;
		endwhile;
		echo '</div>';

	else: 

		echo '<div class="post">Nothing here yet - Check back soon!</div>';

	endif;
?>