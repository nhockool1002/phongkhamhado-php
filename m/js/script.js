$(document).ready(function() {
	$('.banner').slick({
		centerPadding: '0px',
		prevArrow: '<a class="slick-prev" aria-label="Previous"><i></i></a>',
		nextArrow: '<a class="slick-next" aria-label="Next"><i></i></a>',
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
	});
	$('.bar_menu').click(function() {
		$('.fix_menumobile').addClass('open_mm');
		$('.coverblack_mm').addClass('openblack_mm');
	});
	$('.coverblack_mm, .top_mm > span').click(function() {
		$('.fix_menumobile').removeClass('open_mm');
		$('.coverblack_mm').removeClass('openblack_mm');
	});
});
