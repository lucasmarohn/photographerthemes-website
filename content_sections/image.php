<?php $image = get_sub_field('single_image'); ?>

<?php if($image) : ?>
<section class="image--full">
    <img src="<?php echo $image['url']; ?>" />
</section>
<?php endif; ?>
