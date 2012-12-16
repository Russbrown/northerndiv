<?php
				/*
				Template Name: Custom About page
				*/

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<h1> about me </h1>

				<div class="pieContainer">
					<!--[if lt IE 9]>
						<img src="<?php bloginfo('template_url') ?>/img/iepie.png">
					<![endif]-->
				     <div id="pieSliceBlue" class="hold"><div class="pie"></div></div>
				     <div id="pieSliceRed" class="hold"><div class="pie"></div></div>
				     <div id="pieSliceGreen" class="hold"><div class="pie"></div></div>
				     <div id="pieSliceYell" class="hold"><div class="pie"></div></div>
				     <div id="pieSliceOra" class="hold"><div class="pie"></div></div>
				     <div id="pieSlicepurple" class="hold"><div class="pie"></div></div>
				     <div id="pieSlicepink" class="hold"><div class="pie"></div></div>
				</div>

							<div id="label-body">
								<h3> experience </h3>
								<hr>
								<p> I've been designing and building websites for two years,
								ranging from artistic portfolios to robust e-commerce sites. I live
								and breathe the web, whether that's designing a pixel perfect layout in 
								photoshop or sticking my headphones in and bringing the designs to life through
								wordpress.  
								</p>
							</div>

							<div id="labels">
								<h3> Skills </h3>
								<hr>
								<ul>
									<li><span class="span1"></span>css3</li>
									<li><span class="span2"></span>html5</li>
									<li><span class="span3"></span>jquery</li>
									<li><span class="span4"></span>wordpress</li>
									<li><span class="span5"></span>Usability testing</li>
									<li><span class="span6"></span>Illustrator</li>
									<li><span class="span7"></span>Photoshop</li>
								</ul>
							</div>

			<section class="mission">

				<div id="infinity">
				</div>
				
				<h4> I'm obsessed with the web, if i'm not making stuff for clients I'm making fun stuff with friends.
					I'm constantly learning and applying new techniques and methods to create better designed, faster, 
					more accessible websites.
				</h4>

				<h4> This allows me to align beautiful design to a cutting edge product to serve your needs perfectly. </h4>

				<div id="weather"></div>

				<h4> I live in <span class="weather-appear"> sunny </span> Sheffield and am always looking for new projects
					 so <a href="<?php echo home_url(); ?>/contact"> get in touch </a> and lets talk about yours. 
				</h4>

				<script type="text/javascript">
					$(document).ready(function(){
							$(".weather-appear").click(function(){
								$("#weather").toggle("slow");
							});
					});
				</script>

			</section>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>