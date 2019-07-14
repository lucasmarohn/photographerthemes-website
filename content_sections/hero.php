<?php 
$posts_ID = is_home() ? get_option('page_for_posts') : get_the_id();
$background_image = get_field( 'background_image', $posts_ID );
$align = get_field('text_align', $posts_ID); 
$color = get_field('hero_color', $posts_ID ) ?: 'dark';
?>
<section 
    <?php if ( $background_image ) { echo 'style="background-image: url(' . wp_get_attachment_url( $background_image['id'], 'large'  ). ');"'; } ?>
    class="content__hero hero--<?php echo $color; ?>">
    <div class="container">
        <div class="hero__copy copy--<?php echo $align; ?> container--small">
            <h1 class="h1 hero__title"><?php the_field( 'title', $posts_ID ); ?></h1>
            <h2 class="h2 hero__subtitle"><?php the_field( 'subtitle', $posts_ID ); ?></h2>
            <h3 class="h2 hero__description"><?php the_field( 'description', $posts_ID ); ?></h3>
            <?php $button = get_field( 'button' ); ?>
            <?php if ( $button ) { ?>
                <a class="button button--large" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>