jQuery(document).ready(function($){

//initialize AOS
AOS.init({
  once: true,
  offset: 0,
  duration: 1000
});

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
  		nextArrow: $('.next-arr'),
      adaptiveHeight: true
  });

  $('.icon-menu').on('click', function(){
    $('#nav-mobile').slideToggle();
  });
  $('#nav-mobile .menu-item').on('click', function(){
    $('#nav-mobile').slideToggle();
  });


  //Acordeon para-que

  $('.list-item').on('click', function(){
    $(this).next().slideToggle();
    $(this).find(".close").toggle();
    $(this).find(".open").toggle();
  });

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

//   $.fn.isInViewport = function () {
//     let elementTop = $(this).offset().top;
//     let elementBottom = elementTop + $(this).outerHeight();

//     let viewportTop = $(window).scrollTop();
//     let viewportBottom = viewportTop + $(window).height();

//     return elementBottom > viewportTop && elementTop < viewportBottom;
// };


$('.page-intro .border-b-abs').css('width', '100%');
$('.page-intro .border-r-abs').css('height', '100%');

  $(document).on('scroll', function(){
    if ($(document).scrollTop() == 0) {
      $('header').css('background-color', 'transparent');
      $('#nav-mobile').css('background-color', '#C8EEDC');

      menu_intro.addClass('bg-black');
      menu_para_que.removeClass('bg-black');
      menu_servicios.removeClass('bg-black');
      menu_sobre_mi.removeClass('bg-black');
      menu_contacto.removeClass('bg-black');

      $('.page-intro .border-b-abs').css('width', '100%');
      $('.page-intro .border-r-abs').css('height', '100%');
      // $('.page-para-que .border-b-abs').css('width', '0');
      // $('.page-servicios .border-t-abs').css('width', '0');
      // $('.page-servicios .border-b-abs').css('width', '0');
      // $('.page-sobre-mi .border-b-abs').css('width', '0');
      // $('.page-contacto .border-b-abs').css('width', '0');

    } else {
      $('header, #nav-mobile').css('background-color', 'white');
      if ($(document).scrollTop() > intro.offset().top - 300 && $(document).scrollTop() < para_que.offset().top){
        $('.page-intro .border-b-abs').css('width', '100%');
        $('.page-intro .border-r-abs').css('height', '100%');
        // $('.page-para-que .border-b-abs').css('width', '0');
        // $('.page-servicios .border-t-abs').css('width', '0');
        // $('.page-sobre-mi .border-b-abs').css('width', '0');
        // $('.page-contacto .border-b-abs').css('width', '0');
      }
      if ($(document).scrollTop() > para_que.offset().top - 300 && $(document).scrollTop() < servicios.offset().top){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = para_que;
        chosen.find('.section-dot').toggleClass('bg-black');

        menu_intro.removeClass('bg-black');
        menu_para_que.addClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.removeClass('bg-black');

        // $('.page-intro .border-b-abs').css('width', '0');
        $('.page-para-que .border-b-abs').css('width', '100%');
        $('.page-para-que .border-r-abs').css('height', '100%');
        $('.page-para-que .border-t-abs').css('width', '100%');
        $('circle, path.arrow').css('stroke-dashoffset', '0');
        // $('.page-servicios .border-t-abs').css('width', '0');
        // $('.page-servicios .border-b-abs').css('width', '0');
        // $('.page-sobre-mi .border-b-abs').css('width', '0');
        // $('.page-contacto .border-b-abs').css('width', '0');

      }
      if ($(document).scrollTop() > servicios.offset().top - 400 && $(document).scrollTop() < sobre_mi.offset().top){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = servicios;
        chosen.find('.section-dot').toggleClass('bg-black');

        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.addClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.removeClass('bg-black');

       // $('.page-intro .border-b-abs').css('width', '0');
        $('.page-para-que .border-b-abs').css('width', '100%');
        $('.page-servicios .border-t-abs').css('width', '100%');
        $('.page-servicios .border-r-abs').css('height', '100%');
        $('.page-servicios .border-l-abs').css('height', '100%');
        $('.page-servicios .border-b-abs').css('width', '100%');
        $('.page-servicios path').css('stroke-dashoffset', '0');
        // $('.page-servicios .border-b-abs').css('width', '100%');
        // $('.page-sobre-mi .border-b-abs').css('width', '0');
        // $('.page-contacto .border-b-abs').css('width', '0');


      }
      if ($(document).scrollTop() > sobre_mi.offset().top - 400){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = sobre_mi;
        chosen.find('.section-dot').toggleClass('bg-black');

        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.addClass('bg-black');
        menu_contacto.removeClass('bg-black');

        // $('.page-intro .border-b-abs').css('width', '0');
        // $('.page-para-que .border-b-abs').css('width', '0');
        // $('.page-servicios .border-t-abs').css('width', '0');
        // $('.page-servicios .border-b-abs').css('width', '100%');
        $('.page-sobre-mi .border-b-abs').css('width', '100%');
        $('.page-contacto .border-b-abs').css('width', '100%');
        $('.page-sobre-mi .border-l-abs').css('height', '100%');
      }
      if ($(document).scrollTop() > contacto.offset().top - 400 || $(window).scrollTop() + $(window).height() >= $(document).height() || $(window).scrollTop() + $(window).height() == $(document).height()){
        chosen.find('.section-dot').toggleClass('bg-black');
        chosen = contacto;
        chosen.find('.section-dot').toggleClass('bg-black');

        menu_intro.removeClass('bg-black');
        menu_para_que.removeClass('bg-black');
        menu_servicios.removeClass('bg-black');
        menu_sobre_mi.removeClass('bg-black');
        menu_contacto.addClass('bg-black');

        // $('.page-intro .border-b-abs').css('width', '0');
        // $('.page-para-que .border-b-abs').css('width', '0');
        // $('.page-servicios .border-t-abs').css('width', '0');
        // $('.page-servicios .border-b-abs').css('width', '0');
        // $('.page-sobre-mi .border-b-abs').css('width', '100%');
        // $('.page-contacto .border-b-abs').css('width', '100%');
        $('.page-contacto .border-r-abs').css('height', '100%');
      }
    }
    // if ($('.page-intro .border-b-abs').isInViewport()){
    //   $('.page-intro .border-b-abs').css('width', '100%');
    // } else {
    //   $('.page-intro .border-b-abs').css('width', '0');
    // }
  });

//   if ($('.border-b-abs').visible()) {
//     $('.border-b-abs').css('width', '100%');
// } else {
//     $('.border-b-abs').css('width', '0');
// }





});


