
<?php $cols = count( get_sub_field('content_column') ); ?>
<section class="content__section section--columns container--full <?php the_sub_field( 'background_color' ); ?>">
<?php if ( have_rows( 'content_column' ) ) : ?>
    <div class="col--multi col--<?php echo $cols; ?> ">
        <?php while ( have_rows( 'content_column' ) ) : the_row(); ?>


        <div class="col--single">
            <?php if ( have_rows( 'column_sections' ) ): ?>
                <?php while ( have_rows( 'column_sections' ) ) : the_row(); ?>
                    <div class="column__section">


                    <?php if ( get_row_layout() == 'column_image' ) : ?>
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) { ?>
                            <div class="column__image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        <?php } ?>


                    <?php elseif ( get_row_layout() == 'column_wysiwyg' ) : ?>
                        <div class="column__text">
                            <?php the_sub_field( 'content' ); ?>
                        </div>

                    <?php elseif ( get_row_layout() == 'column_testimonial' ) : ?>
                        <?php $post_objects = get_sub_field( 'testimonial' ); ?>
                        <?php if ( $post_objects ): ?>
                            <?php foreach ( $post_objects as $post ):  ?>
                                <?php setup_postdata( $post ); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>


                    <?php endif; ?>


                    </div><!-- column__section -->
                <?php endwhile; ?>
            <?php endif; ?>


            </div><!-- col--single -->
        <?php endwhile; ?>
    </section><!-- content section -->
<?php endif; ?>