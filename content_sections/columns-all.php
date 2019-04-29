
<?php 
$col_count = 0;
$col_count = count( get_sub_field('wysiwyg_column') ); 
$col_bg_color = get_sub_field('background_color');
?>
<section class="col--full col--multi col--<?php echo $col_count; ?> <?php if($col_bg_color) { echo 'section--' . $col_bg_color; } ?>">
<?php if ( have_rows( 'wysiwyg_column' ) ) : ?>
    <?php while ( have_rows( 'wysiwyg_column' ) ) : the_row(); ?>



    <div class="col--single">
        <?php if ( have_rows( 'flexible_content' ) ): ?>
        <?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'title_description' ) : ?>
                <?php include('title_description.php'); ?>         
                
            <?php elseif ( get_row_layout() == 'columns' ) : ?>
                <?php include('columns.php'); ?>
                
            <?php elseif ( get_row_layout() == 'newsletter' ) : ?>
                <?php include('newsletter.php'); ?>
            
            <?php elseif ( get_row_layout() == 'image' ) : ?>
                <?php include('image.php'); ?>	
            
            <?php elseif ( get_row_layout() == 'wysiwyg_columns' ) : ?>
                <?php include('columns-all.php'); ?>

            <?php elseif ( get_row_layout() == 'wysiwyg' ) : ?>
                <?php include('wysiwyg.php'); ?>
            <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- col -->

    <?php endwhile; ?>
<?php endif; ?>
</section>