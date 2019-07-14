<?php get_header(); ?>
	<?php include('content_sections/hero.php'); ?>

	<main role="main" class="resources__page">
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
