<?php
/*Template Name: Intro*/
?>

<div  id="intro" class="page-intro">

  <div class="main-text pos-rel">
  	<div class="text-l py-5 x-padding everett-light">
  		<div class="dot bg-black mr-2"></div><?php the_field('text1'); ?>
  	</div>
    <div class="border-b-abs"></div>
  </div>

	<div  class="texts-2-3-4 pos-rel">
    <div class="text-2 text-s py-4 x-padding">
  		<div data-aos="fade-up" data-aos-offset="0" data-aos-duration="500" data-aos-anchor-placement="top-bottom"><?php the_field('text2'); ?></div>
  	</div>
  	<div class="text-3 text-s py-4 x-padding">
  		<div data-aos="fade-up" data-aos-offset="0" data-aos-duration="500"><?php the_field('text3'); ?></div>
  	</div>
  	<div class="text-4 text-s py-4 x-padding">
  		<div data-aos="fade-up" data-aos-offset="0" data-aos-duration="500"><?php the_field('text4'); ?></div>
  	</div>
    <div class="border-b-abs"></div>
  </div>

</div>
