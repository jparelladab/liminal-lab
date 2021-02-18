jQuery(document).ready(function($){

//initialize AOS
AOS.init();

//initialize marquees
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

  //section dot behavior on scroll
  const menu_height = 75;
  const intro = $('.page-intro');
  const para_que = $('.page-para-que');
  const servicios = $('.page-servicios');
  const sobre_mi = $('.page-sobre-mi');
  const contacto = $('.page-contacto');
  let chosen = intro;
  const menu_intro = $('.before-intro .section-dot');
  const menu_para_que = $('.before-para-que .section-dot');
  const menu_servicios = $('.before-servicios .section-dot');
  const menu_sobre_mi = $('.before-sobre-mi .section-dot');
  const menu_contacto = $('.before-contacto .section-dot');
  let chosen_menu = menu_intro;
  menu_intro.addClass('bg-black');


  $(document).on('scroll', function(){
    if ($(document).scrollTop() == 0) {
      $('header').css('background-color', 'transparent');
      // chosen_menu.toggleClass('bg-black');

      menu_intro.addClass('bg-black');
      menu_para_que.removeClass('bg-black');
      menu_servicios.removeClass('bg-black');
      menu_sobre_mi.removeClass('bg-black');
      menu_contacto.removeClass('bg-black');

    } else {
      $('header').css('background-color', 'white');
      if ($(document).scrollTop() > para_que.offset().top - 300 && $(document).scrollTop() < servicios.offset().top){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = para_que;
        chosen.find('.section-dot').toggleClass('bg-black');

        // chosen_menu.toggleClass('bg-black');
        // chosen_menu = menu_para_que;
        // chosen_menu.toggleClass('bg-black');
        menu_intro.removeClass('bg-black');
        menu_para_que.addClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.removeClass('bg-black');

      }
      if ($(document).scrollTop() > servicios.offset().top - 400 && $(document).scrollTop() < sobre_mi.offset().top){
        // console.log('page servicios');
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = servicios;
        chosen.find('.section-dot').toggleClass('bg-black');

        // chosen_menu.toggleClass('bg-black');
        // chosen_menu = menu_servicios;
        // chosen_menu.toggleClass('bg-black');
        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.addClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.removeClass('bg-black');
      }
      if ($(document).scrollTop() > sobre_mi.offset().top - 400){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = sobre_mi;
        chosen.find('.section-dot').toggleClass('bg-black');

        // chosen_menu.toggleClass('bg-black');
        // chosen_menu = menu_sobre_mi;
        // chosen_menu.toggleClass('bg-black');
        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.addClass('bg-black');
        menu_contacto.removeClass('bg-black');
      }
      if ($(document).scrollTop() > contacto.offset().top - 400 || $(window).scrollTop() + $(window).height() >= $(document).height()){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = contacto;
        chosen.find('.section-dot').toggleClass('bg-black');

        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.addClass('bg-black');
      }
    }
  });


});


// var targetOffset = $("#anchor-point").offset().top;

// var $w = $(window).scroll(function(){
//     if ( $w.scrollTop() > targetOffset ) {
//         $('#voice2').css({"border-bottom":"2px solid #f4f5f8"});
//         $('#voice3').css({"border-bottom":"2px solid #2e375b"});
//     } else {
//       // ...
//     }
// });
