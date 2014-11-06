code that I want to save

from services page, trying to make a toggle so need to do everything separate


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
			<div class="column-third">
				<center>
					<?php 
						$icon = get_field('service_icon');
						get_template_part('images/icons/icon', $icon . '.svg');
					?>	
					<h3><?php the_field('service_icon'); ?></h3>
					<p><?php the_field('service_description'); ?></p>
				</center>
			</div>

			<?php
			// End Loop
			endwhile;
			?>
			<?php wp_reset_postdata(); ?>
			</div>



<!-- to hide the logo -->

<?php

if ( !is_front_page()){
	your <img>
} else{}

?>


<!-- banner slider -->

<div class="banner">
    <ul>

						<?php
						// The Arguments
						$args = array(
										'post_type' => 'gschool_services',
										'order' => ASC
						);
						// Start Loop
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
        <li style="background-image: url(<?php the_field('home_feature_background_image'); ?>);">
									<h2><?php the_title(); ?></h2>
									<p><?php the_field('service_description'); ?></p>
								</li>
				<?php
					// Reset Loop
					endwhile;
					wp_reset_postdata();
				?>
    </ul>
</div>

<!-- banner css -->
.banner {
	position: relative;
	overflow: auto;
	z-index: -1;

	ul {
		margin: 0;
		li{
			float: left;
			list-style: none;
			background-repeat:no-repeat;
		}
	}
}

<!-- end banner css -->


<!-- Home page code that I want to save -->
<section id="banner-container">	
			<div class="banner">
				<ul>
					<li>
						<div class="full-width" style="background-image: url(<?php the_field('home_feature_background_image'); ?>);">
							<div class="home-feat-logo">
								<img src="<?php the_field('home_page_feature_logo'); ?>";>
							</div>
						</div>
					<li>
						<div class="full-width" style="background-image: url(<?php the_field('home_page_slide_two_background_image'); ?>);">
							<div class="home-feat-logo">
								<img src="<?php the_field('home_page_feature_logo'); ?>";>
							</div>
						</div>
					</li>
					<li>
						<div class="full-width" style="background-image: url(<?php the_field('home_page_slide_three_background_image'); ?>);">
							<div class="home-feat-logo">
								<img src="<?php the_field('home_page_feature_logo'); ?>";>
							</div>
						</div>
					</li>
				</ul>
			</div>
			</section>
<!-- end of homepage code that I want to save -->


<!-- home feat logo center -->


.banner-container{
	width:100%; 
	float:left;
	z-index: -1;
	.home-feat-logo{
		position:absolute;
		top: 50%;
		left: 50%;
		margin-right: -50%;
		transform: translate(-50%, -50%);
		z-index: 101;
	}
}
<!-- end home feat logo center -->

notes for class
   start using codepen
   download code box for code
   download sublime text 3 and upload sass colors 
   look at attributing things to people in your code.
   look at ftploy
   check out one password
   check out transmit for ftp
   check out hackathon at gschool, putting together something with a group or team
   pricing
   	hourly
   	template break down
   	look up toggle and do a site and you can see how fast you make a site
   		freelancers union helps to make what you charge
   how to get help when the class is done
   	group meetups
   	google
   	use resources in denver for meetups


Contacts from Class
Jeremy Pike 303-522-0720
Karl Larson 303-514-0021
Heidi Beckman 303-656-7756
Chris Holder 314-780-3252







   testing out repo email adds
   
Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.

Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus.
