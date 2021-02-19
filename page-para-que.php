<?php
/*Template Name: Para-que*/
?>

<div id="para-que" class="page-para-que pos-rel">

  <div class="marquee1 text-xl border-b everett-light"><?php the_field('marquee', 54);  ?></div>
  <div class="text1 pos-rel text-m">
  	<div data-aos-duration="1000" data-aos="fade-up" class="py-4 x-padding"><span class="section-dot dot-para-que"></span><?php the_field('text1', 54)  ?></div>
  	<div class="border-b-abs"></div>
  </div>
  <div class="empty pos-rel">
  	<div class="border-b-abs"></div>
  </div>
  <div class="text2 pos-rel text-s">
  	<div data-aos-duration="1000" data-aos="fade-up" class="py-4 x-padding"><?php the_field('text2', 54)  ?></div>
  	<div class="border-b-abs"></div>
  </div>
  <div data-aos="fade-up" class="circles py-4 x-padding pos-rel">
    <!-- <img src="<?php the_field('grafic', 54); ?>" alt=""> -->
    <img class="circle1" src="<?php the_field('circle1', 54); ?>" alt="">
    <img class="circle2" src="<?php the_field('circle2', 54); ?>" alt="">
    <img class="circle3" src="<?php the_field('circle3', 54); ?>" alt="">
    <img class="circle4" src="<?php the_field('circle4', 54); ?>" alt="">
    <img class="circle5" src="<?php the_field('circle5', 54); ?>" alt="">
    <div class="border-b-abs"></div>
  </div>
  <div class="marquee2 text-xl everett-light"><?php the_field('marquee2', 54);  ?></div>
  <div class="border-b-abs"></div>

</div>
