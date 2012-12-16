<?php
				/*
				Template Name: Custom Work page
				*/

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<div class="work-post">
					<?php if (have_posts()) : ?>

					<?php query_posts('category_name=work&posts_per_page=10'); ?>

	  					<?php while (have_posts()) : the_post(); ?>
	  					<div class="posts">

	  						<!--
	  						<h3 class="entry-title">
	  							<?php the_title(); ?>
	  						</h3>
							-->
	  						<div class="entry-content">
	  							
	  							<?php
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									  the_post_thumbnail();
									}
									?>
	    					<!--	<?php the_content(); ?> -->
	    					</div>
						</div>
	  				 	<?php endwhile; ?>

	  				<?php else : ?>

	  				<?php _e("Sorry, but you are looking for something that isn't here."); ?>

	  				<?php endif; ?>
  			</div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>