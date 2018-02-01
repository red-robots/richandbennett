<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper cap clear-bottom">
			<div class="logo col-1">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
			</div>
			<div class="col-2">
				<div class="box st-pats first">
					<a href="<?php echo get_permalink(7);?>">
						<img src="<?php echo get_template_directory_uri()."/images/icon-white-st-pats.png";?>" alt="white clover">
					</a>
				</div><!--.box-->
				<div class="box americrawl">
					<a href="<?php echo get_permalink(9);?>">
						<img src="<?php echo get_template_directory_uri()."/images/icon-white-americrawl.png";?>" alt="white star">
					</a>
				</div><!--.box-->
				<div class="box nye">
					<a href="<?php echo get_permalink(38);?>">
						<img src="<?php echo get_template_directory_uri()."/images/icon-white-nye.png";?>" alt="white glass">
					</a>
				</div><!--.box-->
				<div class="box halloween">
					<a href="<?php echo get_permalink(40);?>">
						<img src="<?php echo get_template_directory_uri()."/images/icon-white-halloween.png";?>" alt="white pumpkin">
					</a>
				</div><!--.box-->
				<div class="box tubing">
					<a href="<?php echo get_permalink(11);?>">
						<img src="<?php echo get_template_directory_uri()."/images/icon-white-tubing.png";?>" alt="white tubing">
					</a>
				</div><!--.box--> 
				<div class="box dots last">
					<img src="<?php echo get_template_directory_uri()."/images/more-dots.svg";?>" alt="dots">
				</div><!--.box--> 
				<nav class="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<img class="dots" src="<?php echo get_template_directory_uri()."/images/more-dots.svg";?>" alt="dots">
				</nav>
			</div><!--.col-2-->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
