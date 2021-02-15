<?php
/*Template Name: Intro*/
?>

<div id="intro" class="page-intro">

  <div class="main-text border-b">
  	<div class="text-l pb-5 p-3 container-xl">
  		<div class="dot mr-2"></div><?php the_field('text1'); ?>
  	</div>
  </div>
	<div class="texts-2-3-4 border-b">
    <div class="text-2 text-s p-3 container">
  		<?php the_field('text2'); ?>
  	</div>
  	<div class="text-3 text-s p-3 container">
  		<?php the_field('text3'); ?>
  	</div>
  	<div class="text-4 text-s p-3 container">
  		<?php the_field('text4'); ?>
  	</div>
  </div>

</div>
