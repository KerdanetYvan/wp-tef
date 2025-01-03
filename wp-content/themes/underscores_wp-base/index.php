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

	<main id="primary" class="site-main">

      <article class="containerLandingPage">
         <header>
         <h1 class="mainMenu">Un <span class="unedrlineMain">accompagnement</span> sur <span class="surroundedMain">mesure</span>  pour vos enfants</h1>
         <p class="landingPresentation">“Chaque pas, même petit, est une victoire vers l'autonomie et la confiance en soi.”</p>
         <button class="ctaLanding">Prendre rendez-vous</button>
         <div class="gridPictureLanding">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mask-group.webp" alt="image landing 1">
         </div>
         <?php wp_body_open(); ?>
            <div class="containerArticle"><?php
            //  the_title()
               ?></div>
         </header>
         <?php 

         $datas = highlighting();
         if(!empty($datas)){
            foreach($datas as $data){
               $article = get_post($data);
               $title = $article->post_title;
               $contenu = $article->post_content;
               $date = $article->post_date;
               echo $title;
               echo $contenu;
               echo $date;

            }
         }else {
            echo '<p>Aucun article mis en avant !</p>';
         }
         // get_post($data[72]);
         // $title = $billet->post_title;
         // $date = $billet->post_date;
         // $contenu = $billet->post_content;
         ?>

      </article>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; else: ?>
       <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
