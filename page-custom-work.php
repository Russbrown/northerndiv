<?php
				/*
				Template Name: Custom Work page
				*/

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php if ( have_posts() ) : ?>

				<?php query_posts('category_name=infographics') ?>

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

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>