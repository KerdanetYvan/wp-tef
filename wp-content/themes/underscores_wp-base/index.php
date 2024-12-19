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
	<div class="container_articles">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="post">
				<img src="<?php  if(has_post_thumbnail() ) : the_post_thumbnail_url(); else : echo get_template_directory_uri(),"/img/logo.png"; endif;?>" alt="">
				<h1 class="title_post"><?php the_title(); ?></h1>
				<p class="desc_post"><?php the_excerpt(); ?></p>
				<p class="date_publish_post"><?php the_date(); ?></p>
				<a href="<?php the_permalink(); ?>">Lire l'article </a>
			</div>

		<?php endwhile; else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>