<?	/*
		Template Name: Donate

	 */

	get_header();	

	the_post();	

	?>


	<div class="row">
		<div class="c12 margin-top60 margin-bot60">

			<div class="content">
				<?	echo do_shortcode('[gravityform id="12" title="true" description="true" ajax="true"]'); ?>
			</div>

		</div>
	</div>

	

</div>

<?	get_footer();	?>