jQuery.noConflict();
jQuery(function($){

    // INSTAFEED
    var feedLimit = 4; // DO NOT EXCEED 12 - API LIMITED TO 12
    var instagramUsername = 'unitedfriendsla';
    if (jQuery('#instafeed') != undefined) {
        // get profile json using username
        if (typeof instagramUsername != 'undefined') {
            getInstagramJsonProfile(instagramUsername);
        }

    } else {
        console.log('no instafeed detected');
    }

    // INSTAGRAM JSON PROFILE METHOD
    // get json profile via ajax
    function getInstagramJsonProfile(username) {
        console.log('load instagram username JSON');
        jQuery.get('https://www.instagram.com/' + username + '/?__a=1', function (data) {
            console.log('instagram username JSON loaded!');
            setupInstagramJsonData(data);
        }).fail(function () {
            console.log( "instagram username JSON error!" );
        });
    }

    // process json profile data
    var instagramJsondData = [];
    function setupInstagramJsonData(data) {
        console.log(data);
        if (typeof data.graphql != 'undefined') {
            // get timeline items
            var timelineEdgeItems = data.graphql.user.edge_owner_to_timeline_media.edges;
            // loop through timeline items
            for (var x = 0; x < feedLimit; x++) {
                // set up item object with url link, 480x480 image, likes and comments count
                var itemObject = {
                    "link": "https://www.instagram.com/p/" + timelineEdgeItems[x].node.shortcode + "/",
                    "images": {
                        "standard_resolution": {
                            "url": timelineEdgeItems[x].node.thumbnail_resources[3].src
                        }
                    },
                    "likes": {
                        "count": timelineEdgeItems[x].node.edge_liked_by.count
                    },
                    "comments": {
                        "count": timelineEdgeItems[x].node.edge_media_to_comment.count
                    }
                }
                console.log(itemObject);
                // push item object into instagramJsondData
                instagramJsondData.push(itemObject);
            }
            // load feed with instagramJsondData
            loadInstagramFeed(instagramJsondData);
            // console.log('instagramJsondData ready!');
        }
    }    

    function setInstagramFeedItemHeight() {
        console.log('instafeed height set');
        var feed = jQuery('#instafeed');
        var children = feed.children();
        var width = children.width();
        console.log(width);
        children.css( "height", width );
    }

    function loadInstagramFeed(instagramData) {
        console.log('loading InstagramFeed');

        var limit = instagramData.length < feedLimit ? instagramData.length : feedLimit;

        for (var x = 0; x < limit; x++) {
            var thisHtml = '<a href="' + instagramData[x].link + '" target="_blank" class="instagram-feed__item item" style="background-image:url(' + instagramData[x].images.standard_resolution.url + ');">';
            thisHtml += '<span class="instagram-feed__item-content instagram-feed__item-content--hover">';
            thisHtml += '<span class="instagram-feed__item-info">';

            // render likes count if not null
            thisHtml += instagramData[x].likes.count != null ? '<span class="instagram-feed__item-likes"><span class="icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><path style="color:#fff;" d="M499.543,974.794c270.678-194.608,406.095-372.616,469.773-508.396c74.396-158.645,9.682-355.307-152.639-421.299C625.883-32.437,499.543,146.451,499.543,146.451S374.101-32.902,183.323,44.668C21.002,110.66-43.712,307.322,30.683,465.967C94.362,601.729,228.864,780.202,499.543,974.794z"/></svg></span><span class="text">' + instagramData[x].likes.count + '</span></span>' : '';

            // render comments count if not null
            thisHtml += instagramData[x].comments.count != null ? '<span class="instagram-feed__item-comments"><span class="icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><path style="color:#fff;" fill-rule="evenodd" clip-rule="evenodd" d="M1000,973.684l-91.951-321.777c25.186-54.635,39.319-114.848,39.319-178.222c0-247.07-212.068-447.369-473.684-447.369S0,226.614,0,473.685c0,247.069,212.068,447.368,473.684,447.368c63.939,0,124.846-12.129,180.51-33.82L1000,973.684z"/></svg></span><span class="text">' + instagramData[x].comments.count + '</span></span>' : '';

            thisHtml += instagramData[x].likes.count == null && instagramData[x].comments.count == null ? '<span class="instagram-feed__item-link"><span class="icon"><svg class="instagram-feed__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M15 7.3a7.7 7.7 0 1 0 7.7 7.7A7.7 7.7 0 0 0 15 7.3zM15 20a5 5 0 1 1 5-5 5 5 0 0 1-5 5zm8-14.81A1.8 1.8 0 1 0 24.81 7 1.8 1.8 0 0 0 23 5.19zm6.9 3.62a10.76 10.76 0 0 0-.7-3.64 7.23 7.23 0 0 0-1.73-2.65A7.23 7.23 0 0 0 24.83.79a11 11 0 0 0-3.64-.7C19.59 0 19.07 0 15 0s-4.59 0-6.18.09a10.9 10.9 0 0 0-3.64.7 7.18 7.18 0 0 0-2.66 1.73A7.23 7.23 0 0 0 .79 5.17a11 11 0 0 0-.7 3.64C0 10.41 0 10.92 0 15s0 4.58.09 6.18a10.9 10.9 0 0 0 .7 3.64 7.18 7.18 0 0 0 1.73 2.66 7.18 7.18 0 0 0 2.66 1.73 10.9 10.9 0 0 0 3.64.7c1.59.09 2.11.09 6.18.09s4.59 0 6.19-.09a11 11 0 0 0 3.64-.7 7.68 7.68 0 0 0 4.38-4.39 10.66 10.66 0 0 0 .7-3.64c.09-1.6.09-2.11.09-6.18s0-4.59-.09-6.19zm-2.7 12.25a8 8 0 0 1-.52 2.79 4.5 4.5 0 0 1-1.12 1.72 4.62 4.62 0 0 1-1.72 1.12 8.24 8.24 0 0 1-2.79.52c-1.58.07-2 .09-6.06.09s-4.48 0-6.06-.09a8.3 8.3 0 0 1-2.79-.52 4.7 4.7 0 0 1-1.72-1.12 4.62 4.62 0 0 1-1.12-1.72 8.3 8.3 0 0 1-.52-2.79C2.72 19.48 2.71 19 2.71 15s0-4.48.08-6.06a8.3 8.3 0 0 1 .52-2.79 4.5 4.5 0 0 1 1.12-1.72 4.58 4.58 0 0 1 1.72-1.12 8.3 8.3 0 0 1 2.79-.52C10.52 2.72 11 2.7 15 2.7s4.48 0 6.06.09a8.24 8.24 0 0 1 2.79.52 4.5 4.5 0 0 1 1.72 1.12 4.5 4.5 0 0 1 1.12 1.72 8 8 0 0 1 .52 2.79c.07 1.58.09 2.05.09 6.06s-.02 4.48-.09 6.06z" data-name="Layer 2"></path></svg></span><span class="text">View On Instagram</span></span>' : '';

            thisHtml += '</span>';
            thisHtml += '</span>';
            thisHtml += '</a>';
            
            jQuery('#instafeed').append(thisHtml);
        }    

        jQuery('#instaFade').fadeIn('slow');
        setInstagramFeedItemHeight();
    }
        
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    
    $(window).resize(function() {
        if(windowWidth != $(window).width() || windowHeight != $(window).height()) {
            setInstagramFeedItemHeight();
        return;
        }
    });

    
});