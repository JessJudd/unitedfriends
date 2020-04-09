/*========================================================= 
   InstaJS | Instagram feed with templating supprot
   Authoer | AdamA
   Version | v1.0
   License | MIT License
=========================================================*/
;(function($){
	
	"use strict";
	
	$.fn.instaJS = function(settings){
	// default settings
        var settings = $.extend({
            username     : "unitedfriendsla",        // a text string, username of Instagram
            accessToken  : "575338327.653f122.a942a89fdaa94b09ae5bdcc0f2793097",        // a base64 (for security) string, required 
            limit        : 2,           // photos limit, default 4
            photoClass   : 'photo',  // Custom class for photo container, optional
            captionClass : 'caption', // Custom class for photo caption, optional 
            template     : '<div class="c1 emptycol"></div>\
                             <div class="c4 {{photoClass}}">\
                              <a target="_blank" href="{{photo_link}}" title="View on Instagram">\
                               <img class="margin-top60 margin-bot60" src="{{photo_url}}" />\
                              </a>\
                             </div>\
                            <div class="c1 emptycol"></div>'
        }, settings);

        /** FUNCTIONS **/        
        function get_feed() {
           
           var userid=575338327;

                $.ajax({
                    url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent/',
                    type: 'GET',
                    dataType: 'jsonp',
                    data: {
                        access_token : settings.accessToken,
                        count        : settings.limit
                    },
                    success: function(media){

                       console.log(media);


                          $.each(media.data, function(i, media) {

                            var photoWrapper = templating(media);
                            if(i%3==0)
                              $(photoWrapper).appendTo("</div><div class='row'>");  
                            $(photoWrapper).appendTo(instaJSContainer);            

                          });
                          
                    },
                    error: function(e) {
                       console.log('InstaJS | something went wrong; get_feed::error');
                    }
                });                

        };

        function templating(media) {

            var temp = settings.template;

                temp = temp.replace( new RegExp('{{photoClass}}',    'gi'), settings.photoClass)
                           .replace( new RegExp('{{caption_class}}', 'gi'), settings.captionClass)
                           .replace( new RegExp('{{photo_link}}',    'gi'), media.link)
                           .replace( new RegExp('{{photo_url}}',     'gi'), media.images.standard_resolution.url)
                           .replace( new RegExp('{{photo_caption}}', 'gi'), media.caption.text);

            return temp;
        };


        var instaJSContainer = $(this);

        if (typeof settings.username === 'undefined' || settings.username === null) {
            console.log('InstaJS | the username is requireed, please provide it'); 
            return false;
        }
        if (typeof settings.accessToken === 'undefined' || settings.accessToken === null) {
            console.log('InstaJS | an access token is requireed to access the API resource'); 
            return false;
        }
       
        
        get_feed();


	};


})(jQuery);
