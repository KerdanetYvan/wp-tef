<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package my_stater_theme
 */

get_header();
?>

	<main id="prim_404">
		<div id="div_404">
			<h1 id="h1_404">404</h1>
		</div>
		<div id="div_oops">
			<h2>Oups ! Cette page est introuvable</h2>
			<div>
				<a href="/wordpress-warriors"><h4><span class="p404_disappear">Retourner à la p</span><span class="p404_appear">P</span>age d'accueil</h4><img src="<?php echo get_template_directory_uri(); ?>/img/angle-petit-droit_vert.svg" alt="flèche droite verte" /></a>
			</div>
		</div>
	</main>

<?php
get_footer();
