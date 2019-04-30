<?php $title = get_sub_field( 'title' ); ?>
<?php $desc = get_sub_field( 'description' ); ?>
<?php get_sub_field( 'testimonials_content' ); ?>
<?php $post_objects = get_sub_field( 'featured_testimonials' ); ?>

<?php 
$item_count = count( $post_objects ); 
if($item_count % 4 == 0) {
    $col_count = 4;
} else if($item_count % 3 == 0) {
    $col_count = 3;
} else if($item_count > 1) {
    $col_Count = 2;
} else {
    $col_count = 1;
}
?>

<section class="content__section <?php the_sub_field( 'bg_color' ); ?>">

<?php if($title || $desc) : ?>
<div class="content__meta container--small">     
    <h2 class="section__title h2"><?php echo $title; ?></h2>
    <p class="section__description"><?php echo $desc; ?></p>
</div>   
<?php endif; ?>

<?php if ( $post_objects ): ?>
<div class="col--multi col--<?php echo $col_count; ?> items--<?php echo $item_count; ?>">
    
    <?php if ( $post_objects ): ?>
        <?php foreach ( $post_objects as $post ):  ?>
        <div class="col--single">
            <div class="testimonial__item">
            <?php if( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php endif; ?>
                <?php setup_postdata( $post ); ?>
                <div class="testimonial__copy">
                    <blockquote class="testimonial__quote"><?php the_content(); ?></blockquote>
                    <span class="testimonial__author"><?php the_title(); ?></span>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php $link = get_sub_field( 'link' ); ?>
<?php if ( $link ) { ?>
    <a class="button button--center" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
<?php } ?>

</section>