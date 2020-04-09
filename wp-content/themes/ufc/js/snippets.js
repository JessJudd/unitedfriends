function numwrap(i,total) {

  if(i<0)
    return (i+total);
    
  return (i%total); 
}


/* AJAX / SHOW MORE */

$('#show-more').click(function(e){
	if(e)
		e.preventDefault();

	var params = $(this).data();
			
	params['action'] = 'showmore';

	params['paged'] = parseInt(params['paged']) + 1;
	$(this).attr('data-paged',params['paged']);

	// button animation during loading
	$('body').addClass('is-loading-more-posts');

	$.ajax({
		url: window.SITE_URL+window.AJAX_PATH,
		type: 'POST',
		data: params,
		success: function(results){
  			$('body').removeClass('is-loading-more-posts');	// end button animation		
  		
  			// ADD ELEMENTS
			var el = jQuery(results).filter('.preview-post');
			var i=0;
			var showMoreTimeout = Array();
			el.each(function(){
				var thisEl = this;
				showMoreTimeout[i] = window.setTimeout(function(){	// timeout is for animation purposes
					$('#content').append(thisEl);
				},120*i);
				i++;					
			});								

			// HIDE BUTTON IF THERE ARE NO MORE POSTS
			if(parseInt($('#show-more').attr('data-paged'))>=parseInt($('#show-more').attr('js-max_num_pages'))) {
				$('#show-more').fadeOut(100);
			}
			
		},
		error: function(){
			console.log('"Show More" ajax error.');
		}
	});
});
