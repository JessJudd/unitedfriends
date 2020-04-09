<div id="header-alert" class="bg-blue white text-center size4 bold">
	Join Us for Cultivate LA - December 2, 2017&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.unitedfriends.org/events/cultivate-l-a" class="btn btn-green">Buy Tickets</a>
	<div class="close">x</div>
</div>

<style type="text/css">
#header-alert {
	height: 65px;
	line-height: 62px;
	vertical-align: middle;
	position: fixed;
	top: -65px;
	left: 0;
	width: 100%;
	transition: top .2s;
	z-index: 99999;
}
.header-alert-active #header-alert {
	top: 0;
}
#header-alert .close {
	position: absolute;
	top: 50%;
	font-size: 18px;
	line-height: 18px;
	margin-top: -10px;
	right: 20px;
	font-weight: normal;
	transition: top .2s;
	cursor: pointer;
}
#header,#nav {
	transition: top .2s;	
}
body {
	transition: margin .2s;
}
.header-alert-active #header,.header-alert-active #nav {
	top: 65px;
}
body.header-alert-active {
	margin-top: 65px;
}

@media handheld, only screen and (max-width: 768px) {
	#header-alert {
		font-size: 15px;
	}
}

@media handheld, only screen and (max-width: 480px) {
	#header-alert {
		height: 90px;
		line-height: 30px;
		top: -90px;
	}	
	.header-alert-active #header,.header-alert-active #nav {
		top: 90px;
	}
	.header-alert-active #nav {
		height: calc(100% - 90px);
	}
	body.header-alert-active {
		margin-top: 144px !important;
	}
	#menu-second-menu {
		display: none !important;
	}

}

</style>

<script type="text/javascript">

jQuery(function($){
	$('#header-alert .close').click(function() {
		$('body').removeClass('header-alert-active');
	});
});

</script>