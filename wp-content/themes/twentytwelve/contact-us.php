<?php
/*
Template Name: contact us
*/
?>
<?php get_header(); ?>
	   <header class="entry-header innertitle">
        <div class="innertopimg"><img src="<?php bloginfo('template_url'); ?>/images/about-us.jpg" alt="Windsor"></div>
        	<h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
       <article id="post-1" class="type-page">
       	
        <div class="entry-content">
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
      <div class="contactusmain">  <h3>Get in touch</h3>
		<?php echo do_shortcode('[gravityform id=5 title=false description=false]'); ?></div>
			<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <?php the_content(); ?> <!-- Page Content -->

    <?php
    endwhile; //resetting the page loop
	?>
    
        </div>
<?php get_sidebar(); ?>
       </article>
	 
<?php get_footer();?>