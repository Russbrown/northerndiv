<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
	} ?>
	<h1><?php the_title(); ?></h1>
		<?php

		the_content();
	?>
</article><!-- #post-<?php the_ID(); ?> -->


						<div class="previous"><?php previous_post('%', '<', 'no'); ?></div> 

						<div class="next"><?php next_post('%', '>', 'no'); ?></div>
						
						<div class="contact">
							<a href="http://www.twitter.com/therusstler">Tweet me</a>
						</div>