<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<header>
		<nav class="nav--top container" role="navigation">
			<a href="<?php echo get_home_url(); ?>" class="logo"><span class="logotype"><strong>Photographer</strong>Themes</span></a>

			<?php if ( have_rows( 'navigation_items_list', 'option' ) ) : ?>
			<input type="checkbox" id="nav__checkbox" name="nav__checkbox">
			<label for="nav__checkbox" id="nav__label">
				<img id="nav__hamburger" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/hamburger.svg" alt="toggle mobile navigation menu">
				<img id="nav__close" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/close.svg" alt="toggle mobile navigation menu">
			</label>
			<ul class="nav__list">
				<?php while ( have_rows( 'navigation_items_list', 'option' ) ) : the_row(); ?>
					<li class="nav__item nav__item__parent">

						<?php $navigation_link = get_sub_field( 'navigation_link' ); ?>
						<?php if ( $navigation_link && get_sub_field('highlight_link') == 0 ) { 
							$is_parent_active = is_page( $navigation_link['title'] );
							?>
							<a class="nav__link <?php if( $is_parent_active || $navigation_link['title'] === 'Resources' && is_home() ) {echo 'nav__link--active'; } ?>" href="<?php echo $navigation_link['url']; ?>" target="<?php echo $navigation_link['target']; ?>"><?php echo $navigation_link['title']; ?></a>
							
							<?php if ( have_rows( 'link_children' ) ) : // Has child link ?>
							<nav <?php if($is_parent_active) {echo 'style="z-index: 5";" class="subnav--top subnav--active"';} else {echo 'class="subnav--top"';} ?>>
							<ul class="subnav__list">

								<?php while ( have_rows( 'link_children' ) ) : the_row(); ?>
								<li class="subnav__item">
									<?php $navigation_child_link = get_sub_field( 'navigation_child_link' ); ?>
									<?php if ( $navigation_child_link ) { ?>
										<a href="<?php echo $navigation_child_link['url']; ?>" target="<?php echo $navigation_child_link['target']; ?>" class="subnav__link"><?php echo $navigation_child_link['title']; ?></a>
									<?php } ?>
								</li>
								<?php endwhile; ?>
							</ul>
							<?php else : // No child link?>

							<?php endif; // has child link ?>
						<?php } else { ?>
						<?php 
							$cart_link = $navigation_link['url'];
							$cart_title = 'Checkout';
							if(WC()->cart->get_cart_contents_count() == 0) {
								$cart_link = get_home_url() . '/get-started';
								$cart_title = $navigation_link['title']; 
							} ?>
							<a class="nav__link <?php if ( get_sub_field( 'highlight_link' ) == 1 ) { echo 'nav__link--cta'; } ?>" 
							href="<?php echo $cart_link; ?>" 
							target="<?php echo $navigation_link['target']; ?>">
								<?php echo $cart_title; ?>
							</a>
						<?php } ?>
						
						
					</li>
				<?php endwhile; ?>
				<li class="nav__item" id="login">
					<?php if( ! is_user_logged_in() ) {
						echo '<a class="nav__link" href="' . wp_login_url( get_permalink() ) . '">Log in</a>';
					} else {
						echo '<a class="nav__link" href="' . get_home_url() . '/my-account">My Account</a>';
					} ?>

				</li>
			</ul>
			<?php endif; ?>
		</nav>
	</header>
