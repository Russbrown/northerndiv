<?php
/**
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

<div class="contact">
	<a href="http://www.twitter.com/therusstler">Tweet me</a>

	<script type="text/javascript">
		//<![CDATA[
		<!--
		var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
		"=61){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
		".substr(0,ol);}f(\")79,\\\"QYSND[500\\\\L^400\\\\r\\\\771\\\\24=6730\\\\gz3" +
		"10\\\\38t?;0=*n\\\"\\\\8k!*!+500\\\\g030\\\\~'-4VJ530\\\\630\\\\gLP|720\\\\" +
		"XGQ[FC_a610\\\\B@GOa520\\\\SE@NAWR730\\\\rq~2wsxupV{c|`s|ck~771\\\\~xeafk@>" +
		"lvmi730\\\\020\\\\^'G730\\\\530\\\\500\\\\630\\\\U520\\\\OPY630\\\\300\\\\3" +
		"10\\\\130\\\\500\\\\130\\\\530\\\\G430\\\\t\\\\300\\\\010\\\\120\\\\000\\\\" +
		"r\\\\500\\\\\\\"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o" +
		";721=%y;2=*y))y+79(>i(fi{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(" +
		"f noitcnuf\")" ;
		while(x=eval(x));
		//-->
		//]]>
	</script>
</div>

<div class="comment list">
	<h2>Comments</h2>
    <?php comments_template(); ?>
</div>