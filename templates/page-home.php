<?php 
/**
*Template Name: Home
 */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php endwhile; ?>		

<?php get_footer(); ?>