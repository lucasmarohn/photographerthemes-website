<?php get_header(); ?>

<main role="main" class="resources__page">
	<h1 class="resources__index__title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		<!-- section -->
		<section class="resources__index">
		
			<div class="container resources__container">
				<?php get_template_part('searchform'); ?>
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div><!-- container -->

			<?php get_sidebar(); ?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

