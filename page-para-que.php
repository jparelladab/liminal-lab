<?php
/*Template Name: Para-que*/
?>

<div id="para-que" class="page-para-que">

  <div class="marquee1 text-xl border-b everett-light"><?php the_field('marquee', 54);  ?></div>
  <div class="text1 text-m"><div data-aos-duration="1000" data-aos="fade-up" class="py-4 x-padding"><span class="section-dot dot-para-que"></span><?php the_field('text1', 54)  ?></div></div>
  <div class="empty"></div>
  <div class="text2 text-s"><div data-aos-duration="1000" data-aos="fade-up" class="py-4 x-padding"><?php the_field('text2', 54)  ?></div></div>
  <div data-aos="fade-up" class="circles py-4 x-padding">
    <img src="<?php the_field('grafic', 54); ?>" alt="">
  </div>
  <div class="marquee2 text-xl border-b everett-light"><?php the_field('marquee2', 54);  ?></div>

</div>
