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

	// // Add the blog name.
	// bloginfo( 'name' );

	// // Add the blog description for the home/front page.
	// $site_description = get_bloginfo( 'description', 'display' );
	// if ( $site_description && ( is_home() || is_front_page() ) )
	// 	echo " | $site_description";

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

<?php wp_head(); ?>

	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400' rel='stylesheet' type='text/css'>

</head>

	<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<?php do_action( 'before' ); ?>
<!-- -->

		<header id="masthead" class="site-header" role="banner">
			<a href="/"><div class="logo"></div></a>
			<div class="tagline">UX, Startups and Design</div>
		</header><!-- #masthead .site-header -->


		<nav id="nav">
			<?php wp_nav_menu(); ?>
		</nav>

