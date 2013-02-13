<?php
/**
 * The Template for displaying all single posts.
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content-single" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<ul class="social-buttons cf">
					<li><a class="socialite twitter-share" href="http://twitter.com/share" rel="nofollow" target="_blank" data-text="<?php the_title() ?>" data-url="<?php the_permalink() ?>" data-count="vertical" data-via="therusstler"><span class="vhidden">Share on Twitter</span></a></li>
					<li><a class="socialite googleplus-one" href="https://plus.google.com/share?url=http://socialitejs.com" rel="nofollow" target="_blank" data-size="tall" data-href="<?php the_permalink() ?>"><span class="vhidden">Share on Google+</span></a></li>
					<li><a class="socialite facebook-like" href="http://www.facebook.com/sharer.php?u=http://www.socialitejs.com&t=Socialite.js" rel="nofollow" target="_blank" data-href="<?php the_permalink() ?>" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false"><span class="vhidden">Share on Facebook</span></a></li>
					<li><a class="socialite linkedin-share" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title() ?>" rel="nofollow" target="_blank" data-url="<?php the_permalink() ?>" data-counter="top"><span class="vhidden">Share on LinkedIn</span></a></li>
				</ul>


				<section class="single-nav">
				 <div class="single-nav-previous"><?php previous_post_link('%link', 'Previous post in category', TRUE); ?></div>
				 <div class="single-nav-next"><?php next_post_link('%link', 'Next post in category', TRUE); ?></div>
				</section>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>