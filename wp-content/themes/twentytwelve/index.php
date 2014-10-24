<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="bannertop">
<?php //if( function_exists('cyclone_slider') ) cyclone_slider('test'); ?>
<?php //if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
<?php //if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'homepage' );?>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/10/banner11.jpg" alt="Windsor"></div>



	<div id="primary" class="site-content">
    <div id="content" role="main">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>

    

		</div><!-- #content -->
        
	</div><!-- #primary -->

<div class="homesidebar"><?php get_sidebar(); ?></div>
<?php get_footer(); ?>