<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="content-wrap">
		<div id="content" class="space-top min-max">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<h2 class="page-title"><?php _e( 'Location not Found', 'twentyfourteen' ); ?></h2>
			<div class="post-content">
				<h4><?php _e( 'It looks like you may have typed in the wrong URL or the page you were looking for no longer exists.', 'twentyfourteen' ); ?></h4>
			</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</div>
	</div>

<?php
//get_sidebar();
get_footer();
