<?php
/**
*Template Name: Home Page
*
* @package Construction
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Feature Image -->

				
				<!-- Slider -->
			<div class="banner-container">	
				<div class="home-feat-logo-bk">
					<img src="<?php the_field('home_page_feature_logo'); ?>";>
				</div>
				<div class="home-feat-logo">
					<img src="<?php the_field('home_page_feature_logo'); ?>";>
				</div>
				
				<div class="cycle-slideshow"
					data-cycle-speed=1500
    				data-cycle-timeout=4000
					>

					<img src="<?php the_field('home_feature_background_image'); ?>"; >
					<img src="<?php the_field('home_page_slide_two_background_image') ?>";>
					<img src="<?php the_field('home_page_slide_three_background_image') ?>";>
				</div>

				
			</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
