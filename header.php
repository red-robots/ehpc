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
		<div class="row-1">
			<div class="wrapper cap">
				<div class="col-1">
					<img src="<?php echo get_template_directory_uri()."/images/white-logo.png";?>" alt="clear logo">
				</div><!--.col-1-->
				<nav class="col-2">
					<ul>
						<li><a href="<?php echo get_the_permalink(6);?>"><?php echo get_the_title(6);?></a></li>
						<li><a href="<?php echo get_the_permalink(8);?>"><?php echo get_the_title(8);?></a></li>
						<li><a href="<?php echo get_the_permalink(10);?>"><?php echo get_the_title(10);?></a></li>
						<li><a href="<?php echo get_the_permalink(12);?>"><?php echo get_the_title(12);?></a></li>
					</ul>
				</nav><!--.col-2-->
			</div><!--.wrapper.cap-->
		</div><!--.row-1-->
		<div class="row-2">
			<div class="wrapper cap">
				<?php if(is_home()) { ?>
					<h1 class="logo">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="<?php bloginfo('name'); ?>"></a>
					</h1>
				<?php } else { ?>
					<div class="logo">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="<?php bloginfo('name'); ?>"></a>
					</div>
				<?php } ?>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
					<?php switch(get_the_ID()):
						case 6:
							wp_nav_menu( array( 'theme_location' => 'smat' ) ); 
							break;
						case 10:
							wp_nav_menu( array( 'theme_location' => 'public-health' ) ); 
							break;
						case 8:
							wp_nav_menu( array( 'theme_location' => 'healthcare-preparedness' ) ); 
							break;
						case 12:
							wp_nav_menu( array( 'theme_location' => 'emergency-management' ) ); 
							break;
					endswitch;?>
					<?php $ancestors = get_post_ancestors( get_the_ID() );
					if($ancestors&&!empty($ancestors)):
						switch(array_pop($ancestors)):
							case 6:
								wp_nav_menu( array( 'theme_location' => 'smat' ) ); 
								break;
							case 10:
								wp_nav_menu( array( 'theme_location' => 'public-health' ) ); 
								break;
							case 8:
								wp_nav_menu( array( 'theme_location' => 'healthcare-preparedness' ) ); 
								break;
							case 12:
								wp_nav_menu( array( 'theme_location' => 'emergency-management' ) ); 
								break;
						endswitch;
					endif;?>
				</nav><!-- #site-navigation -->
			</div><!--.wrapper.cap-->
		</div><!--.row-2-->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
