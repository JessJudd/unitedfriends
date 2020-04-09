<?	get_header();	
	
	the_post();

	global $post;
?>

<div class="grid" id="main">


<?	if($img = _get_pimg('large',$post->ID)): 	?>

	<div class='headline-row'>
		<div class="row white bg-cover bg-shaded js-even-columns" style="background-position: center 20%;background-image:url(<?= $img[0]; ?>);">
			<div class="c3 emptycol"></div>
			<div class="c6">

				<div class="valign-middle text-center">
				  <div>
					<h2 class="size10 margin-bot25"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_1_blurb'); ?></div>

					<? ufc_buttons(get_field('content_1_buttons')); ?>

				  </div>
				</div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>

<?	endif; ?>


	<div class="c12">
		<div class="content margin-top90 margin-bot90">

			<? if($img==FALSE): ?><h2 class="size7 margin-bot20"><? the_title(); ?></h2><? endif; ?>
			<? the_content(); ?>

		</div>
	</div>
</div>


<?	get_footer(); 	?>