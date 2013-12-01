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

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<section class="blog-links">
				<h3> From the blog</h3>
				<?php

				// The Query
				query_posts( 'cat=16&posts_per_page=2' );

				// The Loop
				while ( have_posts() ) : the_post();
					echo '<ul>';
					echo '<li>';
					echo '<a href="';
					echo get_permalink();
					echo '">';
					the_title();
					echo '</a>';
					echo '</li>';
					echo '</ul>';
					
				endwhile;

				// Reset Query
				wp_reset_query();

				?>
			</section>

			<section class="twitter-links">
				<h3> From the twitter</h3>
				
				<div class="latest-tweet">

					<!-- latest tweet is loaded here -->

					<?php echo do_shortcode('[twitter-feed username="therusstler" num="1" followlink="no" tweetintent="no"]');?>
				
				</div>
				<!--
				<a href="https://twitter.com/therusstler" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @therusstler</a>
				
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				-->
			</section>

			<section class="fun-projects">
				<h3> Fun projects </h3>
					<ul>
						<li><a href="http://www.sheftype.co.uk">Sheftype</a></li>

						<li><a href="http://www.badger.bigcartel.com">The Great Dictators as Cats</a></li>

					</ul>
			</section>


		</footer><!-- #colophon .site-footer -->

	</div><!-- #page .hfeed .site -->

<!-- enter google analytics here -->

	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-32142501-1']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>

</body>
</html>