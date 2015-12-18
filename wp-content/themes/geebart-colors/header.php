<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=980px, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<!-- <link href="<?php echo get_bloginfo('template_directory'); ?>/css/spectrum.css" rel="stylesheet" type="text/css"/> -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h1>Welcome to GeebArt - The Front-End of Technology and Interactive Experiences</h1>
	<nav>
		<div class="min-max">
			<a id="mobile-nav-toggle" href="" title="mobile nav toggle">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<ul id="main-nav">
				<div class="screen"></div>
				<ul id="geeb-logo">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<li id="mobile-home-link"><a href="<?php echo site_url('/'); ?>" title="Home">Home</a></li>
				<li><a href="<?php echo site_url('/blog'); ?>" title="Blog">Blog</a></li>
				<li><a href="<?php echo site_url('/about'); ?>" title="About">About</a></li>
				<li><a href="<?php echo site_url('/contact'); ?>" title="Contact">Contact</a></li>
				<li><a href="https://www.linkedin.com/pub/christopher-%22geeber%22-smith/28/73b/676" target="_blank" title="Resume">Resume</a></li>
				<li><a href="<?php echo site_url('/hire-me'); ?>" title="Hire Me">Hire Me</a></li>
			</ul>
			<div id="search-wrap">
				<form id="search-form">
					<input id="search-text" name="search-text" value="search geebart.com" type="text"/>
				</form>
				<a id="search-submit" href="" title="search-submit"></a>
			</div>
			<a id="settings-toggle" href="" title="settings toggle">
				<div class="dropdown">
			      <s></s>
			      <p><strong>GeebArt</strong> changes it's theme everytime you visit or click to a new page.<br><br><strong>Don't like the color palette?</strong>  Click the gear icon and select a new theme.</p>	  
				</div>
			</a>
		</div>
	</nav>
	<div id="content-wrap">