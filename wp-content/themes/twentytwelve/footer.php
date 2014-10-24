<?php

/**

 * The template for displaying the footer.

 *

 * Contains footer content and the closing of the

 * #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?>

<?php if(!is_page(52) && !is_single() && !is_page(337)):?>

<script type="text/javascript">

	jQuery(function(){

	jQuery("#input_4_1").attr("tabindex","32");

	jQuery("#input_4_2").attr("tabindex","33");

	jQuery("#input_4_3").attr("tabindex","34");

	jQuery("#input_4_4").attr("tabindex","35");

	

	jQuery("#input_5_1").attr("tabindex","40");

	jQuery("#input_5_2").attr("tabindex","41");

	jQuery("#input_5_3").attr("tabindex","42");

	jQuery("#gform_submit_button_5").attr("tabindex","43");

	jQuery("#gform_submit_button_4").attr("tabindex","36");

	var strStyle	=	document.getElementById("gform_page_1_2").style.display;

	if(strStyle=='none')

	{

		jQuery(".gf_page_steps").css("display","none");		

	}

	else

	{

		jQuery(".gf_page_steps").css("display","inline-block");		

		jQuery("#gf_step_1_1").css("display","block");

	}

	jQuery("#gform_previous_button_1").bind("click",function(){		

	jQuery("#gform_target_page_number_1").val("1"); jQuery("#gform_1").trigger("submit",[true]); 

 });

	});

</script>

<?php endif;?>
<?php if(is_page(337)):?>
<script type="text/javascript">
      jQuery(document).ready(function(){
          jQuery("#input_4_1").attr("tabindex","400");

	jQuery("#input_4_2").attr("tabindex","401");

	jQuery("#input_4_3").attr("tabindex","402");

	jQuery("#input_4_4").attr("tabindex","403");
        jQuery("#gform_submit_button_4").attr("tabindex","404");
      }); 
</script>
<?php endif;?>

</div><!-- #main .wrapper -->

</div><!-- #page -->

<div class="footer">



<div class="footertop">

<div class="twitter"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Windsor LS - Sell Your Life Insurance for Cash - Twitter"> 

	<?php dynamic_sidebar( 'sidebar-3' ); ?>



</div>





<div class="news"><h2 class="right-only">

<div class="email"><img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Sell Your Life Insurance Policy for Cash - Newsletter"></div>

<span class="newletter"><b>Newsletter Signup</b><br />

<?php echo do_shortcode("[newsman-form id='1']") ?>

</span>

</h2></div>



</div>

<footer id="colophon" role="contentinfo">

   <div class="footerpost"> 

   <div class="comments">

   <h2>Recent Comments</h2>

   <?php bwp_get_recent_comments();?>

  

   

   

   

   </div>

	<div class="comments">

    <h2>Recent Blog Post</h2>

    <?php $additional_loop = new WP_Query("post_type='post&number=2");

	//echo "<pre>";print_r($additional_loop);die;

	   $i = 0;

	   while ($additional_loop->have_posts()) : $additional_loop->the_post();

	   if($i == 2){ break;

	   }

	   ?>

       <div class="mainpost">

       		<div class="postimg"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></div>

			<div class="postfooter">

			<b><a href="<?php the_permalink();?>"><?php echo the_title();?></a></b><br />

    		<span><?php echo the_date( ); ?></span><br />        

            <?php the_excerpt();?>

            </div>

       </div>

	   <?php 

	   $i++;

	   endwhile;

	 ?>

    </div>

    <div class="contactfooter">

    <h2>Quick Contact Form</h2>

   <?php echo do_shortcode("[gravityform id=4 title=false description=false]") ?></div>

    

    <div class="rights">

    <div class="footercopy">© 2013 Windsor Life Settlements LLC. All Rights Reserved</div>

    <div class="footerright">

    <span><a href="http://www.windsorlifesettlements.com/privacy-policy/">Privacy Policy</a> | <a href="http://www.windsorlifesettlements.com/terms-condition/">Terms & Conditions</a></span>

    	<ul>

<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social1.png" alt="Windsor Life Settlements - Sell Your Life Insurance for Cash - Twitter"></a></li>

        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social2.png" alt="Sell Your Life Insurance Policy for Cash - Facebook"></a></li>

<li><a href="https://plus.google.com/110437686259937599096?rel=author"><img src="<?php bloginfo('template_url'); ?>/images/gplus.png" alt="Sell Your Life Insurance Policy for Cash - Google+"></a></li>

</ul>

    </div>

    </div>

    </div>

	</footer>

    </div><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>