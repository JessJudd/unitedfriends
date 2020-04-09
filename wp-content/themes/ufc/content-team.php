<?
	global $wp_query,$post;

?>
<div class="team js-bio col text-center">
	<?	if($img = _get_pimg('large'))
			echo "<div class='round-square margin-bot5' style='background-image:url(".$img[0].");'><span></span></div>";		?>
	<div class="size5" href="<? the_permalink(); ?>"><? the_title(); ?></div>
	<div class="size0"><? the_field('job_title'); ?></div>	
	<? if(array_key_exists('sector',$wp_query->query)) : ?>
		<? if(!empty($post->post_content)): ?><a class="js-bio-expand size0 underline" href="#">View Bio</a><? endif; ?>
		<div class="bio">
			<div class="content">
			<? the_content(); ?>
			<? if($links = get_field('links')) :
				echo '<div class="margin-top40"><ul class="menu widemenu underline size0">'; 
				foreach($links as $link):
					echo "<li><a href='".$link['url']."' target='_blank'>".$link['title']."</a></li>";
				endforeach;
				echo "</ul></div>";
			   endif; ?>
			<span class="close"></span>
			</div>
		</div>
	<? endif; ?>
</div>