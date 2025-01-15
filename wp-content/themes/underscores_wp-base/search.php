<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package my_stater_theme
 */

get_header();
?>

	<div class="recherche rechercheCategorie">
		<!-- barre de recherche  -->
		<?php get_search_form(); ?>
		<!-- on récupère tout les tags qui existent  -->
		<?php $cats = get_categories() ; 
		// si il y a des tags 
		if($cats){
			?>
			<ul class="navigationSearch">

			<?php
			foreach($cats as $cat){
			// on retire la catégorie créer pour le numéro de telephone présent dans le menu mobil 
				if($cat->name !== "Non classé"){
					echo'<li>';
					echo '<a href="'.get_category_link($cat->term_id). '">'. $cat->name . '</a>';
					echo'</li>';
				
				}
			}
			?>
			</ul>
			<?php
		}else{
			echo '<p class="errorSearch">Aucun tag trouvé.</p>';
		}
		
		?>
		
	</div>

	<main class="containerArticle searchArticle">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if (get_post_type() === 'post') : ?>
					<article class="cardBlog">
					<?php the_post_thumbnail(); ?>
					<span class="containerTexteCard">
						<h2 class="titreArticle"><?php the_title(); ?></h2>
						<div class="contenuArticle">
							<?php the_content(); ?>
						</div>
						<button>
							<a href="<?= get_permalink(); ?>">Lire l'article</a>
						</button>
					</span>
					</article>
				<?php endif; ?>
			<?php endwhile; ?>	
		<?php else: ?>
			<div class="containerArticleError">
				<p><?php _e('Aucun article ne correspond à votre recherche.'); ?></p>
			</div>
		<?php endif; ?>
	</main>


<?php
get_sidebar();
get_footer();
