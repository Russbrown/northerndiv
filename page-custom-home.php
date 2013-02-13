<?php
				/*
				Template Name: Custom Home Page
				MultiEdit: Banner,About,Project1,Project2
				*/

get_header(); ?>
		<div id="primary" class="content-area">
			
			<section class="banner">
				<div id="galleria">
					<img src="<?php bloginfo('template_url'); ?>/img/banner2.jpg">
				</div>
			</section>

			<section class="design">
					<article class="design-ribbon">
						<h3>design work</h3>
					</article>
			</section>
			
			<section class="code">
					<article class="code-ribbon">
						<h3>code work</h3>
					</article>				
			</section>

			<section class="about-ribbon">
				<h3>about me</h3>
			</section>

			<section class="about-description">
				<p class="about-copy"><?php multieditDisplay('About');?></p>
			</section>

			<section>
				<ul class="bb-custom-grid" id="bb-custom-grid">
					<li>
						<div class="bb-bookblock">
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/design1.jpg" alt="image01"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/design2.jpg" alt="image02"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/design3.jpg" alt="image03"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/design4.jpg" alt="image04"/></div>
						</div>
						<nav>

							<span class="bb-current assistive-text2">Portfolio Piece 1</span>
							<span class="assistive-text2">Portfolio Piece 2</span>
							<span class="assistive-text2">Portfolio Piece 3</span>
							<span class="assistive-text2">Portfolio Piece 4</span>
						</nav>
					</li>
					<li>
						<div class="bb-bookblock">
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/code1.jpg" alt="image05"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/code2.jpg" alt="image06"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/code3.png" alt="image07"/></div>
							<div class="bb-item"><img src="<?php bloginfo ('template_url') ?>/img/code4.png" alt="image08"/></div>
						</div>
						<nav>
							<span class="bb-current assistive-text2">Portfolio Piece 5</span>
							<span class="assistive-text2">Portfolio Piece 6</span>
							<span class="assistive-text2">Portfolio Piece 7</span>
							<span class="assistive-text2">Portfolio Piece 8</span>
						</nav>
					</li>
				</ul>
				<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bookblock.js"></script>
				<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
				<script type="text/javascript">
				$(function() {

					var Page = (function() {

						var $grid = $( '#bb-custom-grid' );

						return {

							init : function() {

								$grid.find( 'div.bb-bookblock' ).each( function( i ) {
									
									var $bookBlock =	$( this ),
											$nav =	$bookBlock.next().children( 'span' ),
											bb =	$bookBlock.bookblock( {
												perspective	: 900,
												speed				: 600,
												shadows			: false
											} );
										
									// add navigation events
									$nav.each( function( i ) {
									
										$( this ).on( 'click', function( event ) {
											
											var $dot = $( this );
											if( !bb.isActive() ) {
												$nav.removeClass( 'bb-current' );
												$dot.addClass( 'bb-current' );
											}
											bb.jump( i + 1 );
											return false;
										
										} );
										
									} );
									
									// add swipe events
									$bookBlock.children().on( {

										'swipeleft'		: function( event ) {
										
											bb.next();
											return false;

										},
										'swiperight'	: function( event ) {
										
											bb.prev();
											return false;
											
										}

									} );
									
								} );

							}
						
						};

					})();

					Page.init();

				});
				</script>
			</section>

			<section>
				<div id="flyout-container">
					<!--[if IE]>
						<a href="http://www.browsehappy.com"><h2> Something cool should be here, to see it please upgrade to a modern browser </h2></a>
					<![endif]-->
				  <div id="itemlist">
				  	<img src="<?php bloginfo('template_url'); ?>/img/flyout1.jpg" alt="Website design and build" id="flyout1">
				    <img src="<?php bloginfo('template_url'); ?>/img/flyout2.jpg" alt="Twitter app" id="flyout2">
				    <img src="<?php bloginfo('template_url'); ?>/img/flyout3.jpg" alt="Icons" id="flyout3">
				    <img src="<?php bloginfo('template_url'); ?>/img/flyout4.jpg" alt="Interfaces" id="flyout4">
				    <!-- to n image -->
				  </div>
				  <div id="itemdescription">
				    <span data-for="flyout1">Site design and build. </br> 
				    	<h5> From a 2 page brochure site </br>
				    	 to a full e-commerce solution. </br>
				    	  <a href="<?php echo home_url(); ?>/contact">Lets talk about what you need.</a> </h5>
				    </span>
				    <span data-for="flyout2">Identity work </br>
				    	<h5> Whether its a design refresh </br>
				    		or a fresh design. </br>
				    		<a href="<?php echo home_url(); ?>/contact">Lets get started</a> </h5>
				    </span>
				    <span data-for="flyout3">Icon design
				    	<h5> So you've built the app but you </br>
				    	   need to stand out in the app store, right? </br>
				    		<a href="<?php echo home_url(); ?>/contact">We can help</a> </h5>
				    </span>
				    <span data-for="flyout4">Interface design
				    	<h5> You need a beautifully detailed interface </br>
				    		to go with that app you're making don't you? </br>
				    		<a href="<?php echo home_url(); ?>/contact"> Lets work together </a></h5>
				    </span>
				    <!-- to n description -->
				  </div>
				</div>
				<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/flyout.js"></script>
				<script>
					//Initiliaze
					var itemList, item, className, thisItem, newOrder, itemDesc, desc;

					itemList= $('#itemlist');
					item= itemList.children('img');

					itemDesc= $('#itemdescription');
					desc= itemDesc.children('span');

					//Add class name for each item
					item.each(function(index) {

					  className= 'item-' + index;
					  $(this).addClass(className).attr('data-order', index);
					});

					//Show first item description
					desc.filter(':first-child').fadeIn();

					//On clicked fire animation
					item.on('click', function() {

					  thisItem= $(this);
					  thisOrder = parseInt(thisItem.attr('data-order')) - 1;

					  thisItem.addClass('show');

					  //Reorder item position
					  item.on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function() { 

					    thisItem.removeClass().addClass('item-0').attr('data-order', '0');

					    //Show selected item description
					    desc.hide();
					    desc.filter('[data-for=' + thisItem.attr('id') + ']' ).fadeIn('fast');
					  });

					  //Move siblings items backward
					window.setTimeout(function () {

					  for(var i = thisOrder; i >= 0; i--) {

					    //Reorder item position
					    movedItem = item.filter('[data-order=' + i + ']');
					    newOrder= parseInt(movedItem.attr('data-order')) + 1;
					    className = 'item-' + newOrder;

					    //Move them with transition
					    movedItem.removeClass().addClass('transition ' + className).attr('data-order', newOrder);

					    //Remove their transition
					    item.on('transitionend webkitTransitionEnd MSTransitionEnd oTransitionEnd', function() { 
					      item.removeClass('transition');
					    });
					  }
					}, 500);
				</script>
			</section>

		</div><!-- #primary .content-area -->
<?php get_footer(); ?>