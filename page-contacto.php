<?php
/*Template Name: Contacto*/
?>
<div class="page-contacto border-b">
  <div class="info text-m p-3 container">
    <?php the_field('text1', 13); ?>
  </div>
  <div class="social container text-m p-3">
    <div><a href="<?php the_field('instagram', 13); ?>">Instagram</a></div>
    <div><a href="<?php the_field('facebook', 13); ?>">Facebook</a></div>
    <div><a href="<?php the_field('linkedin', 13); ?>">LinkedIn</a></div>
    <div><a href="<?php the_field('twitter', 13); ?>"></a>Twitter</div>
  </div>
</div>
