<?php
/**
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */
?>
<div class="featured-image">
<?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
} ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>

	<div class="content"><?php the_content(); ?></div>

	<div class="meta">
		<span class="date">Published <?php	the_time('F jS, Y'); ?></span> 
		by <?php the_author(); ?>
	</div>

	<?php mailchimpSF_signup_form(); ?>

	<div class="comment list">
		<h2>Comments</h2>
	    <?php comments_template(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->



