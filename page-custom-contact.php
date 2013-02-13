<?php
/*
Template Name: Custom Page Contact
*/
?>

<?php get_header(); ?>
				
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

					<div id="contact-body">
						<h3> Lets get started </h3>
						<hr>
						<p> I am currently available and accepting projects, contact me for
						a quote on your project now. 
						</p>
					</div>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>