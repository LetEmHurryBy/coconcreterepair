<?php
/**
*Template Name: About Page
*
* @package Construction
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			

				<div class="wrapper">
					<div class="feature-image">
						<div class="row hero-section" style="background-image: url(<?php the_field('about_page_image'); ?>);" >
						</div>
					</div>
					
					<div class="section-border">

						<div class="row">
							<center><h1><?php the_field('about_us_section_title'); ?></h1></center>
							<center><h2><?php the_field('about_page_slogan'); ?></h2></center>

						</div>

						<div class="row">
							<div class="column-half">
					    		<p><?php the_field('about_page_short_description_1'); ?></p>
					    	</div>
					    	<div class="column-half">
					    		<p><?php the_field('about_page_short_description_2'); ?></p>
					    	</div>
				    	</div>

			    	</div>

			    	<div class="section-border">
						
						<div class="row">
							<center><h1><?php the_field('about_page_profile_section_title'); ?></h1></center>
							<center><h2><?php the_field('about_page_profile_section_slogan'); ?></h2></center>
						</div>

						<div class="row">
							<div class="column-half">
								<p><?php the_field('about_page_profile_description');?></p>
							</div>
							<div class="column-half">
								<img src="<?php the_field('about_page_profile_image'); ?>" width="400" height="400">;
							</div>
						</div>

					</div>

					<div class="row">
				    	<div class="column-half">
				    		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3141726.993293894!2d-104.9847179!3d39.737567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C+CO!5e0!3m2!1sen!2sus!4v1413250019297" width="600" height="550" frameborder="0" style="border:0"></iframe>
				    		<p>Devner, CO</p>
				    	</div>
						
						<div class="column-half">
							<?php echo do_shortcode ('[contact-form-7 id="86" title="Contact Page Form"]') ?>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
