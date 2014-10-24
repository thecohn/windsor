<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
	<div id="primary" class="site-content4">
		<div id="content" role="main">
			<article  class="type-page">
            <div class="blogmain"> 
			<?php while ( have_posts() ) : the_post(); ?>
            	<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> >
                    <div class="blogpost">
                    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <ul class="postlist">
                            <li class="posticon1"><a href="<?php the_permalink(); ?>"><?php echo get_the_author();?></a></li>
                            <li class="posticon2"><?php the_date() ?></li>
                            <li class="posticon3"><?php 
                                //$comments_count = wp_count_comments();
                                //echo $comments_count->total_comments;
								comments_number('no responses','one response','% responses'); ?>
                                
                            </li>
                            <li class="posticon4">
                             <?php 
                             $arrCat = get_the_category(get_the_ID());
                                 foreach ($arrCat as $arrCat):
                                     $arrNew[]    =   $arrCat->name;
                                 endforeach;
                                 echo @implode(',', $arrNew);
                            ?>
                            </li>
                        </ul>
                        <div class="blogimg"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			        	<div class="blogtext"><?php the_content(); ?></div>
                    </div>
                </div>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            </div>
 
<div role="complementary" class="widget-area" id="secondary">
   <?php the_widget( 'WP_Widget_Archives', $instance, $args ); ?>
   <?php dynamic_sidebar('homepage-sidebar');?> 
   </div>
			</article>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>