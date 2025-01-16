<?php
// single.php va nous permettre de gérer l'affichage des articles

get_header();


// nous appelons la boucle wordpress 
?>
<article class="containerArticleSingle">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- on affiche l'image mise en avant de l'article  -->
	<?php if (has_post_thumbnail()) : ?>
		<div class="banner">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

    <div class="containerTexteArticleSingle">
        <a href="<?= home_url(); ?>/articles" class="retourArticleSingle">Retour</a>
        <!-- on affiche le titre de l'article  -->
        <h1><?php the_title(); ?></h1>

        <!-- date et auteur de l'article  -->
        <p class="articleSingleDateAutor"><?php the_time('d/m/Y') ?> - <?php the_author();?></p>


        <!-- on affiche le contenu de l'article  -->
        <div class="contenuArticle">
            <?php the_content()?>
        </div>
        <a href="<?= home_url(); ?>/articles" class="retourArticleSingle">Retour</a>
    </div>
    <div class="articleHilight">
        <h2 class="titleHilightPart">Lire plus d’articles</h2>
        <?php 

         // plugin de mise en avant 
         
        $datas = highlighting();
        ?>
        <div class="containerArticle">
        <?php
        if(!empty($datas)){
            foreach($datas as $data){
                $article = get_post($data);
                $title = esc_html($article->post_title); // Sécurisation des données
                $contenu = apply_filters('the_excerpt', $article->post_excerpt);
                $extrait = get_the_excerpt($article);
                $id = $article->ID;
                $thumbnail_url = has_post_thumbnail($id) ? esc_url(get_the_post_thumbnail_url($id)) : null;
                $link = esc_url(get_permalink($id));
                ?>
                <article class="cardBlog">
                    <?= '<img src="'. $thumbnail_url .'"/>'; ?>
                    <span class="containerTexteCard">
                        <h2 class="titreArticle"><?= $title ?></h2>
                        <div class="contenuArticle">
                            <?= $extrait ?>
                        </div>
                        <button><a href="<?php $link ?>">Lire l'article</a></button>
                    </span>
                </article>
                <?php
            }
            ?>
            </div>
            <?php
        }else {
            echo '<p>Aucun article mis en avant !</p>';
        }
        ?>
    </div>









    <?php endwhile; else: ?>
		<main class="containerArticleError">
			<p><?php _e('Aucun article ne correspond à votre recherche.'); ?></p>

		</main>


    <?php endif; ?>
</article>

<?php
get_footer();