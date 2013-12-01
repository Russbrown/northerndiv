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

				<section class="single-nav">
				 <div class="single-nav-previous"><?php previous_post_link('&laquo; %link', 'Previous post in category', TRUE); ?></div>
				 <div class="single-nav-next"><?php next_post_link('%link &raquo', 'Next post in category', TRUE); ?></div>
				</section>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529adc0c2c00d788"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : []
    },  
    'whatsnext' : {},  
    'recommended' : {} 
  });
</script>
<!-- AddThis Smart Layers END -->