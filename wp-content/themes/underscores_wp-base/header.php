<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_stater_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-stater-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="prim-menu">
			<h1>Tête en Fête</h1>
			<?php
			if (has_nav_menu('menu-1')) {
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
					'container' => 'nav',
					'container_class' => 'class-header-menu',
				));
			}
			?>
		</div>

		

		<div id="menu-button">
			<a href="/contact">Contact</a>
			<button id="rdv" href="/">Prendre rendez-vous</button>
		</div>


		
	</header><!-- #masthead -->
