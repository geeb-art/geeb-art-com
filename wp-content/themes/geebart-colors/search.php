<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

	//SETUP QUERY VARS
	$p = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$s =  get_query_var('s');

get_header(); ?>

	<section id="content" class="space-top">
		<div class="min-max">
			<?php if ( have_posts() ) : ?>
				<header>
					<h2>
						<?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?>
					</h2>
				</header>
				<div class="listing">
					<?php
						$args = array(
							'nopaging'			=> 0,
							'orderby' 			=> 'DATE',
							'order' 			=> 'DESC',
							'post_status'	 	=> 'publish',
							's'					=> $s,
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