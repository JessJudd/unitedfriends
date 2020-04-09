<?	get_header();	?>


	<div id="main">
		<div id="content">

			<?	if ( have_posts() ) :	?>

				<div class="page-title">Search for: <span>"<?= get_search_query(); ?>"</span></div>

			<? 		get_template_part('loop','post');				
				else 
					echo '<div class="post">No results were found.</div>';
			?>

		</div>
		<?	get_sidebar(); ?>
	</div>


<?	get_footer(); 	?>