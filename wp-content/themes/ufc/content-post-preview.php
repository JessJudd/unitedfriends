<div class="post-preview-medium margin-bot60">
	<?	if($img = _get_pimg('large'))
			echo "<a href='".get_the_permalink()."'><img class='post-image margin-bot20' src='$img[0]'/></a>";		?>
	<div class="margin-bot10"><a class="size7 nounderline" href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
	<div class="grey margin-bot10 size0"><?= get_the_time(get_option('date_format')); ?> By <? the_author(); ?></div>	
	<div><? if(is_single()) 
				the_content();
			else
				the_excerpt(); ?></div>
</div>