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
	<!-- font  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/wax6qve.css">
	<!-- font  -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div id="prim-menu">
			<!-- <h1>Tête en Fête</h1> -->


			<div class="container-menu-1">
				<!-- logo  -->
				<?php if(has_custom_logo()) : ?>
					<?php the_custom_logo(); ?>            
				<?php else : ?>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<!-- logo  -->
				<?php endif; ?>
				<div class="off" id="containerNavLink">
					<?php
					if (has_nav_menu('menu-1')) {
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'container' => 'nav',
							'container_class' => 'class-header-menu',
							// 'menu_class' => 'off'
						));
					}
					?>
					<?php
					if (has_nav_menu('menu-2')) {
						wp_nav_menu(array(
							'theme_location' => 'menu-2',
							'menu_id' => 'primary-menu-2',
							'container' => 'nav',
							'container_class' => 'class-header-menu-2',
							// 'menu_class' => 'off'
						));
					}
					?>

				</div>
			</div>
			<!-- menu hamburger qui -->
			<div class="menuHamburger">        
				<div id="barre1"></div>
				<div id="barre2"></div>
			</div>
			<!-- fin du menu hamburegr  -->

		</div>

		<!-- <div id="menu-button">
			<button id="rdv" href="/contact">Me contacter<img src="<?php echo get_template_directory_uri(); ?>/img/angle-petit-droit.svg" alt="arrow-right" id="fleche"/></button>
		</div> -->
	</header><!-- #masthead -->
