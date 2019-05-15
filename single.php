<?php get_header(); ?>

	<main class="resources__single resources__page">
	<!-- section -->
	<section role="main" class="container resources__container">

	<?php get_template_part('searchform'); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="resource__single__title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<div class="resource__meta">
				<span class="resource__categories">
						<?php the_category(' '); // Separated by commas ?>
				</span>
				<span class="date">Posted <?php the_time('F j, Y'); ?> </span>
				<span class="author"><?php _e( ' by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>
			<!-- /post details -->

			<div class="content__text">

			<?php the_content(); // Dynamic Content ?>
			</div>

			<div class="resource__meta__ resource__meta--footer">
				<div class="resource__tags">
					<?php the_tags( 'Read more about ', ' ', ''); // Separated by commas with a line break at the end ?>
				</div>
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			</div>
			<?php // comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

	<?php get_sidebar(); ?>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
