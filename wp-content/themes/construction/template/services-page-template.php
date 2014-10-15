<?php
/**
*Template Name: Services Page
*
* @package Construction
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Feature Image -->
			<div class="full-width" style="background-image: url(<?php the_field('home_feature_background_image'); ?>);">
				<h1><?php the_field('home_feature_headline'); ?></h1>
				<p><?php the_field('home_feature_headline'); ?></p>
			</div>

			<!-- Services -->
			<div class="row">
			<?php
			// The Arguments
			$args = array( 
			    'post_type' => 'co_services', 
			    'posts_per_page' => 3 
			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			    // The Content
			?>
			<div class="column third">
				<?php 
					$icon = get_field('service_icon');
					get_template_part('images/icons/icon', $icon . '.svg');
				?>	
				<h3><?php the_field('service_icon'); ?></h3>
				<p><?php the_field('service_description'); ?></p>
			</div>

			<?php
			// End Loop
			endwhile;
			?>
			<?php wp_reset_postdata(); ?>
			</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
