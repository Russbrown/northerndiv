/**
 * MAIN JS FILE
 */
jQuery( document ).ready( function( $ ) {
	$(window).scroll(function() {
		if ($(this).scrollTop()>0)
		 {
		    $('.logo').fadeOut();
		    $('nav').fadeOut();
		    console.log('hello');
		 }
		else
		 {
		  $('.logo').fadeIn();
		  $('nav').fadeIn();
		 }
	});
} );