<?php
/**
 * The template for displaying page_about custom page template
 *
 * This is the template that displays page-about .
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<h2><?php the_content(); ?></h2>
			</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>

<section class="about-services">
	<div class="site-content">
		<div class="about-our-services">
			<h2>Our Services</h2>
			<?php $key="our_services"; echo get_post_meta($post->ID, $key, true); ?>
		</div>
		<?php query_posts('post_type=services&order=ASC'); ?>
		<ul class="about-services-list">

			<?php $order = true; ?>
			<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$services = get_field('services');
			$info = get_field('information');
			$size = "small"; ?>

			<li class="individual-services">
				<?php if ( $order ) : ?>
			 		<div class="img-left">
						<?php $order = false; ?>
			 	<?php else : ?>
			 		<div class="img-right">
						<?php $order = true; ?>
			 	<?php endif; ?>
					<?php echo wp_get_attachment_image( $image_1, $size); ?>
				</div>
				<div class="services">
					<h2><?php echo $services; ?></h2>
					<h5><?php echo $info; ?></h5>
				</div>
				</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
		<div class="contact">
			<h2>Interested in Working with Us?</h2>
			<a class="button" href="http://localhost:8888/accelerate/contact-us">Contact Us</a>
		</div>

		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>
