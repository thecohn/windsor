<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>
<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
	window.__insp = window.__insp || [];
	__insp.push(['wid', 1711030679]);
	(function() {
		function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
		if (window.attachEvent){
			window.attachEvent('onload', __ldinsp);
		}else{
			window.addEventListener('load', __ldinsp, false);
		}
	})();
</script>
<!-- End Inspectlet Embed Code -->

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, maximum-scale = 1, minimum-scale=1" />



<?php if ( is_front_page() ) { ?>
<meta name="description" content="Sell your life insurance policy for cash with help from Windsor Life Settlements. Call 1-888-994-6376 today to see if you qualify!" />
<?php } ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<?php wp_head(); ?>

<title>Windsor Life Settlements | Learn About Viatical and Life Settlements</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35145377-2', 'windsorlifesettlements.com');
  ga('send', 'pageview');

</script>


</head>

<script type="text/javascript">
    if(typeof(_vis_opt_top_initialize) == "function") {
    // Code for Custom Goal: Goal #1
     _vis_opt_goal_conversion(200);
    // uncomment the following line to introduce a half second pause to ensure goal always registers with the server
    // _vis_opt_pause(500);
    }
</script>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

    <div class="fblike">

    <div class="alignright">

<!--<div class="fb">Like us on  Facebook <a href="#" rel="nofollow"><img src="http://windsorls.com/wp-content/themes/twentytwelve/images/fb.png" alt="Windsor Life Settlements Facebook"></a></div> -->

    <div class="linked">Connect with linked <a href="https://www.linkedin.com/profile/view?id=48227980&authType=NAME_SEARCH&authToken=M19v&locale=en_US&trk=tyah2&trkInfo=tarId%3A1412689073412%2Ctas%3Akenneth%20kelly%2Cidx%3A1-2-2"><img src="http://windsorls.com/wp-content/themes/twentytwelve/images/in.png" alt="Windsor Life Settlements LinkedIn"></a></div>

<div class="linked">Follow us on Google+  <div class="g-plusone" data-size="small" data-annotation="none"></div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div></div>

    </div>

		<div class="topmenu">

        <hgroup class="topleft">

            <h1 class="left-only" style="background:#fff;">

            <div class="top_logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Windsor Life Settlements - Sell your life insurance policy for cash!"></a></div>

            </h1>

		</hgroup>

        

		<nav id="site-navigation" class="main-navigation" role="navigation">

			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>

			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

		</nav>

        </div><!-- #site-navigation -->

<div class="toptagline">

<div class="call">

<h2 class="left-only">

<img src="<?php bloginfo('template_url'); ?>/images/call.png" alt="Windsor Life Settlements - Sell Your Life Insurance Policy for Cash!">

<?php dynamic_sidebar( 'phone-sidebar' ); ?>

</h2>

</div>

	<div class="tag">Fill the form below and tell us about <b>Your Policy</b></div>

</div>

		<?php $header_image = get_header_image();

		if ( ! empty( $header_image ) ) : ?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

		<?php endif; ?>

	</header><!-- #masthead -->



	<div id="main" class="wrapper inner">