<?php

/**
 * Template Name: Blog
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>

    <?php endwhile; else : ?>
        <p>Aucun article trouvé</p>
    <?php endif; ?>
</main>
 
<?php get_footer(); ?>