<section class="content__section">

<div class="content__meta container--small">     
    <h2 class="section__title h2"><?php the_sub_field( 'columns_title' ); ?></h2>
    <p class="section__description"><?php the_sub_field( 'columns_description' ); ?></p>
</div>   


<?php 
$col_count = count( get_sub_field('column') ); 
if($col_count % 4 == 0) {
    $col_count = 4;
} else if($col_count % 3) {
    $col_count = 3;
} else if($col_count > 1) {
    $col_Count = 2;
} else {
    $col_count = 1;
}

?>
<?php if ( have_rows( 'column' ) ) : ?>

    <div class="col--multi col--<?php echo $col_count; ?>">
    <?php while ( have_rows( 'column' ) ) : the_row(); ?>
        <div class="col--single">
            <?php $card_image = get_sub_field( 'card_image' ); if($card_image || true) :?>
                <img src="<?php echo $card_image['url']; ?>" alt="" class="card__image">
            <?php endif; ?>
            <h3 class="h3"><?php the_sub_field( 'card_title' ); ?></h3>
            <p><?php the_sub_field( 'card_description' ); ?></p>
        </div>
    <?php endwhile; ?>
    </div>

    <?php $columns_button = get_sub_field( 'columns_button' ); ?>
    <?php if ( $columns_button ) { ?>
        <a class="button button--center" href="<?php echo $columns_button['url']; ?>" target="<?php echo $columns_button['target']; ?>"><?php echo $columns_button['title']; ?></a>
    <?php } ?>
<?php endif; ?>
</section>



