    <footer class="footer">
	<div class="container">
		<div class="footer__logo"><a href="<?php echo get_home_url(); ?>" class="logo"><span class="logotype"><strong>Photographer</strong>Themes</span></a></div>
		
		<nav class="nav--footer" role="navigation">
			<?php if ( have_rows( 'navigation_items_list', 'option' ) ) : ?>
			<ul class="nav__list">
				<?php while ( have_rows( 'navigation_items_list', 'option' ) ) : the_row(); ?>
					<li class="nav__item">

						<?php $navigation_link = get_sub_field( 'navigation_link' ); ?>
						<?php if ( $navigation_link ) { ?>
							<a class="nav__link <?php if ( get_sub_field( 'highlight_link' ) == 1 ) { echo 'nav__link--cta'; } ?>" href="<?php echo $navigation_link['url']; ?>" target="<?php echo $navigation_link['target']; ?>"><?php echo $navigation_link['title']; ?></a>
						<?php } ?>
						
					</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</nav>
		<p class="footer__meta-description">PhotographerThemes is dedicated to creating helpful, intuitive tools that help established and blossoming photographers grow their business and pursue their passion. We provide websites for photographers, photographer wordpress themes, and marketing resources for photographers.</p>
        <p class="footer__meta-copyright">&copy; <?php echo date('Y'); ?>
			 | All Rights Reserved.
			| <?php if( is_user_logged_in() ) : echo '<a href="' . wp_logout_url() . '">Logout</a>'; else : echo '<a href="' . wp_login_url() . '">Login</a>'; endif; ?>
				</p>
		</div>
    </footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/bcf9ddc79f8580f694f82daf8/772976407f2969c76292e4d7b.js");</script>

	</body>
</html>
