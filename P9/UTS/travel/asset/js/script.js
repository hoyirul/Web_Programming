$(function(){
	$(window).scroll(function(){
		// var pos = $(window).scrollTop();
		scrollLize();
	});
	scrollLize();
	function scrollLize(){
		var pos = $(window).scrollTop();
		// $('.logo-gray').hide();
		if(pos > 160){
			$('header').addClass('navbar-style');
			$('.logo-white').hide();
			$('.logo-gray').show();
		}else{
			$('header').removeClass('navbar-style');
			$('.logo-white').show();
			$('.logo-gray').hide();
		}
	}

	slideChange();

	var slide = 1;
	function slideChange(){
		slide++;


		if(slide > $(".slide").length)
			slide = 1;
		$('.slide' + slide).nextAll().removeClass('active');
		$('.slide' + slide).prevAll().removeClass('active');
		$('.slide' + slide).addClass('active');
	}
	setInterval(slideChange, 3000);
})