<?php if ( have_rows( 'flexible_content' ) ): ?>
	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'title_description' ) : ?>
            <?php include('content_sections/title_description.php'); ?>         
            
		<?php elseif ( get_row_layout() == 'columns' ) : ?>
			<?php include('content_sections/columns.php'); ?>
            
        <?php elseif ( get_row_layout() == 'newsletter' ) : ?>
            <?php include('content_sections/newsletter.php'); ?>
		
		<?php elseif ( get_row_layout() == 'image' ) : ?>
			<?php include('content_sections/image.php'); ?>	
		
		<?php elseif ( get_row_layout() == 'wysiwyg_columns' ) : ?>
			<?php include('content_sections/columns-all.php'); ?>

		<?php elseif ( get_row_layout() == 'wysiwyg' ) : ?>
			<?php include('content_sections/wysiwyg.php'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>