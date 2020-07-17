(function ($) {
"use strict";
    /*------------- preloader js --------------*/
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('.preloader-wrap').fadeOut();
    })
	
	// slicknav
	$('ul#navigation').slicknav({
		prependTo:".responsive-menu-wrap"
	});
	
	// smttoh-scroll
    $.scrollSpeed(150, 650);
	
	/*--
		Scroll Up
	------------------------*/
	$.scrollUp({
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade',
		scrollText: '<i class="fa fa-chevron-up"></i>',
	});

})(jQuery);	
