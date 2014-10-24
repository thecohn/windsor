<?php
/*
Template Name: Blog
*/
?>
<?php get_header();?>
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<div id="content">
 
   <article  class="type-page"> 
   <div class="blogmain">
    <?php $additional_loop = new WP_Query("post_type='post'&paged=$paged"); ?>
    <?php   while ($additional_loop->have_posts()) : $additional_loop->the_post();?>
   <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> >
        <div class="blogpost">
        	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        	<ul class="postlist">
        		<li class="posticon1"><a href="<?php the_permalink(); ?>"><?php echo get_the_author();?></a></li>
        		<li class="posticon2"><?php the_date() ?></li>
        		<li class="posticon3"><?php 
            		$comments_count = wp_count_comments();
            		echo $comments_count->total_comments;
        			?>
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
        	<div class="blogtext"><?php the_excerpt(__('Continue reading »','example')); ?></div>
            
    </div></div>
    <?php endwhile; ?>
        <?php kriesi_pagination($additional_loop->max_num_pages);?>
        </div>
<div role="complementary" class="widget-area" id="secondary">
Windsor Life Settlements can help you find a buyer for your life insurance policy. We can help you with your <a href="http://www.windsorlifesettlements.com/">life settlement</a> today. Call 1-888-994-6376 Now!
<br />
<br />
   <?php the_widget( 'WP_Widget_Archives', $instance, $args ); ?>
   <?php dynamic_sidebar('homepage-sidebar');?>
<aside id="nav_menu-3" class="widget widget_nav_menu"><h3 class="widget-title">Quick Links</h3><div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-96 current_page_item menu-item-149"><a title="Life Settlement &amp; Senior Settlement Information" href="http://www.windsorlifesettlements.com/what-is-a-life-settlement/">What is a Life Settlement?</a></li>
<li id="menu-item-373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-373"><a title="Viatical Settlement Information" href="http://www.windsorlifesettlements.com/what-is-a-viatical-settlement/">What is a Viatical Settlement?</a></li>
<li id="menu-item-381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="http://www.windsorlifesettlements.com/why-would-someone-sell-their-life-insurance-policy/">Why Sell Your Life Insurance Policy?</a></li>
<li id="menu-item-372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-372"><a title="Life Settlement Brokers" href="http://www.windsorlifesettlements.com/life-settlement-brokers/">Windsor Life Settlement Brokers</a></li>
<li id="menu-item-374" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-374"><a href="http://www.windsorlifesettlements.com/cash-in-life-insurance/">Cash in Your Life Insurance</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25"><a href="http://www.windsorlifesettlements.com/wp-content/uploads/2013/10/WLS-Application-HIPAA-201209.pdf">Informal Inquiry Form – HIPAA</a></li>
</ul></div></aside>
   </div>
   </article>
</div>
  
<?php get_footer() ?>