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

	<main>



         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article class="containerLandingPage">
               <h2 class="containerArticle"><?php the_title() ?></h2>
               <?php the_content(); ?>

            </article>
         <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
         <?php endif; ?>
        <h2>------------ plugin de mise en avant ------</h2>
        <?php 

         // plugin de mise en avant 
         
         $datas = highlighting();
         if(!empty($datas)){
            foreach($datas as $data){
               $article = get_post($data);
               $title = $article->post_title;
               $contenu = $article->post_content;
               $date = $article->post_date;
               $date = $article->post_date;
               echo $title;
               echo $contenu;
               echo $date;
            }
         }else {
            echo '<p>Aucun article mis en avant !</p>';
         }
         get_post($data[72]);
         $title = $billet->post_title;
         $date = $billet->post_date;
         $contenu = $billet->post_content;
         ?>



	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
