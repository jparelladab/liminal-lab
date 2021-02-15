jQuery(document).ready(function($){

var $mq1 = $('.marquee1').marquee({
    //duration in milliseconds of the marquee
    duration: 10000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    startVisible: true
});

var $mq1 = $('.marquee2').marquee({
    //duration in milliseconds of the marquee
    duration: 10000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    startVisible: true
});

	$('.servicios-slider').slick({
		autoplay: true,
  		autoplaySpeed: 5000,
  		infinite: true,
  		prevArrow: $('.prev-arr'),
  		nextArrow: $('.next-arr')
  });

  $('.icon-menu').on('click', function(){
    $('#nav-mobile').slideToggle();
  })


});
