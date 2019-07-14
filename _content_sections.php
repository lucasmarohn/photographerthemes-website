<?php if ( have_rows( 'flexible_content' ) ): ?>
	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'title_description' ) : ?>
            <?php include('content_sections/title_description.php'); ?>         
            
		<?php elseif ( get_row_layout() == 'columns' ) : ?>
			<?php include('content_sections/icon_cards.php'); ?>
            
        <?php elseif ( get_row_layout() == 'newsletter' ) : ?>
            <?php include('content_sections/newsletter.php'); ?>
		
		<?php elseif ( get_row_layout() == 'image' ) : ?>
			<?php include('content_sections/image.php'); ?>	
		
		<?php elseif ( get_row_layout() == 'content_columns' ) : ?>
			<?php include('content_sections/columns-all.php'); ?>

		<?php elseif ( get_row_layout() == 'wysiwyg' ) : ?>
			<?php include('content_sections/wysiwyg.php'); ?>

		<?php elseif ( get_row_layout() == 'cards_price' ) : ?>
			<?php include('content_sections/price-cards.php'); ?>

		<?php elseif ( get_row_layout() == 'testimonial' ) : ?>
			<?php include('content_sections/testimonials.php'); ?>
			
		<?php elseif ( get_row_layout() == 'feature' ) : ?>
			<?php include('content_sections/features.php'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section role="main" class="container">
		<?php the_content(); ?>
	</section>
	<?php endwhile; endif; ?>
<?php endif; ?>