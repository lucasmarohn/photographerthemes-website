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
			<a href="<?php echo get_home_url(); ?>" class="logo"><strong>Photographer</strong>Themes</a>

			<?php if ( have_rows( 'navigation_items_list', 'option' ) ) : ?>
			<ul class="nav__list">
				<?php while ( have_rows( 'navigation_items_list', 'option' ) ) : the_row(); ?>
					<li class="nav__item">

						<?php $navigation_link = get_sub_field( 'navigation_link' ); ?>
						<?php if ( $navigation_link ) { ?>
							<a class="nav__link <?php if( is_page( $navigation_link['title'] ) ) {echo 'nav__link--active'; } if ( get_sub_field( 'highlight_link' ) == 1 ) { echo 'nav__link--cta'; } ?>" href="<?php echo $navigation_link['url']; ?>" target="<?php echo $navigation_link['target']; ?>"><?php echo $navigation_link['title']; ?></a>
						<?php } ?>
						
						
					</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</nav>

		<?php if( is_page('themes') ) : ?>
		<nav class="subnav--top">
			<ul class="subnav__list">
			<li class="subnav__item"><a href="#0" class="subnav__link">Overview</a></li>
				<li class="subnav__item current_page_item"><a href="#0" class="subnav__link">Magnesium</a></li>
				<li class="subnav__item"><a href="#0" class="subnav__link">Sharpen</a></li>
			</ul>
		</nav>
		<?php endif; ?>
	</header>
