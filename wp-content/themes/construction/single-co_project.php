<?php
/**
 * The template for displaying all single posts.
 *
 * @package Construction
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Our Code -->

			<h2><?php the_title(); ?></h2>
			
			<?php echo get_the_category_list( ', '); ?>

			dfsads

			<!-- End of Our Code -->

			

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>