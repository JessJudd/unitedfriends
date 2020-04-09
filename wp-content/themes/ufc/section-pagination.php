<?	$prev_posts = get_next_posts_link('Older News');
	$next_posts = get_previous_posts_link('Newer News');



	if($next_posts || $prev_posts):
?>
<div class="row">
		<div class="c6 <? if($next_posts) echo 'bg-grey2'; else echo 'bg-grey'; ?>">
		
			<div class="content-size2-half right margin-top60 margin-bot60">
			<?	if($next_posts)
					echo str_replace('a href','a class="btn btn-green btn-size1" href',$next_posts);	
				else
					echo "<a class='btn btn-grey2 btn-size1'>Newer News</a>";					
			?>
			</div>	

		</div>

		<div class="c6 <? if($prev_posts) echo 'bg-grey2'; else echo 'bg-grey'; ?>">

			<div class="content-size2-half left margin-top60 margin-bot60 text-right">
			<?	if($prev_posts)
					echo str_replace('a href','a class="btn btn-green btn-size1" href',$prev_posts);	
				else
					echo "<a class='btn btn-grey2 btn-size1'>Older News</a>";
			?>
			</div>

		</div>		
	</div>
</div>

<?	endif; ?>