<?php

/**
 * The template for displaying a default page.
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>