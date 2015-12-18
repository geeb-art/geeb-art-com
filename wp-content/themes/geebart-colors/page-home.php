<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
	get_header(); 
?>
	<section id="hero" class="space-top">
		<div class="slide" style="background-image: url('http://geebart.com/wp-content/uploads/2014/04/kenmore_inspiration_single_post_final.jpg');">
			<div class="min-max">
				<div class="table absolute">
					<div>
						<div>
							<div class="content-wrap">
								<h2>Kenmore Community Relauch</h2>
								<h3>One of my more recent portfolio pieces.  See a site transformed into a responsive gem, complete with super smart API's, a custom design, slick interface and built by your's truly.</h3>
								<a class="button" href="<?php echo site_url('/'); ?>/professional/kenmore-community-relaunch" title="Delve into the Kenmore Community Project">see the project <s></s></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/hero/winston-brown-hero.jpg');">
			<div class="min-max">
				<div class="table absolute">
					<div>
						<div>
							<div class="content-wrap">
								<h2>The Wordly Travels of Winston Brown</h2>
								<h3>Explore the familiar but micro-fantasical world of a small plastic bear. Winston has an insatiable apetite to explore the big world around him.</h3>
								<a class="button" href="<?php echo site_url('/'); ?>/art/photography/travels-of-wb-isu" title="Explore the Wordly Travels of Winston Brown">meet winston <s></s></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/hero/rise_front_end_dev_final.jpg');">
			<div class="min-max">
				<div class="table absolute">
					<div>
						<div>
							<div class="content-wrap">
								<h2>Rise of the Front-End Developer</h2>
								<h3>With an ever increasing array of browsers, devices and screen resolutions, the Front-End of the web has become the most difficult job in the interactive space.</h3>
								<a class="button" href="<?php echo site_url('/'); ?>/blog/rise-of-the-front-end-developer" title="Learn about the Rise of the Front-End Developer">rise up <s></s></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/hero/trello-teck-stack.jpg');">
			<div class="min-max">
				<div class="table absolute">
					<div>
						<div>
							<div class="content-wrap">
								<h2>Recipe for the Perfect Site</h2>
								<h3>Upon researching the project management platform Terllo, I was compelled to build out the perfect website tech stack.  Learn about how Fog Creek build Trello and why it is such an amazing platform.</h3>
								<a class="button" href="<?php echo site_url('/'); ?>/blog/recipe-for-the-perfect-site" title="See the tech stack">learn more <s></s></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="min-max">
			<div class="featured">
				<h3>Hot off the Press <span><a href="<?php echo site_url('/'); ?>/blog/" title="View Geeb's Blog Posts">Read Geeb's most recent articles<s></s></a></span></h3>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							'cat' 				=> 'blog',
							'posts_per_page' 	=> 4
						);
						$posts = blog_query($args);
						foreach($posts as $post){
							$html .= post_card($post);
						}
						echo $html;
						$html = '';
					?>
				</div>
			</div>
			<div class="featured">
				<h3>Professional Prowess<span><a href="<?php echo site_url('/'); ?>/professional/" title="View Geeb's Potfolio">A collection of Geeb's latest and greatest comercial works<s></s></a></span></h3>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							'cat' 				=> 'professional',
							'posts_per_page' 	=> 4
						);
						$posts = blog_query($args);
						foreach($posts as $post){
							$html .= post_card($post);
						}
						echo $html;
						$html = '';
					?>
				</div>
			</div>
			<div class="featured">
				<h3>Creative Swag <span><A href="<?php echo site_url('/'); ?>/art/" title="View Geeb's Artistic Creations">A digital exhibition of Geeb's creations<s></s></a></span></h3>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							'cat' 				=> 'art',
							'posts_per_page' 	=> 4
						);
						$posts = blog_query($args);
						foreach($posts as $post){
							$html .= post_card($post);
						}
						echo $html;
						$html = '';
					?>
				</div>
			</div>
		</div>
	</section>
<?php
	//get_sidebar();
	get_footer();