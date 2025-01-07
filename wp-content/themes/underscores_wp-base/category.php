<?php
// la page category va nous permettre de ranger par cathégorie les articles 

get_header();

// ici mon code
// nous appelons la boucle wordpress 
?>
<div class="recherche">
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
<!-- singel cat titel permet de sélectionner tout les titre de la catégorie  -->
<!-- on affiche ici le titre de la catégorie -->
<div class="containerArticle">
    <h1>Cathégorie : <?php single_cat_title() ?></h1>
</div>
<!-- on affiche ici la description de la catégorie -->
 
<!-- <div class="containerArticle">
    <?php the_archive_description( '<div>', '</div>' ); ?>
</div> -->


<!-- ceci est un exemple pour afficher les images mise en avant d'un article -->

    <main class="containerArticle">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article class="cardBlog">
            <?php the_post_thumbnail(); ?>
            <span class="containerTexteCard">
               <h2 class="titreArticle"><?php the_title() ?></h2>
               <div class="contenuArticle">
                  <?php the_content(); ?>
               </div>
               <button><a href=<?= get_permalink() ?>>Lire l'article</a></button>
            </span>
         </article>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
   </main>







<?php
get_footer();