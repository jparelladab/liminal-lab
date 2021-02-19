<?php
/*Template Name: Contacto*/
?>
<div id="contacto" class="page-contacto pos-rel">
  <div class="info text-m py-4 x-padding">
    <div><span class="section-dot dot-contacto"></span><?php the_field('text1', 13); ?></div>
  </div>
  <div class="social py-4 x-padding text-m">
    <div><a href="<?php the_field('instagram', 13); ?>">Instagram</a></div>
    <div><a href="<?php the_field('facebook', 13); ?>">Facebook</a></div>
    <div><a href="<?php the_field('linkedin', 13); ?>">LinkedIn</a></div>
    <div><a href="<?php the_field('twitter', 13); ?>"></a>Twitter</div>
  </div>
  	<div class="border-b-abs"></div>
</div>
