<?php
/*Template Name: Servicios*/
?>
<div id="servicios" class="page-servicios border-b">


    <div class="text1 text-m"><div class="py-4 x-padding"><?php the_field('text1', 9); ?></div></div>
    <div class="text_circle text-m py-4 x-padding"><img src="<?php the_field('text_circle', 9); ?>" alt=""></div>

  <div class="slider border-t">
    <div class="prev-arr container"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-thin.png ?>" alt=""></div>
    <div class="slider-content text-s py-4 x-padding">
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
    <div class="next-arr container"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-thin.png ?>" alt=""></div>
  </div>

</div>
