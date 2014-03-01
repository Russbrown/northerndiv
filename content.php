<?php
/**
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */
?>
	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'northerndiv' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_post_thumbnail();?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if ( 'post' == get_post_type() ) : ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="excerpt">
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'northerndiv' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->
	</a>