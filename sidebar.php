<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>



			<?php endif; // end sidebar widget area ?>

		<div class="top-doors">
			<div class="hole">
  				<div class="door top"></div>
  				<div class="door bottom"></div>
  				<a href="https://twitter.com/therusstler" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="false">Follow @therusstler</a>
			</div>
		</div>

		</div><!-- #secondary .widget-area -->
