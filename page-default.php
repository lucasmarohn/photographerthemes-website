<?php 
/* Template Name: Normal Template */
get_header(); ?>

<main class="resources__single resources__page">
	<section role="main" class="container resources__container">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php the_content(); // Dynamic Content ?>
        <?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
