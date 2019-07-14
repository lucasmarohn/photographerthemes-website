<?php if ( have_rows( 'features' ) ) : ?>
<section class="features__section">
    <?php while ( have_rows( 'features' ) ) : the_row(); ?>
    <div class="feature">
        <div class="feature__content__col" >
            <div class="feature__content" id="content-<?php echo get_row_index(); ?>">
            <div class="feature__content__container">
                <h2 class="feature__name"><?php the_sub_field('feature_name'); ?></h2>
                <?php the_sub_field( 'feature_content' ); ?>
            </div>
            </div>
        </div>
        
        <?php $feature_image = get_sub_field( 'feature_image' ); ?>
        <?php if ( $feature_image ) { ?>
            <div class="feature__image" data-image-id="<?php echo get_row_index(); ?>">
                <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" />
            </div>
        <?php } ?>
    </div>
    <?php endwhile; ?>
</section>
<?php endif; ?>