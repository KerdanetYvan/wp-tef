<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_stater_theme
 */

get_header();
?>

   <h1 class="titreBlog">Le blog des curieux</h1>

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
         echo '<p class="errorSearch">Aucun tag trouvé.';
      }
      
      ?>
      
   </div>
	<main class="containerArticle">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article class="cardBlog">
            <?php the_post_thumbnail(); ?>
            <span class="containerTexteCard">
               <h2 class="titreArticle"><?php the_title() ?></h2>
               <div class="contenuArticle">
                  <?php the_excerpt(); ?>
               </div>
               <button><a href=<?= get_permalink() ?>>Lire l'article</a></button>
            </span>
         </article>
      <?php endwhile; else: ?>
         <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

   </main>
<?php
get_sidebar();
get_footer();
