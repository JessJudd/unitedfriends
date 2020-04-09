<?	global $post; ?>

<div class="row">
<?	if($img = _get_pimg('large')):	?>
		<img src='<?= $img[0]; ?>'/>		
</div>
<div class="row">
<?	endif; ?>

	<div class="c12 margin-bot90">

		<a class="sectionanchor"></a>
		<div class="decade-year"><?= ufc_get_decade_from_year_title($post->post_title); ?>s</div>
		
		<div class="content">


			<div class="text-center margin-bot20 margin-top40 size7"><? the_title(); ?></div>
			<div class="text-center size7 margin-bot40"><?= the_field('headline'); ?></div>	
			<div><? the_content(); ?></div>

		</div>

	</div>
</div>