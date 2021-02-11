<?php get_header(); ?>


	<main>
		<?php if( have_posts() ):
				while( have_posts()): the_post() ?>

					<?php $pages = get_pages(array('meta_key' => '_wp_page_template', 'sort_column' => 'menu_order')); 
					foreach($pages as $page):
					?>

						<?php require_once($page->meta_value); ?>
					<?php
					endforeach;
					?>

			<?php
				endwhile;
			endif;
		?>
	</main>


<?php get_footer(); ?>
