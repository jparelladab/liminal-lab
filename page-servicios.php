<?php
/*Template Name: Servicios*/
?>
<div class="page-servicios pos-rel">
  <div id="servicios"></div>

    <div class="text1 text-m pos-rel">
      <div class="py-4 x-padding"><div data-aos="fade-up"><span class="section-dot dot-servicios"></span><?php the_field('text1', 9); ?></div></div>
      <div class="border-r-abs"></div>
    </div>
    <div class="text_circle text-m py-5 x-padding"><img src="<?php the_field('text_circle', 9); ?>" alt=""></div>

  <div class="slider pos-rel">
    <div  class="prev-arr container pos-rel">
      <!-- <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg ?>" alt=""> -->
      <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M90.8535 45.9268L0.999923 45.9268" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray='1000'/>
        <path d="M45.9267 90.8536L0.999923 45.9268L45.9267 0.999988" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray='1000'/>
      </svg>
      <div class="border-r-abs"></div>
    </div>
    <div data-aos="fade-up"  class="slider-content text-s py-4 x-padding">
    	<?php if ( have_rows('text_slider', 9) ): ?>
		    <div class="servicios-slider">
		    <?php while( have_rows('text_slider', 9) ): the_row(); ?>
		        <div class="slider-item">
		            <div><?php the_sub_field('text'); ?></div>
		        </div>
		    <?php endwhile; ?>
		    </div>
		  <?php endif; ?>
    </div>
    <div class="next-arr container pos-rel">
      <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 45.9267H90.8536" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray='1000'/>
        <path d="M45.9268 0.999931L90.8536 45.9267L45.9268 90.8535" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray='1000'/>
      </svg>
      <!-- <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg ?>" alt=""> -->
      <div class="border-l-abs"></div>
    </div>
    <div class="border-t-abs"></div>
  </div>

  <div class="border-b-abs"></div>

</div>
