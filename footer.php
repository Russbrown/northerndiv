	<?php
	/**
	 * The template for displaying the footer.
	 *
	 * Contains the closing of the id=main div and all content after
	 *
	 * @package NorthernDiv
	 * @since NorthernDiv 1.0
	 */
	?>

		</div><!-- #main .site-main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<section class="blog-links">
				<h3> from the blog</h3>
					<?php
						global $post;
						$args = array( 'numberposts' => 2, 'offset'=> 0, );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
			</section>

			<section class="twitter-links">
				<h3> from the twitter</h3>
				
				<div class="latest-tweet">

					<!-- latest tweet is loaded here -->

					<?php echo do_shortcode('[twitter-feed username="therusstler" num="1" followlink="no"]');?>
				
				</div>
				<!--
				<a href="https://twitter.com/therusstler" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @therusstler</a>
				
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				-->
			</section>

			<section class="fun-projects">
				<h3> fun projects </h3>
					<ul>
						<li><a href="http://www.sheftype.co.uk">Sheftype</a></li>

						<li><a href="http://www.badger.bigcartel.com">The Great Dictators as Cats</a></li>

					</ul>
			</section>


		</footer><!-- #colophon .site-footer -->
	</div><!-- #page .hfeed .site -->
</div> <!-- end #container -->
<?php wp_footer(); ?>

<!-- jquery masonry -->
	<script>
	$(function(){
	  $('.site-content-blog').masonry({
	    // options
	    itemSelector : '.post'
	  });
	});
	</script>

<!-- the cookies directive notifier -->
	<script type="text/javascript">
	    function cookiesDirectiveScriptWrapper(){
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/cookies.js">
	</script>
	<script type="text/javascript">
	    // The position of the disclosure ('top' or 'bottom')
	    // Number of times to display disclosure. Enter 0 to show it forever!!!!
	    // The URI of your privacy policy
	    cookiesDirective('top',1,'http://www.aboutcookies.org');
	</script>

</body>
</html>