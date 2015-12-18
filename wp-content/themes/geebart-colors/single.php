<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
	<div id="content" class="space-top min-max">
			<?php
				echo post_single($post);
			?>
			<div id="comments">
				<?php
					//comments_template();
				?>
			</div>
		<?php
			get_sidebar();
		?>
	</div>
<?php
//get_sidebar( 'content' );
get_footer();
