<section class="content__section ">
<?php 
$col_title = get_sub_field('columns_title');
$col_desc = get_sub_field('columns_description'); 
?>

<?php if($col_title || $col_desc) : ?>
<div class="content__meta container--small">     
    <h2 class="section__title h2"><?php echo $col_title; ?></h2>
    <p class="section__description"><?php echo $col_desc; ?></p>
</div>   
<?php endif; ?>


<?php 
$card_align = get_sub_field('card_text_align');
$item_count = count( get_sub_field('column') ); 
if($item_count % 4 == 0) {
    $col_count = 4;
} elseif($item_count % 3 == 0) {
    $col_count = 3;
} elseif($item_count > 1) {
    $col_count = 2;
} else {
    $col_count = 1;
}
?>

<?php if ( have_rows( 'column' ) ) : ?>

    <div class="container col--multi col--<?php echo $col_count; ?> items--<?php echo $item_count; ?>">
    <?php while ( have_rows( 'column' ) ) : the_row(); ?>
    <?php $link = get_sub_field('link'); ?>
    <?php if($link) : ?>
        <a class="col--single single--<?php echo $card_align; ?>" href="<?php echo $link['url']; ?>">
    <?php else : ?>
        <div class="col--single single--<?php echo $card_align; ?>">
    <?php endif; ?>
            <?php $card_image = get_sub_field( 'card_image' ); if($card_image) :?>
                <img src="<?php echo $card_image['url']; ?>" alt="" class="card__image">
            <?php endif; ?>
            
            <div class="card__copy">
                <h3 class="h3"><?php the_sub_field( 'card_title' ); ?></h3>
                <p><?php the_sub_field( 'card_description' ); ?></p>
            

            <?php if($link) : ?>
                <span class="card__cta"><?php echo $link['title']; ?></span>
                </div>
            </a>
            <?php else : ?>
            </div>
        </div>
<?php endif; ?>
    <?php endwhile; ?>
    </div>

    <?php $columns_button = get_sub_field( 'columns_button' ); ?>
    <?php if ( $columns_button ) { ?>
        <a class="button button--center" href="<?php echo $columns_button['url']; ?>" target="<?php echo $columns_button['target']; ?>"><?php echo $columns_button['title']; ?></a>
    <?php } ?>
<?php endif; ?>
</section>



