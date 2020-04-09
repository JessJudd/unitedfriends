jQuery.noConflict();
jQuery(function($){

    /* MAILCHIMP SUBSCRIBE */

  function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  jQuery(document).on('submit', '.mc-embedded-subscribe-form' ,function(event){
    event.preventDefault();
    // get this form
    var subscribeForm = jQuery('#'+event.target.id);
    // get list ID
    var listId = subscribeForm.data('list');
    // get email
    var reqEmail = subscribeForm.find('[name="EMAIL"]').val();
    // validate email

    console.log('reqEmail:'+reqEmail);

    if (validateEmail(reqEmail)) {
      // remove error class
      subscribeForm.removeClass('mc-embedded-subscribe-form--error');
      subscribeForm.find('.mc-error').text('');
      // set to processing
      subscribeForm.addClass('mc-embedded-subscribe-form--processing');
      // submit to mailchimp
      jQuery.ajax({
        url: siteUrl + '/mailchimp-api/?email=' + reqEmail + '&list=' + listId,
        success: function(data) {
          // subscribed!
          subscribeForm.removeClass('mc-embedded-subscribe-form--processing');
          subscribeForm.addClass('mc-embedded-subscribe-form--success');
        },
        error: function(data) {
          // error
          subscribeForm.find('.mc-feedback').text('Could not connect to the subscription server. Please try again later.');
          subscribeForm.removeClass('mc-embedded-subscribe-form--processing');
          subscribeForm.addClass('mc-embedded-subscribe-form--error');
        }
      });
    } else {
      // invalid email, show error
      subscribeForm.find('.mc-error').text('Please enter a valid email');
      subscribeForm.addClass('mc-embedded-subscribe-form--error');
    }
  });

  

});