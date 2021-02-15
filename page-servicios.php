<?php
/*Template Name: Servicios*/
?>
<div class="page-servicios border-b">


    <div class="text1 text-m"><div class="container p-3"><?php the_field('text1', 9); ?></div></div>
    <div class="text_circle text-m"><div class="container p-3"><?php the_field('text_circle', 9); ?></div></div>

  <div class="slider border-t">
    <div class="prev-arr container"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-thin.png ?>" alt=""></div>
    <div class="slider-content text-xs p-3 container">
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
