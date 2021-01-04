<div class="c6 bg-white">
	<div class="half-box margin-top90 margin-bot90">
		<div class="size7 margin-bot10">Other Events</div>
		<ul class="vmenu vborder other-events-menu">
		<?	if($other_events = get_posts(array('cat'=>array(4),'post_status'=>'publish','posts_per_page'=>3,'orderby'=>'post_date','order'=>'desc'))) : 
				foreach($other_events as $event) :
					echo "<li>";
					echo "<a href='".get_permalink($event->ID)."'>";

					if($img = _get_pimg('thumbnail',$event->ID)): ?><img src="<? echo $img[0]; ?>" height="80" class="margin-right15 round nostretch"><? endif;


					echo "<div class='info'>";
						echo "<span class='date size5 bold'>".get_field('event_date',$event->ID)."</span>";
						echo '<span class="title">'.$event->post_title."</span>";
					echo "</div></a><div class='clear'></div>"; 
					echo "</li>";
				endforeach;
			endif;	
		?>
		</ul>
	</div>
</div>