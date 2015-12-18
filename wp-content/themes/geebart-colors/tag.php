<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="content" class="space-top">
		<div class="min-max">
			<?php if ( have_posts() ) : ?>
				<header>
					<h2>
						<?php printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?>
					</h2>
				</header>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							'tag'				=> $tag,
							'posts_per_page' 	=> 24
						);
						$posts = array();
						$posts = blog_query($args);
						foreach($posts as $post){
							$html .= post_card($post, $featured);
						}
						echo $html;
						$html = '';
					?>
				</div>
			<?php
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
			?>
		</div>
		<?php
			// Previous/next page navigation.
			twentyfourteen_paging_nav();
		?>
	</section>
<?php
//get_sidebar();
get_footer();
