<?php $col_count = count(get_sub_field('price_cards')); ?>
<?php if ( have_rows( 'price_cards' ) ) : ?>

<div class="container col--multi col--<?php echo $col_count; ?> col--pricing">
	<?php while ( have_rows( 'price_cards' ) ) : the_row(); ?>
  <div class="col--single card--price">
    <div class="price__title">
      <h2><?php the_sub_field( 'title' ); ?></h2>
      <p class="price__subtitle"><?php the_sub_field( 'subtitle' ); ?></p>
    </div>

    <div class="price__price">
      <div class="h1 price__amount"><?php the_sub_field( 'price' ); ?></div>
      <p><?php the_sub_field( 'sub_price' ); ?></p>
    </div>

		<?php if ( have_rows( 'features_list' ) ) : ?>
    <ul class="price__features-list">
			<?php while ( have_rows( 'features_list' ) ) : the_row(); ?>
				
				<?php $link = get_sub_field( 'link' ); ?>
				<?php if ( $link ) { ?>
					<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php the_sub_field( 'feature_item' ); ?></a></li>
				<?php } else { ?>
          <li><?php the_sub_field( 'feature_item' ); ?></li>
        <?php } ?>
			<?php endwhile; ?>
    </ul>
		<?php endif; ?>
		<?php if ( get_sub_field( 'featured_card' ) == 1 ) { 
		 // echo 'true'; 
		} ?>
    
    <?php $button = get_sub_field( 'button' ); ?>
		<?php if ( $button ) { ?>
      <div class="price__button">
			<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button price__button"><?php echo $button['title']; ?></a>
      </div>
    <?php } ?>
    
    </div><!-- cols--single -->
	<?php endwhile; ?>
</div><!-- cols--multi -->
<?php endif; ?>