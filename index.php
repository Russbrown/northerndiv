<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content-blog" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ $count = 1; ?>

					<?php while ( have_posts() ) : the_post(); ?>

					<?php if ($count === 1) { ?>

						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'northerndiv' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
							<article id="featured" <?php post_class(); ?>>
								<h1><?php the_title();?></h1>
								<div class="featured-excerpt"><?php the_excerpt();?></div>
							</article>
						</a>

					<?php } else { ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'northerndiv' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title();?></a></h1>
							<div class="meta">	 
								<span class="date"><?php the_time('F jS, Y'); ?></span> 
								<?php the_category(); ?>
							</div>
						</article>

					<?php } ?>

					<?php $count++; ?>

					<?php endwhile; ?>

					<?php endif; ?>

					<?php mailchimpSF_signup_form(); ?>

			</div><!-- #content .site-content -->

		</div><!-- #primary .content-area -->

<?php get_footer(); ?>