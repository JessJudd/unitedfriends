<!-- Begin MailChimp Signup Form -->
<? 
global $newsletter_signup_type;
global $subscription_success_heading;
global $subscription_success_content;
?>
<div id="mc_embed_signup-<? echo $newsletter_signup_type != '' ? $newsletter_signup_type : '' ;?>" class="mc_embed_signup clearfix <? echo $newsletter_signup_type != '' ? 'mc_embed_signup--'.$newsletter_signup_type : '' ;?>">
	<form action="//unitedfriends.us1.list-manage.com/subscribe/post?u=6f67f929d7f1c76e00bc7372f&amp;id=e7a3358d20" method="post" id="mc-embedded-subscribe-form-<? echo $newsletter_signup_type != '' ? $newsletter_signup_type : '' ;?>" name="mc-embedded-subscribe-form" class="mc-embedded-subscribe-form <? echo $newsletter_signup_type != '' ? 'mc-embedded-subscribe-form--'.$newsletter_signup_type : '' ;?> validate" target="_blank" novalidate data-list="<?php echo get_field('mailchimp_list_id','options');?>">

		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6f67f929d7f1c76e00bc7372f_e7a3358d20" tabindex="-1" value=""></div>

		<div class="mc-wrapper">

			<? if( $newsletter_signup_type == 'page' ){ ?>

			<div class="mc-fields">

				<div class="mc-field-group">
					<input type="text" value="" placeholder="First Name" name="FNAME" class="required email" id="mce-FNAME">
					<div class="mc-field-error">First Name is required</div>
				</div>
				<div class="mc-field-group">
					<input type="text" value="" placeholder="Last Name" name="LNAME" class="required email" id="mce-LNAME">
					<div class="mc-field-error">Last Name is required</div>
				</div>
				<div class="mc-field-group">
					<input type="email" value="" placeholder="Email address" name="EMAIL" class="required email" id="mce-EMAIL">
					<div class="mc-field-error">Please enter a valid email</div>
				</div>
				<?php /* ?>
				<div class="mc-field-group">
					<input type="text" value="" placeholder="Phone Number" name="MMERGE10" class="required email" id="mce-MMERGE10">
					<div class="mc-field-error">Phone Number is required</div>
				</div>
				<div class="mc-field-group">
					<input type="text" value="" placeholder="Street Address" name="MMERGE6" class="required email" id="mce-MMERGE6">
					<div class="mc-field-error">Street Address is required</div>
				</div>
				<div class="mc-field-group">
					<input type="text" value="" placeholder="City" name="MMERGE7" class="required email" id="mce-MMERGE7">
					<div class="mc-field-error">City is required</div>
				</div>
				<div class="mc-field-group">
					<select id="selectstate" name="MMERGE8" class="required form-control"><option value="">Select State</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="American Samoa">American Samoa</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virgin Islands">Virgin Islands</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
					<div class="mc-field-error">State is required</div>
				</div>
				<div class="mc-field-group">
					<input type="text" value="" placeholder="Zip Code" name="MMERGE9" class="required email" id="mce-MMERGE9">
					<div class="mc-field-error">Zip Code required</div>
				</div>
				<?php */ ?>
				<div class="mc-field-group">
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6f67f929d7f1c76e00bc7372f_e7a3358d20" tabindex="-1" value=""></div>
			    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-green">
			    	<svg class="loader" version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"><animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"></animateTransform></path></svg>
				</div>
			</div>

			<div id="mce-responses" class="mc-feedback">
				<? echo $subscription_success_heading ? '<div class="mc-feedback-heading">'.$subscription_success_heading.'</div>' : '' ;?>
				<? echo $subscription_success_content ? '<p class="mc-feedback-content">'.$subscription_success_content.'</p>' : '' ;?>
			</div>  

			<? } else { ?>

			<div class="mc-fields">
			    <div class="mc-fields-column">
					<div class="mc-field-group">
						<input type="email" value="" placeholder="Email address" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
			    </div>
			    <div class="mc-fields-column">
			    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-green">
			    	<svg class="loader" version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"><animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"></animateTransform></path></svg>
			    </div>	
			    <div style="clear:both;"></div>	
			</div>

			<div class="mc-error"></div>
			<div id="mce-responses" class="mc-feedback"><div class="mc-feedback-heading"><?php echo get_field('mailchimp_success_message','options');?></div></div>  
			
			<? } ?>

		</div>
	</form>
</div>

<!--End mc_embed_signup-->