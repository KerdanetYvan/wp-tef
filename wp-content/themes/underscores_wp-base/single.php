<?php
// single.php va nous permettre de gérer l'affichage des articles

get_header();


// nous appelons la boucle wordpress 
?>

<article>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- on affiche l'image mise en avant de l'article  -->
	<?php if (has_post_thumbnail()) : ?>
		<div class="banner">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

    <!-- on affiche le titre de l'article  -->
    <div class="containerArticle">
        <h1><?php the_title(); ?></h1>
    </div>
    <!-- on affiche le contenu de l'article  -->
    <div class="contenuArticle">
        <?php the_content()?>
    </div>
    
    <!-- container qui va nous permettre de mettre la date de publication, la date de modification et l'auteur de l'article  -->
    <div class="containerArticle creation">
        <p>publier le <?php the_time('d/m/Y') ?></p>
        <!-- get_the_modified_date permet de savoir le moment où l'on a modifier l'article  -->
        <?php if(get_the_modified_date()!= get_the_date()) : ?>
            <p>modifier le <?php the_time('d/m/Y') ?></p>
        <?php endif ?>
        <p>créer par : <?php the_author();?></p>
 

    </div>









    <?php endwhile; else: ?>
		<main class="containerArticleError">
			<p><?php _e('Aucun article ne correspond à votre recherche.'); ?></p>

		</main>


    <?php endif; ?>
</article>

<?php
get_footer();