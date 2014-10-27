// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
    resizeDiv();
});
window.onresize = function(event) {
    resizeDiv();
};
function resizeDiv() {
    vpw = $(window).width(); // Viewport Width
    vph = $(window).height(); // Viewport Height

    // Your Styles
    $('.hero-section').css({'height': vph / 2 + 'px'})
    $('.full-width').css({'height': vph + 'px'})
    $('#banner-container').css({'height': vph + 'px'})

    $('.your style').css({'height': vph * 2 + 'px'}); // Setting the Height of a class equal to the viewport height divided by 2
}


// Unslider
$(function() {
	$('.banner').unslider({
		speed: 3500,
		fluid: true
	});
});



