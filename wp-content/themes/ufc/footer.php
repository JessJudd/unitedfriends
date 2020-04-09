			<div class="clear"></div>
		</div><!-- /#page-wrapper -->

		<footer id="footer">
			<div class="grid bg-black white white-links">

				<div class="row js-even-columns">

					<div class="c1 emptycol"></div>
					<div class="c2">
						<? wp_nav_menu(array('theme_location'=>'footer-nav','menu_class'=>'vmenu light size4','container'=>false)); ?>
					</div>
					<div class="c7">
						<div id="footer-buttons-container">
							<?	ufc_buttons(get_field('footer_buttons','options'),"all","",'btn-size0');	?>
						</div>

						<? 
						global $newsletter_signup_type;
						$newsletter_signup_type = 'footer';
						get_template_part('section','newsletter-signup'); 
						?>
						
						<div class="bottomleft--">
							<?	$location_url = 'https://www.google.com/maps/place/'.urlencode(strip_tags(get_field('footer_location','options'))); ?>
							<a class="nounderline" target="_blank" href="<?= $location_url; ?>"><img class="nostretch margin-top90--" src="<? bloginfo('template_url') ?>/images/footer-icon-location-2x.png" height="21" width="14"/></a>
							<div class="size1 margin-bot10"><a target="_blank" class="nounderline" href="<?= $location_url; ?>"><? the_field('footer_location','options'); ?></a></div>
							<div class="size1 margin-bot10"><a target="_blank" class="nounderline" href="<?= $location_url; ?>">&copy;<?= date('Y'); ?> United Friends of the Children</a></div>
							<div class="size0">
								<ul class="menu">
									<li><a href="<? bloginfo('url'); ?>/privacy">Privacy Policy</a></li>
									<li><a href="<? bloginfo('url'); ?>/terms">Terms of Use</a></li>
								</ul>
							</div>
						</div>

					</div>
					<div id="footer-right" class="c2 text-right">
						<a href="#" id="back-to-top" class="right size2 nounderline">Back to Top</a>
						<a href="https://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=6465" target="_blank"><img class="footer-charity-logo" src="http://www.unitedfriends.org/wp-content/uploads/2016/09/charity.jpg"></a>
						<img class="nostretch bottomrightnopadding" id="footer-logo" src="<? bloginfo('template_url') ?>/images/footer-logo-2x.png" height="57" width="304"/>
					</div>



				</div>
			</div>

		</footer>

	</div><!-- /#outer-wrapper -->
	<script>
		siteUrl = '<?php echo site_url();?>';
	</script>

	<?	wp_footer(); ?>

</body>
</html>