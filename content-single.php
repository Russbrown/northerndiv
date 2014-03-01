<?php
/**
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="post-title"><?php the_title(); ?></h1>

	<div class="content"><?php the_content(); ?></div>

	<div class="meta">
		<span class="date">Published <?php	the_time('F jS, Y'); ?></span> 
		by <a href="http://www.google.com/+RussellBrownplus"><?php the_author(); ?></a>
	</div>

	<a href="https://twitter.com/share" class="twitter-share-button" data-via="NorthernDiv" data-count="none">Tweet</a>

	<div class="g-plusone" data-size="medium" data-annotation="none"></div>


	<?php mailchimpSF_signup_form(); ?>

	<div class="comment list">
		<h2>Comments</h2>
	    <?php comments_template(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->



