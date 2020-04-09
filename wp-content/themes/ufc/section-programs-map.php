<div id="collegesmap">
	<img width="1000" height="641.5" src="<? bloginfo('template_url'); ?>/images/content/programs-map.png"/>
	<div id="collegesmap-tooltip">
		<div class="inner">
			<div class="title"></div>
			<div class="description"></div>
		</div>
	</div>
</div>

<script>
jQuery(function($){

	var locations = [[]];
locations[1] = [449,371,'University of Arizona','Tuscon, AZ'];
locations[2] = [222,490,'Antelope valley college','Lancaster, CA'];
locations[3] = [230,529,'Azusa Pacific University','Azusa, CA'];
locations[4] = [228,537,'Biola University','La Mirada, CA'];
locations[5] = [236,535,'Cal Poly Pomona','Pomona, CA'];
locations[6] = [252,540,'California Baptist University','Riverside, CA'];
locations[7] = [178,514,'California Lutheran University','Thousand Oaks, CA'];
locations[8] = [218,538,'Cerritos College','Norwalk, CA'];
locations[9] = [76,273,'Chabot College','Hayward, CA'];
locations[10] = [235,553,'Concordia University of Irvine','Irvine, CA'];
locations[11] = [183,473,'CSU, Bakersfield','Bakersfield, CA'];
locations[12] = [168,512,'CSU, Channel Islands','Camarillo, CA'];
locations[13] = [108,133,'CSU, Chico','Chico, CA'];
locations[14] = [210,539,'CSU, Dominguez Hills','Dominguez Hills, CA'];
locations[15] = [68,273,'CSU, East Bay','Hayward, CA'];
locations[16] = [224,552,'CSU, Fullerton','Fullerton, CA'];
locations[17] = [208,553,'CSU, Long Beach','Long Beach, CA'];
locations[18] = [224,532,'CSU, Los Angeles','Los Angeles, CA'];
locations[19] = [64,349,'CSU, Monterey Bay','Monterey, CA'];
locations[20] = [190,510,'CSU, Northridge','Northridge, CA'];
locations[21] = [262,536,'CSU, San Bernardino','San Bernardino, CA'];
locations[22] = [256,602,'CSU, San Marcos','San Marcos, CA'];
locations[23] = [220,523,'East Los Angeles College','Monterey Park, CA'];
locations[24] = [199,542,'El Camino College','Torrance, CA'];
locations[25] = [224,545,'Fullerton College','Fullerton, CA'];
locations[26] = [16,72,'Humboldt State University','Arcata, CA'];
locations[27] = [259,542,'La Sierra University','Riverside, CA'];
locations[28] = [201,506,'Los Angeles Mission College','Sylmar, CA'];
locations[29] = [196,527,'Los Angeles Southwest College','Los Angeles, CA'];
locations[30] = [234,542,'Los Angeles Trade Tech College','Los Angeles, CA'];
locations[31] = [198,550,'Marymount California University','Rancho Palos Verdes, CA'];
locations[32] = [60,263,'Meritt College','Oakland, CA'];
locations[33] = [198,513,'Mount St. Mary\'s College','Los Angeles, CA'];
locations[34] = [217,515,'Pasadena City College','Pasadena, CA'];
locations[35] = [179,528,'Pepperdine University','Malibu, CA'];
locations[36] = [191,519,'Pierce College','Woodland Hills, CA'];
locations[37] = [217,531,'Rio Hondo College','Whittier, CA'];
locations[38] = [248,631,'San Diego State University','San Diego, CA'];
locations[39] = [48,254,'San Francisco State University','San Francisco, CA'];
locations[40] = [74,299,'San Jose State University','San Jose, CA'];
locations[41] = [190,530,'Santa Monica College','Santa Monica, CA'];
locations[42] = [61,289,'Stanford University','Stanford, CA'];
locations[43] = [65,254,'UC, Berkeley','Berkeley, CA'];
locations[44] = [99,215,'UC, Davis','Davis, CA'];
locations[45] = [229,559,'UC, Irvine','Irvine, CA'];
locations[46] = [202,523,'UC, Los Angeles','Westwood, CA'];
locations[47] = [150,316,'UC, Merced','Merced, CA'];
locations[48] = [254,547,'UC, Riverside','Riverside, CA'];
locations[49] = [244,621,'UC, San Diego','La Jolla, CA'];
locations[50] = [134,494,'UC, Santa Barbara','Santa Barbara, CA'];
locations[51] = [70,324,'UC, Santa Cruz','Santa Cruz, CA'];
locations[52] = [236,528,'University of La Verne','La Verne, CA'];
locations[53] = [209,527,'University of Southern California','Los Angeles, CA'];
locations[54] = [221,560,'Vanguard University','Costa Mesa, CA'];
locations[55] = [202,532,'West LA College','Culver City, CA'];
locations[56] = [943,191,'Yale University','New Haven, CT'];
locations[57] = [889,463,'Florida International University','Miami, FL'];
locations[58] = [689,220,'Grinnell College','Grinnell, Iowa'];
locations[59] = [659,257,'Benedictine University','Atchison, KS'];
locations[60] = [722,406,'Dillard University','New Orleans, LA'];
locations[61] = [960,169,'Babson College','Babson Park, MA'];
locations[62] = [794,199,'Eastern Michigan University','Ypsilanti, Michigan'];
locations[63] = [684,172,'Carleton College','Northfield, Minnesota'];
locations[64] = [924,205,'Barnard College','New York, NY'];
locations[65] = [932,205,'St Johns University','Jamaica, NY'];
locations[66] = [903,177,'Syracuse University','Syracuse, NY'];
locations[67] = [816,214,'Oberlin College','Oberlin, OH'];
locations[68] = [632,316,'Langston University','Langston, OK'];
locations[69] = [325,145,'Portland Community College','Portland, OR'];
locations[70] = [887,221,'Dickinson College','Carlisle, Pennsylvania'];
locations[71] = [548,172,'Black Hills State University','Spearfish, South Dakota'];
locations[72] = [667,366,'Wiley College','Marshall, TX'];
locations[73] = [912,275,'Hampton University','Hampton, VA'];

	for(var i=1; i<locations.length; i++) {
		$('#collegesmap').append('<div class="location" style="left:'+locations[i][0]+'px;top:'+locations[i][1]+'px;" data-left="'+locations[i][0]+'" data-top="'+locations[i][1]+'" data-description="'+locations[i][3]+'" data-title="'+locations[i][2]+'"></div>')
	}


	$('#collegesmap .location').hover(function(){
		$('#collegesmap').addClass('tooltip-visible');
		$('#collegesmap-tooltip').css('top',$(this).css('top'));
		$('#collegesmap-tooltip').css('left',$(this).css('left'));
		$('#collegesmap-tooltip .title').html($(this).data('title'));
		$('#collegesmap-tooltip .description').html($(this).data('description'));
	},function(){
		$('#collegesmap').removeClass('tooltip-visible');		
	});

	$('#collegesmap .location').click(function(){
		$(this).trigger('mouseenter');
	});

	$(window).resize(function() {
		var ratio = $('#collegesmap img').width()/$('#collegesmap img').attr('width');

		$('#collegesmap .location').each(function(){

			$(this)	.css('left',$(this).data('left')*ratio)
					.css('top',$(this).data('top')*ratio);
		});

	});

	$(window).resize();

});

</script>

<style>

	@media handheld, only screen and (max-width: 768px), only screen and (max-device-width: 768px) and (orientation:portrait), only print {
		#collegesmap .location {
			width: 6px;
			height: 6px;
			margin: -3px 0 0 -3px;
		}

	}

</style>