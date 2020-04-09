<!-- Begin MailChimp Signup Form -->
<? global $newsletter_signup_type; ?>
<div id="mc_embed_signup-<? echo $newsletter_signup_type != '' ? $newsletter_signup_type : '' ;?>" class="mc_embed_signup clearfix <? echo $newsletter_signup_type != '' ? 'mc_embed_signup--'.$newsletter_signup_type : '' ;?>">
<form action="//unitedfriends.us1.list-manage.com/subscribe/post?u=6f67f929d7f1c76e00bc7372f&amp;id=e7a3358d20" method="post" id="mc-embedded-subscribe-form-<? echo $newsletter_signup_type != '' ? $newsletter_signup_type : '' ;?>" name="mc-embedded-subscribe-form" class="mc-embedded-subscribe-form <? echo $newsletter_signup_type != '' ? 'mc-embedded-subscribe-form--'.$newsletter_signup_type : '' ;?> validate" target="_blank" novalidate data-list="<?php echo get_field('mailchimp_list_id','options');?>">
	<div class="mc-wrapper">
		<div class="mc-fields">
		    <div class="mc-fields-column">
				<div class="mc-field-group">
					<input type="email" value="" placeholder="Email address" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
	  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6f67f929d7f1c76e00bc7372f_e7a3358d20" tabindex="-1" value=""></div>
		    </div>
		    <div class="mc-fields-column">
		    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-green">
		    	<svg class="loader" version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"><animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"></animateTransform></path></svg>
		    </div>	
		    <div style="clear:both;"></div>	
		</div>
		<div id="mce-responses" class="mc-feedback"><?php echo get_field('mailchimp_success_message','options');?></div>  	
		<div class="mc-error"></div>
	</div>
</form>
</div>

<!--End mc_embed_signup-->