<section class="content__section <?php the_sub_field( 'background_color' ); ?>">
    <div class="col--one">
        <div class="content__meta container--small">
            <h3 class="section__title h2"><?php the_sub_field( 'title' ); ?></h3>
            <p class="section__description"><?php the_sub_field( 'description' ); ?></p>
            <?php $button = get_sub_field('button'); ?>
            <?php if ( $button ) { ?>
                <a class="button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>