(function ($) {
"use strict";


// Script for OffCanvas Menu Activation
$('.bar').on('click', function () {
	$('.offcanvas-wrapper, .offcanvas-overlay').addClass('active');
})

$('.cross, .offcanvas-overlay').on('click', function () {
	$('.offcanvas-wrapper, .offcanvas-overlay').removeClass('active');
})





})(jQuery);