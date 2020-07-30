jQuery.noConflict();
jQuery(function ($) {

  console.log('MC READY');

  /* MAILCHIMP SUBSCRIBE */

  function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  jQuery(document).on('submit', '.mc-embedded-subscribe-form', function (event) {
    event.preventDefault();
    // get this form
    var subscribeForm = jQuery('#' + event.target.id);
    // get list ID
    var listId = subscribeForm.data('list');
    // get email
    var reqEmail = subscribeForm.find('[name="EMAIL"]').val();
    // validate email

    console.log('reqEmail:' + reqEmail);





    // validate fields
    var formErrors = 0;

    subscribeForm.find('.required').each(function () {
      var requiredItem = jQuery(this);
      if (requiredItem.attr('type') == 'email') {
        if (!validateEmail(requiredItem.val())) {
          formErrors++;
          console.log('invalid item: ' + requiredItem.attr('name'));
          requiredItem.closest('.mc-field-group').addClass('mc-field-group--error');
        } else {
          requiredItem.closest('.mc-field-group').removeClass('mc-field-group--error');
        }
      } else {
        if (requiredItem.val() == '') {
          formErrors++;
          console.log('invalid item: ' + requiredItem.attr('name'));
          requiredItem.closest('.mc-field-group').addClass('mc-field-group--error');
        } else {
          requiredItem.closest('.mc-field-group').removeClass('mc-field-group--error');
        }
      }
    });

    // add url parameters if available
    var urlParameters = [];
    var fnameField = subscribeForm.find('[name="FNAME"]');
    if (fnameField.length > 0 && fnameField.val() !== '') {
      urlParameters.push('firstname=' + fnameField.val());
    }
    var lnameField = subscribeForm.find('[name="LNAME"]');
    if (lnameField.length > 0 && lnameField.val() !== '') {
      urlParameters.push('lastname=' + lnameField.val());
    }
    var addressField = subscribeForm.find('[name="MMERGE6"]');
    if (addressField.length > 0 && addressField.val() !== '') {
      urlParameters.push('address=' + addressField.val());
    }
    var cityField = subscribeForm.find('[name="MMERGE7"]');
    if (cityField.length > 0 && cityField.val() !== '') {
      urlParameters.push('city=' + cityField.val());
    }
    var stateField = subscribeForm.find('[name="MMERGE8"]');
    if (stateField.length > 0 && stateField.val() !== '') {
      urlParameters.push('state=' + stateField.val());
    }
    var zipField = subscribeForm.find('[name="MMERGE9"]');
    if (zipField.length > 0 && zipField.val() !== '') {
      urlParameters.push('zip=' + zipField.val());
    }
    var phoneField = subscribeForm.find('[name="MMERGE10"]');
    if (phoneField.length > 0 && phoneField.val() !== '') {
      urlParameters.push('phone=' + phoneField.val());
    }

    if (formErrors == 0) {
      // remove error class
      subscribeForm.removeClass('mc-embedded-subscribe-form--error');
      subscribeForm.find('.mc-error').text('');
      // set to processing
      subscribeForm.addClass('mc-embedded-subscribe-form--processing');
      // submit to mailchimp
      jQuery.ajax({
        url: siteUrl + '/mailchimp-api/?email=' + reqEmail + '&list=' + listId + (urlParameters.length > 0 ? '&' + urlParameters.join('&') : ''),
        success: function (data) {
          // subscribed!
          subscribeForm.removeClass('mc-embedded-subscribe-form--processing');
          subscribeForm.addClass('mc-embedded-subscribe-form--success');
          gtag('event', 'conversion', {
            'send_to': 'AW-656450745/ok9XCLe2m80BELnJgrkC'
          });
          gtag('event', 'sign_up', {
            'event_category': 'MailChimp Subscription',
            'event_label': 'email: ' + reqEmail
          });
        },
        error: function (data) {
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