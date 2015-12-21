<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfourteen_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'twentyfourteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', twentyfourteen_font_url() ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // twentyfourteen_setup
add_action( 'after_setup_theme', 'twentyfourteen_setup' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return array An array of WP_Post objects.
 */
function twentyfourteen_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'twentyfourteen_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function twentyfourteen_has_featured_posts() {
	return ! is_paged() && (bool) twentyfourteen_get_featured_posts();
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	/*register_widget( 'Twenty_Fourteen_Ephemera_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );*/
}
add_action( 'widgets_init', 'twentyfourteen_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function twentyfourteen_font_url() {
	$font_url = '';
	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_admin_fonts() {
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'twentyfourteen_admin_fonts' );

if ( ! function_exists( 'twentyfourteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentyfourteen_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	$classes[] = 'preload';

	return $classes;
}
add_filter( 'body_class', 'twentyfourteen_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function twentyfourteen_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'twentyfourteen_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function twentyfourteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );

// Implement Custom Header features.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Theme Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}

function get_featured_image($post){
	$imageURL = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
	if($imageURL){
		$post->featured_image_url = $imageURL[0];
	} else{
		require_once('functions/simple_html_dom.php');
	    $post_html = str_get_html($post->post_content);
	    $first_img = $post_html->find('img', 0);
	    if($first_img) {
	        $post->featured_image_url = $first_img->src;
	    } else{
	    	//DEFAULT IMAGE
	    	$post->featured_image_url = get_bloginfo('template_directory') . '/images/spacer_3x5.gif';
	    }
	}
	return $post->featured_image_url;
}

function blog_query($args){

	if(!is_numeric($args['cat']) && !strstr($args['cat'], ',')){
		$args['cat'] = get_category_by_slug($args['cat'])->term_id;
	}

	/*$args = array(
		'nopaging'			=> 0,
		'orderby' 			=> $orderby,
		'order' 			=> 'DESC',
		//'post_type' 		=> $post_type,
		'post_status'	 	=> 'publish',
		'author'			=> $author,
		'cat' 				=> $cat,
		'tag'				=> $tag,
		'year'				=> $year,
		'month'				=> $month,
		'paged' 			=> $p,
		'posts_per_page' 	=> $numberposts,
		's' 				=> $s,
		'post__in'			=> $include,
		'post__not_in' 		=> $exclude
	);*/
		
	$query = new WP_Query($args);
	$posts = $query->get_posts();

	foreach($posts as $post){
		$post->featured_image_url = get_featured_image($post);
	}

	return $posts;
}

function post_card($post){
	$categories = wp_get_post_categories($post->ID, array('fields' => 'slugs'));
	$catClass = implode(' ', $categories);
	$noImage = '';
	$postHTML = ''
		. '<article id="post-' . $post->ID . '" class="post ' . $catClass . ' ' . $noImage . '">'
			. '<a href="' . $post->guid . '" title="' . $post->post_title . '">'
				. '<img class="lazy" alt="' . $post->post_title . '" src="' . get_bloginfo('template_directory') . '/images/spacer_3x5.gif" data-lazy="' . $post->featured_image_url . '"/>'
			. '</a>'
			. '<h4>'
				. '<a href="' . $post->guid . '" title="' . $post->post_title . '">' . $post->post_title . '</a>'
			. '</h4>'
		. '</article>';
	return $postHTML;
}

function post_link($post, $showCounts){
	if($showCounts){
		$countHTML = '<span class="count">(' . $post->comment_count . ')</span> ';
	} else{
		$countHTML = '';
	}
	$postHTML = ''
		. '<li id="post-' . $post->ID . '">'
			. '<a href="' . $post->guid . '" title="' . $post->post_title . '">' .  $countHTML . $post->post_title . '</a>'
		. '</li>';
	return $postHTML;
}

function category_link($category, $showCounts){
	if($showCounts){
		$countHTML = '<span class="count">(' . $category->count . ')</span> ';
	} else{
		$countHTML = '';
	}
	$categoryHTML = ''
		. '<li id="category-' . $category->term_id . '">'
			. '<a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' .  $countHTML . $category->name . '</a>'
		. '</li>';
	return $categoryHTML;
}

function tag_link($tag, $showCounts){
	if($showCounts){
		$countHTML = '<span class="count">(' . $tag->count . ')</span> ';
	} else{
		$countHTML = '';
	}
	$tagHTML = ''
		. '<li id="tag-' . $tag->term_id . '">'
			. '<a href="' . get_tag_link($tag->term_id) . '" title="' . $tag->name . '">' .  $countHTML . $tag->name . '</a>'
		. '</li>';
	return $tagHTML;
}

function post_single($post){
	//GET DATA FOR DISPLAY
	$post->featured_image_url = get_featured_image($post);

	// CATEGORY LISTING
    $categories = get_the_category($post->ID);
    $categoryCounter = count($categories) - 1; // Total # of elems in array adjusted for 0 base
    $i = 0;
	$catstring = '';
   if ($categories){
        $catstring .= '<div><h4>Categorized:</h4><ul>';
    	foreach ($categories as $cat) {
    		if ($i != $categoryCounter) { // If it's not the last one...
    			$catstring .= '<li><a href="' . get_category_link($cat->term_id) . '" title="see more ' . $cat->name . '">' . $cat->name . '</a>, </li>';
    		} else { // If it is...
    			$catstring .= '<li><a href="' . get_category_link($cat->term_id) . '" title="see more ' . $cat->name . '">' . $cat->name . '</a></li>';
    		}
    		$i++;
    	}
        $catstring .= '</p></div>';
    } else {
        $catstring .= '';
    }

	// TAG LISTING
	$posttags = get_the_tags($post->ID);
	$tagCounter = count($posttags) - 1;
	$j = 0;
	$tagstring = '';
    if ($posttags){
        $tagstring .= '<div><h4>Tagged:</h4><ul>';
    	foreach($posttags as $tag) {
    		if ($j != $tagCounter) {
        		$tagstring .= '<li><a href="' . get_tag_link($tag->term_id) . '" title="see more ' . $tag->name . '">' . $tag->name . '</a>, </li>';
        	} else {
        		$tagstring .= '<li><a href="' . get_tag_link($tag->term_id) . '" title="see more ' . $tag->name . '">' . $tag->name . '</a></li>';
        	}
        	$j++;
      	}
        $tagstring .= '</ul></div>';
    } else {
        $tagstring .= '';
    }

	$postTitleURL = str_replace('#', '%23', $post->post_title);
	$year = get_the_date('Y');
	$month = get_the_date('m');
	$monthFull = get_the_date('F');
	$monthArchive = get_month_link($year, $month);
	$authorID = $post->post_author;
	$authorDisplayName = get_the_author_meta('display_name', $authorID);
	//$author = the_author($authorID);
	$content = apply_filters('the_content', $post->post_content );
	$postHTML = ''
		. '<article id="post-' . $post->ID . '" class="single">'
			. '<header>'
				. '<h2><a id="post-title" href="' . $post->guid . '" title="' . $post->post_title . '">' . $post->post_title . '</a></h2>'
				. '<h3>By: '
					. '<a class="author-archive" href="' . get_author_posts_url($authorID) . '" title="see more posts by ' . $authorDisplayName . '">' . $authorDisplayName . '</a><br>'
					. 'On: '
					. '<a class="month-archive" href="' . $monthArchive . '" title="see more posts during the month of ' . $monthFull . '">' . get_the_date() . '</a>'
				. '</h3>'
					. '<ul class="social-nav post-social">'
                            . '<li class="fb-link"><a class="icon" title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=' . $post->guid . '" target="_blank">6</a></li>'
                            . '<li class="tw-link"><a class="icon" title="Tweet on Twitter" href="http://twitter.com/share?text=' . $post->post_title . '&url=' . $post->guid . '" target="_blank">7</a></li>'
                            . '<li class="pin-link"><a class="icon" title="Share on Shop Your Way" href="http://pinterest.com/pin/create/button/?url=' . $post->guid . '&media=' . $post->featured_image_url . '&description=' . $post->post_title . '" target="_blank">8</a></li>'
                        . '</ul>'
				. '<!-- <a class="featured-image" href="' . $post->guid . '" title="' . $post->post_title . '" style="background-image:url(' . $post->featured_image_url . ');"></a> -->'
			. '</header>'
			. '<div class="entry-content">'
				. '' . $content . ''
			. '</div>'
			. '<div class="post-tax">'
				. $catstring
				. $tagstring
			. '</div>'
		. '</article>'
	;
	return $postHTML;
}
