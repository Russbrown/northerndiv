/**
 * MAIN JS FILE
 */
jQuery( document ).ready( function( $ ) {
	$(window).scroll(function() {
		if ($(this).scrollTop()>0)
		 {
		    $('.nav-container').fadeOut();
		 }
		else
		 {
		  $('.nav-container').fadeIn();
		 }
	});
} );