<div class="postpreview-small margin-bot60">
	<a href="<? the_permalink(); ?>" class="bg-cover bg-grey margin-bot20" <?	if($img = _get_pimg('large')) echo "style='background-image:url($img[0])'"; ?>><div class="spacer-landscape"></div></a>
	<div class="margin-bot10"><a class="size7 nounderline" href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
	<div class="grey margin-bot10 size0"><?= get_the_time(get_option('date_format')); ?> By <? the_author(); ?></div>	
	<div><? 	the_excerpt();	   ?></div>
</div>