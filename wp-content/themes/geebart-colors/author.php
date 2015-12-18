<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
	//SETUP QUERY VARS
	$p = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$author = get_query_var('author');

get_header(); ?>

	<section id="content" class="space-top">
		<div class="min-max">
			<?php if ( have_posts() ) : ?>
				<header>
					<h2>
						<?php
							the_post();
							printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() );
						?>
					</h2>
				</header>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							'author' 			=> $author,
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
get_footer();