jQuery.noConflict();
jQuery(function ($) {

  // ---- INIT

  init();
  function init() {

    $('.js-even-columns').each(function () { even_columns($(this)); });

    prepare_images();

    resize_timeline_line();
    $('body img').load(resize_timeline_line);

  }

  // ---- VERY GENERAL EVENT HANDLERS

  // RESIZE
  $(window).resize(debouncer(function (e) {

    $('.js-even-columns').each(function () { even_columns($(this)); });

    prepare_images();

    $('.cycle-slideshow').trigger('cycle-initialized');

    resize_timeline_line();

    //    $('#home-headline-row > .row, #home-headline-row > .row > div').css('height',($(window).width()*.55)+'px !important');

  }));



  // ---- 

  // RESPONSIVE HEADLINES

  $('.responsive-headline').fitText(.3, { minFontSize: '20px', maxFontSize: '140px' });

  // CONTENT IMAGES

  function prepare_images() {
    // sizes lazy images based on proportions, moves .post images to left outside of content, 

    if ($('.content').length == 0 /*|| $('.content').width()<$('.content').css('max-width').replace('px','')*/) { // if content < available width, no need to extend
      $('.content .extended').removeClass('extended').css('margin-left', 0).width('auto').height('auto');  //reset
      return;
    }

    $('.content img, .content .wp-caption, .content .video-preview, .content blockquote, .slideshow-container').each(function () {
      if ($(this).width() < $('.content').last().width() || $(this).parent().is('.wp-caption,.video-preview,.cycle-slide')) {
        if ($(this).hasClass('extended'))
          $(this).removeClass('extended').css('margin-left', 0).width('auto').height('auto');  //reset
        return;
      }

      $(this).addClass('extended');

      var w = 820;
      var grid_w = $('.grid').last().width();
      if (grid_w < w)
        w = grid_w;

      $(this).width(w);  // set the height based on the calculated width
      var margin = -(w - $('.content').width()) / 2;
      if (margin > 0) {
        margin = 0;
      }
      $(this).css('margin-left', margin + 'px');

      // if image, do height
      if ($(this).is('img')) {
        var orig_hw_ratio = $(this).attr('height') / $(this).attr('width');
        var h = Math.round(w * orig_hw_ratio) + 'px';
        $(this).height(h);
      }

    });
  }

  // SLIDESHOWS

  function prepare_slideshows() {
    // SETS SLIDESHOW HEIGHT to height of largest image
    var h = 0;
    $(this).find('img').each(function () {
      if ($(this).height() > h)
        h = $(this).height();
    });
    $(this).height(h);
    $(this).find('.slide').height(h);
  }

  $('.cycle-slideshow').on('cycle-initialized', prepare_slideshows);

  // TIMELINE LINE

  function resize_timeline_line() {
    if ($('#timeline-line').length == 0)
      return;
    var h = $('#main').height() - $('.headline-row').first().height();
    $('#timeline-line').height(h - 200);
  }

  // INSTAGRAMS (youth access)

  if ($('#instagrams').length > 0)
    $('#instagrams').instaJS();


  // HEADER WAYPOINT

  var header = new Waypoint({
    element: $("body"),
    handler: function (direction) {
      if (direction == 'down') {
        $('#header').css('background-color', $('.page-nav').css('background-color'));
        $('body').addClass('scrolled-down');
        $('.page-nav').appendTo($('#header .grid .row'));
        if ($('.page-nav').length)
          $('body').addClass('fixed-page-nav');
      } else {
        $('body').removeClass('scrolled-down');
        $('#header').css('background-color', 'transparent');
        $('#main').before($('#header .page-nav'));
        if ($('.page-nav').length)
          $('body').removeClass('fixed-page-nav');
      }
    },
    offset: '-80px'
  })

  // PAGE NAV / SECTION ANCHORS AND WAYPOINTS

  var sectionanchors = Array();
  $('.sectionanchor').each(function () {
    var $anchor = $(this);
    sectionanchors.push(new Waypoint({
      element: $anchor,
      handler: function (direction) {
        var index = $('.sectionanchor').index($anchor);
        if (direction == 'up' && index != 0)
          index--;
        $('.page-nav ul li .btn').removeClass('selected');
        $('.page-nav ul li:eq(' + index + ') .btn').addClass('selected');
      },
      offset: '30%'
    }));
  });

  // zoom to page section anchor on page-nav link click

  $('.page-nav ul li a').click(function (e) {
    e.preventDefault();
    var index = $('.page-nav ul li').index($(this).parent());
    var $anchor = $('.sectionanchor:eq(' + index + ')');
    $('html,body').animate({ scrollTop: $anchor.offset().top - 150 }, 250);
  });


  // MAIN MENU reveal

  $('#nav a:not(#menu-button),#nav input').click(function (e) {
    e.stopPropagation();  //allows links in nav to be clicked without closing/opening nav
  });

  $('#nav,#mobile-menu-button').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    if ($('body.menu-visible').length) {

      var navl = 500;
      var winw = $(window).width();
      if (winw < 500 && winw > 320)
        navl = winw;
      else if (winw <= 320)
        navl = 320;


      $('#nav').animate({ left: "-" + navl + "px" }, 0, 'swing', function () {
        setTimeout(function () {
          $('body').removeClass('menu-visible');
        }, 340);
      });
    } else {


      $('body').addClass('menu-visible');
      $('#nav').animate({ left: "0px" }, 0, 'swing', function () {
      });
    }
  });

  $('body').click(function () {
    if ($('.menu-visible').length)
      $('#nav').click();  // if clicking outside of nav when it is open, close nav
  });

  // EVENT 

  $('.js-show-event-form').click(function (e) {
    e.preventDefault();
    $('body').addClass('event-form-visible');
    $('#event-form').slideDown(1000);
    $('html,body').animate({ scrollTop: $('#event-form').offset().top }, 'fast');
  });


  // TEAM BIO EXPAND

  $('.js-bio-expand').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var $me = $(this).closest('.js-bio');
    $('.js-bio').removeClass('.selected');
    $me.addClass('selected');

    $('#team-bio').html($me.find('.bio').html());
    $('#team-bio a').click(function (e) { e.stopPropagation(); });  // prevents links closing bio

    var $row = $me.closest('.js-bio-row');

    $('#team-bio').css('height', $row.height());

    // TOP POS depends on top of row below (or above if last row)
    if (($row.next('.js-bio-row').length == 0 || $row.next('.js-bio-row').find('.js-bio').length == 0) && $row.prev('.js-bio-row').length != 0) {
      $('#team-bio').css('top', $row.offset().top - $row.height());
      $('#team-bio .content').css('top', 'auto').css('bottom', '20px');
    } else {
      $('#team-bio').css('top', $row.offset().top + $row.height());
      $('#team-bio .content').css('bottom', 'auto').css('top', '0');
    }
    // LEFT POS depends on window width and position of clicked person
    var left = $me.offset().left + ($me.width() / 2) - ($('#team-bio .content').width() / 2) - 40;
    if (left < 80)
      left = 80
    if ($(window).width() < (left + 500))
      left = $(window).width() - 500 - 40;
    $('#team-bio .content').css('left', left);

    // text align based on order (1,2,3)
    var index = $($me).parent().find('.js-bio').index($me);
    if ($(window).width() < 960 && index == 0) {
      $('#team-bio .content').css('text-align', 'left');
    } else if ($(window).width() < 960 && index == 2) {
      $('#team-bio .content').css('text-align', 'right');
    } else {
      $('#team-bio .content').css('text-align', 'center');
    }

    // active
    $('body').addClass('bio-active');
  });

  $('#team-bio,.page-template-p-team-php .js-tabs, .page-template-p-team-php .js-tabs-buttons').click(function (e) {
    e.stopPropagation();
    if (!$('body').hasClass('bio-active')) {
      return;
    }
    $('body').removeClass('bio-active');
    $('.js-bio').removeClass('selected');
  });


  // TABS

  $('.js-tabs-buttons li a').click(function (e) {
    e.preventDefault();

    var $buttons = $(this).closest('ul').find('li');
    var $button_selected = $(this).closest('li');
    var $tabs = $(this).closest('ul').next($('ul.js-tabs')).children('li');
    var i = $buttons.index($button_selected);

    if ($buttons.hasClass('selected')) { // check if not initial iteration

      $('html,body').animate({ scrollTop: ($(this).closest('.js-tabs-buttons').offset().top - 30) }, 'fast');
    }

    $buttons.removeClass('selected');
    $button_selected.addClass('selected');
    $tabs.removeClass('selected');
    $tabs.eq(i).addClass('selected');

    prepare_images();

  });

  $('.js-tabs-buttons li').first().find('a').click();

  $('.drop-down-buttons').click(function (e) {
    e.stopPropagation();
    $(this).toggleClass('active');
  });

  // FOOTER

  $('#back-to-top').click(function (e) {
    e.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 'fast');
  });

  // VIDEO PREVIEW HACK
  // adds overlay (play button) and iframe insert click event 
  $('.content .video-preview img').load(function () {
    var $vid = $(this).parent();
    $vid.height($('.content .video-preview img').height());
    $vid.append('<div class="overlay"></div>');
    $vid.click(function (e) {
      e.preventDefault();
      $(this).find('img,.overlay').hide();
      $(this).append('<iframe frameborder=0 width="100%" height="100%" src="' + $(this).attr('href') + '"></iframe>')
    });
  });


  // EVEN COLUMNS
  // after images load in each js-even columns...
  setTimeout(function () {
    $('.js-even-columns, .js-load-images-first').each(function () {
      var imgs = $(this).find("img").not(function () { return this.complete; });  // don't add them if they're cached
      var loadcount = imgs.length;  // have to count them then -- as each one loades
      if (loadcount) {
        imgs.load(function () {
          loadcount--;
          if (!loadcount) {
            var row = $(this).closest('.js-even-columns, .js-load-images-first');
            even_columns(row);
            $(row).addClass('loaded');
          }
        });
      } else {
        var row = $(this);
        even_columns(row);
        $(row).addClass('loaded');
      }
    });
  }, 1800);

  setTimeout(function () {
    $('body').addClass('delay');
  }, 1);

  function even_columns(row) {
    // MAKE ALL COLUMNS IN ROW SAME (MAX) HEIGHT

    if (!$(row).hasClass('js-even-columns'))
      return;

    var windowWidth = $(window).width();
    var maxHeight = 0;
    var cols = $(row).children();

    jQuery(cols).css('height', '');
    jQuery(cols).each(function () {
      var thisHeight = $(this).innerHeight();
      if (thisHeight > maxHeight && thisHeight > 1)
        maxHeight = thisHeight;
    });

    if (maxHeight < 30)
      return;


    if (windowWidth <= 768) { // override element heights if tablet/handheld layout
      jQuery(cols).css('height', 'auto');
      jQuery(row).css('height', 'auto');
    } else {
      jQuery(cols).css('height', maxHeight + 'px');
      jQuery(row).css('height', maxHeight + 'px');
    }
  }


  // DEBOUNCER - used to calm down resize() triggers

  function debouncer(func, timeout) {
    var timeoutID, timeout = timeout || 200;
    return function () {
      var scope = this, args = arguments;
      window.clearTimeout(timeoutID);
      timeoutID = setTimeout(function () {
        func.apply(scope, Array.prototype.slice.call(args));
      }, timeout);
    }
  }



  // GTAG EVENTS - donation event

  // if on the donation template
  if (jQuery('.page-template-p-donate').length > 0) {
    console.log('Donation page');
    // variables
    var donateFormId;
    var donateAmount = 0;
    // when gravity form is rendered, get ID
    jQuery(document).on('gform_post_render', function (event, form_id, current_page) {
      // get ID
      donateFormId = form_id;
      var donateForm = jQuery('#gform_' + donateFormId);
      // set amount on form submit
      donateForm.submit(function (event) {
        // get radio input
        var donateRadioValue = donateForm.find('input[name="input_1"]:checked').val();
        // get text input
        var donateOtherValue = donateForm.find('input[name="input_2"]').val();
        donateAmount = donateOtherValue != '' ? donateOtherValue : donateRadioValue;
        console.log('donateAmount:' + donateAmount);
      });
    });
    // when gravity form loads confirmation/success
    jQuery(document).on('gform_confirmation_loaded', function (event, formId) {
      if (formId == donateFormId) {
        gtag('event', 'conversion', {
          'send_to': 'AW-656450745/Aa_MCJ3V_MwBELnJgrkC',
          'value': donateAmount,
          'currency': 'USD',
          'transaction_id': ''
        });
        gtag('event', 'donation', {
          'event_category': 'Donation',
          'event_label': 'amount: ' + donateAmount
        });
        console.log('Donation gtag sent. Amount:' + donateAmount);
      }
    });
  }


});