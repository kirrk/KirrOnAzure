<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package help-is-here
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'help-is-here' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php if (is_front_page()) { ?>
		<div class="title-wrap">
			<div class="main-titles">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="siteTitle"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
  </div>

		<div class="site-branding">
			<div class="contain-jumbo">
				<div class="jumbotron current"><img class="help1" src=<?php echo get_template_directory_uri() . "/img/help1.jpg"; ?> /></div>
				<div class="jumbotron"><img class="help2" src=<?php echo get_template_directory_uri() . "/img/help2.jpg"; ?> /></div>
				<div class="jumbotron"><img class="help3" src=<?php echo get_template_directory_uri() . "/img/help3.jpg"; ?>  /></div>
				<div class="jumbotron"><img class="help4" src=<?php echo get_template_directory_uri() . "/img/help4.jpg"; ?> /></div>
		</div>
	</div>
<?php } ?>


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'help-is-here' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content">
