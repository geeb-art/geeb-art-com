<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

	//SETUP QUERY VARS
	$p = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$year = get_query_var('year');
	$month = get_query_var('month');

get_header(); ?>

	<section id="content" class="space-top">
		<div class="min-max">
			<?php if ( have_posts() ) : ?>
				<header>
					<h2>
						<?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

							else :
								_e( 'Archives', 'twentyfourteen' );

							endif;
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
							'year'				=> $year,
							'month'				=> $month,
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
