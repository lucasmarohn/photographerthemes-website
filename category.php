<?php get_header(); ?>

	<main role="main" class="resources__page">
	<h1 class="resources__index__title"><?php echo single_cat_title(); ?></h1>
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

