<?php
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'northerndiv' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- load favicon -->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<!--[if IE]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css">
<![endif]-->

<!-- enter google analytics here -->

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-32142501-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<?php wp_head(); ?>

	<!-- load jquery library -->
	 <script src="http://code.jquery.com/jquery-latest.js"></script>

	 <!-- load modernizr -->
	 <script src="<?php bloginfo('template_url'); ?>/js/modernizr-latest.js"></script>

	<!-- load weather jquery -->
	<script src="<?php bloginfo('template_url') ?>/js/jquery.simpleweather.js" charset="utf-8"></script>
	<script>
	$(function() {			
	    $.simpleWeather({
	        zipcode: 'UKXX0133',
	        unit: 'f',
	        success: function(weather) {
	            $("#weather").append('<h3>'+weather.city+', '+weather.region+'</h3>');
	            $("#weather").append('<img style="float:left;" width="125px" src="'+weather.image+'">');
	            $("#weather").append('<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>');
	        },
	        error: function(error) {
	            $("#weather").html('<p>'+error+'</p>');
	        }
	    });
	});
	</script>

	<!-- load masonry -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.min.js"></script>

	<!-- load galleria -->
	<script src="<?php bloginfo('template_url'); ?>/js/galleria/galleria-1.2.8.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/galleria/themes/classic/galleria.classic.css">

	<!-- load bookblock -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.79639.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bookstyle.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom2.css" />

	<!-- load flyout css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flyout.css" />

	<!-- load socialite -->
	<script src="<?php bloginfo('template_url'); ?>/js/socialite.min.js"></script>

</head>

<div id="container">

	<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'northerndiv' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'northerndiv' ); ?>"><?php _e( 'Skip to content', 'northerndiv' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
		
		<header id="masthead" class="site-header" role="banner">

			<hgroup>
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo ('description') ?></h2>
			</hgroup>

		</header><!-- #masthead .site-header -->
		<div id="main" class="site-main">