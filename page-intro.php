<?php
/*Template Name: Intro*/
?>

<div id="intro" class="page-intro">

  <div class="main-text border-b">
  	<div class="text-l py-5 x-padding">
  		<div class="dot mr-2"></div><?php the_field('text1'); ?>
  	</div>
  </div>

	<div class="texts-2-3-4 border-b">
    <div class="text-2 text-s py-4 x-padding">
  		<?php the_field('text2'); ?>
  	</div>
  	<div class="text-3 text-s py-4 x-padding">
  		<?php the_field('text3'); ?>
  	</div>
  	<div class="text-4 text-s py-4 x-padding">
  		<?php the_field('text4'); ?>
  	</div>
  </div>

</div>
