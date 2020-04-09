<div class="post margin-bot60">
	<?	if($img = _get_pimg('large'))
			echo "<img class='post-image margin-bot20' src='$img[0]'/>";		?>
	<div class="text-center margin-bot20 margin-top90 size10 bold nounderline" ><? the_title(); ?></div>
	<div class="text-center margin-bot90"><?= get_the_time(get_option('date_format')); ?></div>	
	<div><? the_content(); ?></div>
</div>