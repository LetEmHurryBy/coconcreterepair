<?php
/**
*Template Name: Portfolio Page
*
* @package Construction
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			

				<div class="wrapper">
					<div class="row" style="background-image: url(<?php the_field('about_page_image'); ?>);" >

					<div class="row">
						<h1>About Us</h1>
						<h2><?php the_field('about_page_slogan'); ?><h2>

					</div>


					<div class="row">
				    	<div class="column half"><h2><?php bloginfo('name'); ?></h2><p><?php the_field('about_page_short_description'); ?></p><h2><  </h2></div>
						
						<div class="column half">Vivamus
						sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio
						dui. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas
						eget quam.  Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>
					</div>


					<div class="row">
						<h1>Mollis Commodo</h1>
						<h2>Fermentum Purus Vestibulum Justo Vulputate</h2>
					</div>

				    <div class="row">
				    	<div class="column half">Vivamus sagittis
						lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio
						dui. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
						egestas eget quam.  Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>
						
						<div class="column half"><img src="images/ownerPicture.jpg"/></div>
					</div>

					<div class="row">
						<h1>Mollis Commodo</h1>
						<h2>Fermentum Purus Vestibulum Justo Vulputate</h2>
					</div>

				    <div class="row">
				    	<div class="column half"><img class="map" src="images/mapPlaceholder.jpg"/></div>
						
						<div class="column half">CONTACT PHP HERE<?php include 'contact.php'; ?></div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
