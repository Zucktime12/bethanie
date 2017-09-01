<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newtheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato|League+Script" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/44084dce97.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newtheme' ); ?></a>

	
	<header class="header">

		<div class="header__utility">
			<div class="header__container">
				<?php wp_nav_menu( array( 'theme_location' => 'utility', 'menu_id' => 'utility-menu' ) ); ?>
			</div>	
		</div>

		<div class="header__hero">
			<div class="header__container">
				<h1>SubScript</h1>
				<h3>Something in cursive.</h3>
			</div>	
		</div>

		<nav class="header__nav">
			<div class="header__container">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav>
	</header><!-- /header -->


	<div id="content" class="site-content">
