<?php $background_image = get_field( 'background_image' ); ?>
<?php $align = get_field('text_align'); ?>
<section 
    <?php if ( $background_image ) { echo 'style="background-image: url(' . wp_get_attachment_url( $background_image['id'], 'large'  ). ');"'; } ?>
    class="content__hero hero--dark ">
    <div class="hero__copy container container--small copy--<?php echo $align; ?>">
        <h1 class="h1 hero__title"><?php the_field( 'title' ); ?></h1>
        <h2 class="h2 hero__subtitle"><?php the_field( 'subtitle' ); ?></h2>
        <h3 class="h2 hero__description"><?php the_field( 'description' ); ?></h3>
        <?php $button = get_field( 'button' ); ?>
        <?php if ( $button ) { ?>
            <a class="button button--large" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
        <?php } ?>
    </div>
</section>