<?	get_header();	?>


	<div id="main">
		<div id="content">
			<div class="page-title">Tag: <span><? single_tag_title(); ?></span></div>
			<?	get_template_part('loop','post'); ?>		
		</div>
		<?	get_sidebar(); ?>
	</div>


<?	get_footer(); 	?>