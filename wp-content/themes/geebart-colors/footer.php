<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			</div><!-- #content-wrap -->
			<footer>
				<section id="posts-listings">
					<div class="min-max">
						<div class="listing">
							<h4>Most Commented</h4>
							<ul class="links">
								<?php
									$args = array(
										'nopaging'			=> 0,
										'orderby' 			=> 'comment_count',
										'order' 			=> 'DESC',
										'post_status'	 	=> 'publish',
										'cat' 				=>  false,
										'posts_per_page' 	=>  8
									);
									$posts = blog_query($args);
									foreach($posts as $post){
										$html .= post_link($post, true);
									}
									echo $html;
									$html = '';
								?>
							</ul>
						</div>
						<div class="listing">
							<h4>Most Recent</h4>
							<ol class="links">
								<?php
									$args = array(
										'nopaging'			=> 0,
										'orderby' 			=> 'date',
										'order' 			=> 'DESC',
										'post_status'	 	=> 'publish',
										'cat' 				=>  false,
										'posts_per_page' 	=>  8
									);
									$posts = blog_query($args);
									foreach($posts as $post){
										$html .= post_link($post, false);
									}
									echo $html;
									$html = '';
								?>
							</ol>
						</div>
						<div class="listing">
							<h4>Geeb's Picks</h4>
							<ol class="links">
								<?php
									$args = array(
										'nopaging'			=> 0,
										'orderby' 			=> 'date',
										'order' 			=> 'DESC',
										'post_status'	 	=> 'publish',
										'cat' 				=>  false,
										'posts_per_page' 	=>  8
									);
									$posts = blog_query($args);
									foreach($posts as $post){
										$html .= post_link($post, false);
									}
									echo $html;
									$html = '';
								?>
							</ol>
						</div>
					</div>
				</section>
				<section id="taxonomy-listings">
					<div class="min-max">
						<div class="listing">
							<h4>Top Categories</h4>
							<ul class="links">
								<?php
									$args = array(
										'type'                     => 'post',
										'child_of'                 => 0,
										'parent'                   => '',
										'orderby'                  => 'count',
										'order'                    => 'desc',
										'hide_empty'               => 1,
										'hierarchical'             => 1,
										'exclude'                  => '',
										'include'                  => '',
										'number'                   => 12,
										'taxonomy'                 => 'category',
										'pad_counts'               => false
									); 
									$categories = get_categories($args);
									foreach($categories as $category){
										$html .= category_link($category, true);
									}
									echo $html;
									$html = '';
								?>
							</ul>
						</div>
						<div class="listing">
							<h4>Top Tags</h4>
							<ul class="links">
								<?php
									$args = array(
										'type'                     => 'post',
										'child_of'                 => 0,
										'parent'                   => '',
										'orderby'                  => 'count',
										'order'                    => 'desc',
										'hide_empty'               => 1,
										'hierarchical'             => 1,
										'exclude'                  => '',
										'include'                  => '',
										'number'                   => 12,
										'taxonomy'                 => 'tag',
										'pad_counts'               => false
									); 
									$tags = get_tags($args);
									foreach($tags as $tag){
										$html .= tag_link($tag, true);
									}
									echo $html;
									$html = '';
								?>
							</ul>
						</div>
				</section>
				<section id="powered-by">
					<div class="min-max">
						<h3>GeebArt.com is Powered By:</h3>
						<ul>
							<li><a href="http://www.html5rocks.com/en/" target="_blank" title="html5 logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/html5-logo.png" alt="html5 logo"></a></li>
							<li class="inactive"><a href="http://angularjs.org/" target="_blank" title="angular logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/angular-logo.png" alt="angular logo">coming soon!</a></li>
							<li><a href="http://jquery.com/" target="_blank" title="jquery logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/jQuery-logo.png" alt="jquery logo"></a></li>
							<li><a href="http://wordpress.org/" target="_blank" title="wordpress logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/wordpress-logo.png" alt="wordpress logo"></a></li>
							<li><a href="http://www.css3.info/" target="_blank" title="css3 logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/css3-logo.png" alt="css3 logo"></a></li>
						</ul>
					</div>
				</section>
				<section id="footer-legal">
					<div class="min-max">
						<p>Copyright &copy; 2014 GeebArt &mdash; Chris "Geeb" Smith.</p>
						<p class="small">No coders were harmed during the creation of this site.</p>
					</div>
				</section>
			</footer>
			<ul id="settings-nav" class="space-top">
				<div class="screen"></div>
				<div class="min-max">
					<div>
						<div>
							<section id="settings" class="select-layer">
								<a class="close-modal" href="" title="close modal">&times;</a>
								<h4>Select a Theme</h4>
								<article id="build-layer">
									<h5>Building a theme allows you to change the design of GeebArt.com.  You can even save your color choices for the next time you visit. Select 4 colors below to create a palette.</h5>
									<ul id="color-selection">
										<li id="color-one">
											<h6>Main Background:</h6>
											<a class="color-link" title="first color">
												<ul class="colors">
													<li class="checked"></li>
												</ul>
												<span class="text-display"></span>
											</a>
										</li>
										<li id="color-two">
											<h6>Navigation Background:</h6>
											<a class="color-link" title="second color">
												<ul class="colors">
													<li class="checked"></li>
												</ul>
												<span class="text-display"></span>
											</a>
										</li>
										<li class="color-link" id="color-three">
											<h6>Headlines:</h6>
											<a title="third color">
												<ul class="colors">
													<li class="checked"></li>
												</ul>
												<span class="text-display"></span>
											</a>
										</li>
										<li id="color-four">
											<h6>Paragraphs:</h6>
											<a class="color-link" title="fourth color">
												<ul class="colors">
													<li class="checked"></li>
												</ul>
												<span class="text-display"></span>
											</a>
										</li>
										<li id="color-picker">
											<div><!-- Color Picker --></div>
											<input id="color-value" name="color-value" value="#000000"/>
											<a id="save-palette" class="button">next color &raquo;</a>	
										</li>
									</ul>
								</article>
								<article id="select-layer">
									<!-- <h5>Select a theme:</h5> -->
									<ul id="themes">
										<li id="classic">
											<a title="GeebArt Classic" data="classic">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												GeebArt Classic
											</a>
										</li>
										<li id="raz">
											<a title="big red raz" data="raz">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Big Red Raz
											</a>
										</li>
										<li id="goldfish">
											<a title="giant goldfish" data="goldfish">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Giant Goldfish
											</a>
										</li>
										<li id="moon">
											<a title="midnight moon" data="moon">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Midnight Moon
											</a>
										</li>
										<li id="cake">
											<a title="cake &amp; lies" data="cake">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Cake &amp; Lies
											</a>
										</li>
										<li id="sea">
											<a title="tranquility" data="sea">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Tranquility
											</a>
										</li>
										<li id="hotSauce">
											<a title="sriracha vs. wasabi" data="hotSauce">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Sriracha vs. Wasabi
											</a>
										</li>
										<li id="american">
											<a title="american vintage" data="american">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												American Vintage
											</a>
										</li>
										<li id="easterGhost">
											<a title="Easter Ghost" data="easterGhost">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Easter Ghost
											</a>
										</li>
										<li id="mysteryMachine">
											<a title="Mystery Machine" data="mysteryMachine">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Mystery Machine
											</a>
										</li>
										<li id="marcoSunset">
											<a title="Marco Sunset" data="marcoSunset">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Marco Sunset
											</a>
										</li>
										<li id="neonBurst">
											<a title="Neon Burst" data="neonBurst">
												<ul class="colors">
													<li class="color-1"></li>
													<li class="color-2"></li>
													<li class="color-3"></li>
													<li class="icon checked">b</li>
												</ul>
												Neon Burst
											</a>
										</li>
									</ul>
									<!-- <a id="build-layer" class="switch-layer" href="" title="build your own theme">Build your own theme &raquo;</a> -->
								</article>
							</section>
						</div>
					</div>
				</div>
			</ul>
		<style id="theme-styles"></style>
		<script id="theme-template" type="text/template">
			.<%= theme %>, .<%= theme %> footer > section{background:<%= primary %>;}
			.<% theme %> .links > li > a{color:<%= primaryDark %>}
			.<% theme %> .links > li > a:hover{color:<%= primaryExtraDark %>}
			.<%= theme %> footer, .<%= theme %> footer > section, .<%= theme %> #hero, .<%= theme %> .yarpp-related, .<%= theme %> .post-tax > div, .<%= theme %> .single header, .<%= theme %> .featured{border-color:<%= primaryDark %>;}
			.<%= theme %> #search-form > div span{color: <%= secondaryLight %>;}
			.<%= theme %> #search-form.focus > div span{color: <%= secondaryExtraLight %>;}
			.<%= theme %> a, .<%= theme %> a span, .<%= theme %> a s{color: <%= secondaryExtraLight %>;}
			.<%= theme %> a:hover, .<%= theme %> a:hover span, .<%= theme %> a:hover s{color: <%= secondaryUltraLight %>;}
			.<%= theme %> footer a, .<%= theme %> footer a *, .<%= theme %> h2, .<%= theme %> h3, .<%= theme %> h4, .<%= theme %> h2 a, .<%= theme %> h3 a, .<%= theme %> h4 a, .<%= theme %> h2 a *, .<%= theme %> h3 a *, .<%= theme %> h4 a *, .entry-content .yarpp-related h1{color:<%= tertiary %>;}
			.<%= theme %> footer a:hover, .<%= theme %> footer a:hover *{color:<%= tertiaryDark %>;}
			.<%= theme %> .featured h3 > span{color:<%= tertiaryDark %>;}
			.<%= theme %> h2 a:hover, .<%= theme %> h3 a:hover, .<%= theme %> h4 a:hover, .<%= theme %> h2 a:hover *, .<%= theme %> h3 a:hover *, .<%= theme %> h4 a:hover *{color:<%= tertiaryDark %>;}
			.<%= theme %> .button{background:<%= secondaryDark %>;color: <%= secondaryExtraLight %>;}
			.<%= theme %> .button:hover{background:<%= secondaryExtraDark %>;color: <%= secondaryUltraLight %>;}
			.<%= theme %> .text-link{color:<%= tertiary %>;}
			.<%= theme %> .text-link:hover{color:<%= tertiaryDark %>;}
			.<%= theme %> #content *{color:<%= quaternary %>;}
			.<%= theme %> #mobile-nav-toggle{border:.5rem solid <%= secondaryExtraLight %>;}
			.<%= theme %> #mobile-nav-toggle > span, .<%= theme %> nav > div > ul > li > a:before{background:<%= secondaryExtraLight %>;}
			.<%= theme %> #mobile-nav-toggle:hover, .<%= theme %> #mobile-nav-toggle:focus, .<%= theme %> #mobile-nav-toggle.active{border-color:<%= secondaryUltraLight %>;}
			.<%= theme %> #mobile-nav-toggle:hover > span, .<%= theme %> #mobile-nav-toggle:focus > span, .<%= theme %> #mobile-nav-toggle.active > span, .<%= theme %> #main-nav > li > a:hover:before, .<%= theme %> #main-nav > li > a:focus:before{background:<%= secondaryUltraLight %>;}
			.<%= theme %> .screen{background:<%= screen %>;}
			.<%= theme %> #hero .content-wrap{background:<%= primaryTransparent %>;border-color:<%= primary %>;}
			.<%= theme %> #hero h3{color:<%= quaternary %>;}
			.<%= theme %> #settings-toggle, .<%= theme %> nav > div > ul > li > a{color: <%= secondaryExtraLight %>;}
			.<%= theme %> #settings-toggle:hover:after, .<%= theme %> #settings-toggle.active:after, .<%= theme %> #settings-nav.active, .<%= theme %> nav > div > ul > li > a:hover, nav > div > ul > li > a:focus{color:<%= secondaryUltraLight %>;}
			.<%= theme %> nav{background:<%= secondary %>;border-color:<%= secondaryDark %>;}
			.<%= theme %> #settings{background: <%= modalBackground %>;}
			.<%= theme %> #settings > h4{background:<%= modalHeaderBackground %>;color: <%= modalHeaderColor %>;}
			.<%= theme %> #settings > article > *{color:<%= modalFontColor %>;}
			.<%= theme %> #settings h5, .<%= theme %> #settings h6{color:<%= modalFontColor %>;border-color:<%= modalFontColor %>}
			.<%= theme %> #settings a:hover{color:<%= modalHoverColor %>;}
			.<%= theme %> footer{background:<%= secondary %>;}
			.<%= theme %> #footer-legal p{color:<%= secondaryExtraDark %>;}
			.<%= theme %> #search-form{color: <%= secondaryLight %>;}
			.<%= theme %> #search-wrap.focus > #search-form{background-color:<%= secondaryDark %>;color:<%= secondaryUltraLight %>;}
			.<%= theme %> #search-form .caret{background-color:<%= secondaryUltraLight %>;}
			.<%= theme %> #search-wrap > #search-submit{color:<%= secondaryLight %>;}
			.<%= theme %> #search-wrap.focus > #search-submit{color:<%= secondaryLight %>;}
			.<%= theme %> #search-wrap > #search-submit:hover{}
			.<%= theme %> #search-wrap.focus > #search-submit:hover{color:<%= secondaryExtraLight %>;}
			.<%= theme %> #geeb-logo.active > li{background-color: <%= secondaryExtraLight %>;}
			.<%= theme %> #geeb-logo.active:hover > li{background-color:<%= secondaryUltraLight %>;}
			.<%= theme %> .close-modal{color:<%= modalFontColor %>;background: <%= modalHeaderColor %>;}
			.<%= theme %> .close-modal:hover{color:<%= modalHoverColor %>;background: <%= modalHeaderColor %>;}
			.<%= theme %> .dropdown{background:<%= primaryDark %>;}
			.<%= theme %> .dropdown s{border-color:transparent;border-bottom-color:<%= primaryDark %>;}
			.<%= theme %> .dropdown p, .<%= theme %> .dropdown p *{color:<%= quaternary %>;}
			@media only screen and (max-width : 980px) {
				.<%= theme %> nav > div > ul > li > a{background:<%= secondary %>;}
				.<%= theme %> nav > div > ul > li > a:hover, .<%= theme %> nav > div > ul > li > a:focus{background:<%= secondaryDark %>;}
			}
		</script>
		<script>
			/* GLOBALS */
			var rootURL = '<?php echo site_url('/'); ?>';
			var templateDirectory = '<?php echo get_bloginfo('template_directory'); ?>';
		</script>
		<!-- <script src="<?php echo get_bloginfo('template_directory'); ?>/js/zepto.min.js"></script> -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!-- <script src="<?php echo site_url('/'); ?>/wp-includes/js/jquery/jquery.js"></script> -->
		<!--[if IE 8]>
	        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
	        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/rem.min.js"></script>
	    <![endif]-->
	    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.ba-throttle-debounce.min.js"></script>
	    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.viewport.min.js"></script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/js/underscore-min.js"></script>
		<!-- <script src="<?php echo get_bloginfo('template_directory'); ?>/js/spectrum.js"></script> -->
		<script src="<?php echo get_bloginfo('template_directory'); ?>/js/fancyInput.js"></script>
		<!-- <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.mixitup.min.js"></script> -->
		<script src="<?php echo get_bloginfo('template_directory'); ?>/js/scripts.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-18545518-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<?php wp_footer(); ?>
	</body>
</html>