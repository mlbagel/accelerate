<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays the 404 page when an error occurs.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<section class="content404">
  <div class="site-content">
    <div class="position-lower">
      <div class="position-left">
        <h1>404</h1>
        <h2>Hello, my friend, looks like you found the end of the internet! </h2>
        <p>Please, pull up a chair and join me as we watch the waves and feel the breeze</p>
      </div>
      <div class="position-right">
        <p>"What?"  You say you must return?<br> Well if you have to, then Avoire for now.</p>
        <a class="button" href="<?php echo home_url(); ?>/">Return Home</a>
      </div>
    </div>
  </div>
</section><!-- .home-page -->

<?php get_footer(); ?>
