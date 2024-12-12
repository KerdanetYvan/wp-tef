<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_stater_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="menu-footer">
			<?php
				if(has_nav_menu('menu-general')){
					wp_nav_menu( array(
						'theme_location' => 'menu-general',
						'menu_id'        => 'footer-menu-2',
						'container'      => 'nav',
						'container_class'=> 'class-footer-menu',
					) );
				}
				if(has_nav_menu('menu-3')){
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'footer-menu-3',
						'container'      => 'nav',
						'container_class'=> 'class-footer-menu',
					) );
				}
			?>
		</div>
		<div class="site-info">
			<p>&copy; Virginie Villette - 34 rue de la Trigulbine, 75018 Paris</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
