<?	/*
		Template Name: Youth Access

	 */

	get_header();	

	the_post();	

	?>

<div class="bg-orange page-nav">
	<div class="grid">
		<div class="row text-center">
			<ul class="menu">
				<li><a class="btn btn-clear" href="#">Programs</a></li>
				<li><a class="btn btn-clear" href="#">Applications</a></li>
				<li><a class="btn btn-clear" href="#">Resources</a></li>
				<li><a class="btn btn-clear" href="#">Contact</a></li>
				<li><a class="btn btn-clear" href="#">Events</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="main" class="grid">
	<div class="bg-purple">
		<div class="row widerow bg-cover white text-center" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-top.jpg)">
			<div class="c2 emptycol"></div>
			<div class="c8" style="height:490px;">

				<div class="valign-middle" style="height: 420px;">
				  <div>
					<h2 class="size15 italic light margin-top40 margin-bot90"><? the_title(); ?></h2>
				  </div>
				</div>

			</div>
			<div class="c2 emptycol"></div>		
		</div>
		<div id="ya-skew1" class="skew"></div>
		

		<!-- /////////////// Programs /////////////// -->
		<a class="sectionanchor"></a>

		<div class="row white">
			<div class="c12">
				<div class="content text-center">			

					<h3 class="size12 margin-bot20"><? the_field('content_1_headline'); ?></h3>

					<div class="size6 light"><? the_field('content_1_blurb'); ?></div>

					<ul class="js-tabs-buttons menu-shapes menu semibold caps size2 margin-top60 margin-bot60">
						<? if(get_field('programs_1_hide')!=1): ?><li><div class="valign-middle text-center"><div><a href="#"><? the_field('programs_1_title'); ?></a></div></div></li><? endif; ?>
						<? if(get_field('programs_2_hide')!=1): ?><li><div class="valign-middle text-center"><div><a href="#"><? the_field('programs_2_title'); ?></a></div></div></li><? endif; ?>
						<? if(get_field('programs_3_hide')!=1): ?><li><div class="valign-middle text-center"><div><a href="#"><? the_field('programs_3_title'); ?></a></div></div></li><? endif; ?>					
					</ul>

					<ul class="js-tabs text-left margin-bot120">
						<!-- TAB A -->
						<? if(get_field('programs_1_hide')!=1): ?>
						<li>
							<div class="regular size7 margin-bot30"><? the_field('programs_1_title'); ?></div>
							<div><? the_field('programs_1_intro'); ?></div>
							<ol class="big-number margin-top30">
								<li class="clearfix">
									<div class="half left">
										<div class="green size7 regular margin-bot20"><? the_field('programs_1_1_title'); ?></div>
										<div><? the_field('programs_1_1_body'); ?></div>
									</div>
									<?	if($img = get_field('programs_1_1_video_thumb')): ?>
									<div class="half right">
										<? if($video_url = get_field('programs_1_1_video_url')): ?><a class="video-preview" href="<? the_field('programs_1_1_video_url'); ?>"><? endif; ?>
											<img src="<? echo $img['sizes']['medium'] ?>"/>
										<? if($video_url): ?></a><? endif;?>
										<div class="wp-caption-text"><? the_field('programs_1_1_video_caption'); ?></div>
									</div>
									<?	endif; ?>
								</li>
								<li>
									<div class="regular size7 green margin-bot20"><? the_field('programs_1_2_title'); ?></div>

									<div class="margin-bot20">
										<? the_field('programs_1_2_body'); ?>
									</div>

									<? ufc_buttons(get_field('programs_1_2_buttons')); ?>
								</li>
								<li>
									<div class="regular size7 green margin-bot20"><? the_field('programs_1_3_title'); ?></div>

									<div class="margin-bot20">
										<? the_field('programs_1_3_body'); ?>
									</div>

									<ul class="menu vmenu margin-bot20">								
										<?	if($phone_numbers = get_field('programs_1_3_phone_numbers')) :
												foreach($phone_numbers as $num):	?>
													<li><span class="bold green"><?= $num['title']; ?>:</span> <?= $num['phone_number']; ?></li>
										<?		endforeach;
											endif;
										?>	
									</ul>

									<? ufc_buttons(get_field('programs_1_3_buttons')); ?>
								</li>		
								<li>
									<div class="regular size7 green margin-bot20"><? the_field('programs_1_4_title'); ?></div>

									<div class="margin-bot20">
										<? the_field('programs_1_4_body'); ?>
									</div>

									<? ufc_buttons(get_field('programs_1_4_buttons')); ?>
								</li>												
							</ol>
						</li>
						<? endif; ?>

						<!-- TAB B -->
						<? if(get_field('programs_2_hide')!=1): ?>						
						<li>
							<div class="regular size7 margin-bot30"><? the_field('programs_2_title'); ?></div>
							<div><? the_field('programs_2_intro'); ?></div>
							<ol class="big-number margin-top30">
								<li>
									<div class="green size7 regular margin-bot20"><? the_field('programs_2_1_title'); ?></div>
									<div><? the_field('programs_2_1_body'); ?></div>															
								</li>						
								<li>
									<div class="green size7 regular margin-bot20"><? the_field('programs_2_2_title'); ?></div>
									<div class="margin-bot30"><? the_field('programs_2_2_body'); ?></div>		
									<? ufc_buttons(get_field('programs_2_2_buttons')); ?>																					
								</li>	
							</ol>

							<blockquote>
								<? the_field('programs_2_quote'); ?>
							</blockquote>
							<div class="wp-caption-text">
								<? the_field('programs_2_quote_author'); ?>
							</div>
						</li>
						<? endif; ?>

						<!-- TAB C -->
						<? if(get_field('programs_3_hide')!=1): ?>						
						<li>
							<div class="regular size7 margin-bot30"><? the_field('programs_3_title'); ?></div>
							<div><? the_field('programs_3_intro'); ?></div>
							<ol class="big-number margin-top30">
								<li>
									<div class="green size7 regular margin-bot20"><? the_field('programs_3_1_title'); ?></div>
									<div><? the_field('programs_3_1_body'); ?></div>															
								</li>	
								<li>
									<div class="green size7 regular margin-bot20"><? the_field('programs_3_2_title'); ?></div>
									<div class="margin-bot20"><? the_field('programs_3_2_body'); ?></div>
									<? ufc_buttons(get_field('programs_3_2_buttons')); ?>																					
								</li>													
							</ol>

							<blockquote style="font-size:33px;">
								<? the_field('programs_3_quote'); ?>
							</blockquote>
							<div class="wp-caption-text">
								<? the_field('programs_3_quote_author'); ?>
							</div>

						</li>	
						<? endif; ?>				

					</ul>				
				</div>
			</div>
		</div>
	</div><!-- /.bg-purple -->

	<!-- /////////////// Applications /////////////// -->
	<a class="sectionanchor"></a>

	<div class="bg-purple">
		<div class="row  bg-cover bg-purple white" style="background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-applications.jpg)">
			
			<div id="ya-skew2" class="skew"></div>

			<div class="c1 emptycol"></div>
			<div class="c10" style="height: 577px;">

				<div class="valign-middle text-center" style="height:600px">
				  <div>
					
					<h3 class="size14 italic margin-bot10"><? the_field('content_2_headline'); ?></h3>
					
					<div class="size6 light margin-bot20 half centered"><? the_field('content_2_blurb'); ?></div>

					<? ufc_buttons(get_field('content_2_buttons'),'orange'); ?>

				  </div>
				</div>

			</div>
			<div class="c1 emptycol"></div>

		</div>
	</div>
		


	<!-- /////////////// Resources /////////////// -->
	<a class="sectionanchor"></a>

	<div class="bg-purple">
		<div class="row  bg-orange bg-cover purple">
			<div id="ya-skew3" class="skew"></div>

			<div class="c1 emptycol"></div>
			<div class="c10" style="height:361px">

				<div class="valign-middle text-center" style="height:410px">
				  <div>
					
					<h3 class="size14 italic margin-bot10"><? the_field('content_3_headline'); ?></h3>
					
					<div class="size6 light half centered margin-bot20"><? the_field('content_3_blurb'); ?></div>

					<? ufc_buttons(get_field('content_3_buttons'),'purple'); ?>

				  </div>
				</div>

			</div>
			<div class="c1 emptycol"></div>
		</div>
	</div>

	<!-- /////////////// Contact /////////////// -->
	<a class="sectionanchor"></a>

	<div class="bg-purple">
		<div class="row  white bg-cover" style="background-position:center top !important;height:690px;background-image:url(<? bloginfo('template_url'); ?>/images/content/youth-bg-contact.jpg)">

			<div id="ya-skew4" class="skew"></div>

			<div class="c3 emptycol"></div>
			<div class="c6 text-center">

					
					<h3 class="margin-top200 size14 margin-bot10 italic"><? the_field('content_4_headline'); ?></h3>
					
					<div class="size6 light"><? the_field('content_4_blurb'); ?></div>

			</div>
			<div class="c3 emptycol"></div>
		</div>
	</div>


	<div class="bg-purple">
		<div class="row  bg-white">

			<div id="ya-skew5" class="skew"></div>

			<div class="c2 emptycol"></div>
			<div class="c8 text-center">


					<div class="fourths text-center" style="margin-top:-92px">
						<?	if($contacts = get_field('content_4_contacts')):
								$i=1;
								foreach($contacts as $contact):	?>
									<div class="col">
										<div class="circle-icon bg-purple margin-bot10"><img src="<? bloginfo('template_url') ?>/images/content/youth-contact-icon-<?= $i++; ?>.png" class="nostretch"/></div>
										<div class="purple size4 bold margin-bot10"><?= $contact['title']; ?></div>
										<div class="grey size2  underline"><?= hide_email($contact['email']); ?></div>
									</div>
						<?		endforeach;
							endif;	?>
					</div>

					<div class="content text-center margin-top60 margin-bot90 purple">

						<div class="size7 regular margin-bot10"><? the_field('content_4_headline_2'); ?></div>
						<div><? the_field('content_4_blurb_2'); ?></div>

					</div>

			</div>
			<div class="c2 emptycol"></div>

		</div>
	</div>

	<!-- /////////////// Events /////////////// -->
	<a class="sectionanchor"></a>
	<div class="half-bg half-bg-purple-grey">
		<div class="row js-even-columns">
			<div class="c6 bg-purple white">
				<div class="half-box margin-top90 margin-bot90">
					<?  $events_page = get_page_by_path('events',OBJECT,'page');	
						$featured_events = get_field('featured_events',$events_page->ID); 
						if($featured_events) :
							foreach($featured_events as $featured_event):		
								if(get_field('youth_event',$featured_event)===TRUE) :	?>
									<div class="topleft size5 bold" style="margin-top: 50px;"><? $date = get_field('event_date',$featured_event->ID); if(!empty($date))  echo date('n/j',strtotime($date));  ?></div>
									<div class="size5 margin-bot10 bold">Featured Event</div>
									<div class="size7 margin-bot20"><?= $featured_event->post_title; ?></div>
									<div class="size5 margin-bot30 ">
										<?= ufc_excerpt($featured_event->ID,24); ?>
									</div>
									<a href="<? the_permalink($featured_event->ID); ?>" class="btn btn-green">Details</a>
					<?				break;
								endif;
							endforeach;
						endif;   ?>
				</div>
			</div>
			<div class="c6 bg-grey">
				<div class="half-box margin-top90 margin-bot90">
					<div class="size7 purple margin-bot10">Upcoming Events</div>
					<ul class="vmenu vborder other-events-menu">
					<?	if($events = get_posts(array('post_type'=>'events','meta_key'=>'youth_event','meta_value'=>true,'posts_per_page'=>15,'orderby'=>'post_date','order'=>'asc'))) : 
							$i=0;
							foreach($events as $event) :
								$date_str = get_field('event_date',$event->ID);
								$timestamp = strtotime($date_str);
								if($timestamp>time()) {
									echo "<li><a href='".get_permalink($event->ID)."'><span class='date'>".date('n/j',$timestamp)."</span>".$event->post_title."</a></li>";
									$i++;
								}
								if($i>=3)
									break;
							endforeach;
						endif;	
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?
	// TWEETS!
	include 'inc/tweetphp/TweetPHP.php';

	$TweetPHP = new TweetPHP(array(
	  'consumer_key'              => 'l3T11XJFjbnykEkXn8oczQDfw',
	  'consumer_secret'           => 'CwmPK8Akzo8DWoFRwgI5tBo16JSj8Kv90rTU8LDTY26IO7mbP1',
	  'access_token'              => '7854162-lV14aFLzEyL6Zi0hD7Dhoi5IfZ4r3tlizZxQ0ZWUO3',
	  'access_token_secret'       => 'jn9FdjEMri06UfEUAvfe3rh2LULMZm3aTvrOvkyJriqac',
	  'twitter_screen_name'       => 'unitedfriends',
	  'tweets_to_retrieve'		  => 8
	));

	$tweet_array = $TweetPHP->get_tweet_array();
	$i=0;
	$count = 4;
	if($tweet_array) :
	?>
	<div class="bg-light-blue">
		<div class="row tweets purple">
			<div class="side-text"><span>twitter</span></div>
			<div class="c6">
				<?	foreach($tweet_array as $tw):	?>
				<div class="tweet <? if(strlen($tw['text'])<50) echo "big"; else if(strlen($tw['text'])>140) echo 'tiny'; ?>">
					<div class="text"><?= linkify_twitter_status($tw['text']); ?></div>
					<div class="size0"><?= date('n/j/y-h:iA',strtotime($tw['created_at'])) ?></div>
				</div>
				<? 		if(($i+1)*2==$count)
							echo '</div><div class="c6">';
						$i++;
						if($i>3)
							break;
					endforeach; ?>
			</div>
		</div>
	</div>
	<? endif; ?>

	<?

	// INSTAGRAMS!

    ?>	


	<div class="bg-purple">
		<div class="row light-blue " id="instagrams">
			<div class="side-text"><span>instagram</span></div>			


		</div>
	</div>

</div>

<?	get_footer();	?>