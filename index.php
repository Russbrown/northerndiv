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

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
							<h1><?php the_title();?></h1>
							<?php the_content();?>
						</article>

						<div class="previous"><?php previous_post('%', '<', 'no'); ?></div> 

						<div class="next"><?php next_post('%', '>', 'no'); ?></div>

					<?php endwhile; ?>

					<?php endif; ?>

					<div class="contact">
						<a href="http://www.twitter.com/therusstler">Tweet me</a>
					</div>

			</div><!-- #content .site-content -->

		</div><!-- #primary .content-area -->

<?php get_footer(); ?>