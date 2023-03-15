
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer">
		<div class="container footer-wrapper">
			<div class="top-wrapper flex justify-center">
				<nav id="site-navigation" class="main-navigation menu-wrapper">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'header-menu',
							)
						);
					?>
				</nav>
			</div>
			<div class="bottom-wrapper">
				<div class="site-branding logo-wrapper">
					<?php the_custom_logo(); ?>
				</div>
				<div class="copyright">
					<span>© 2023 Infocentric. All Rights Reserved.</span>
				</div>
				<div class="privacy-policy">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'privacy-policy-menu',
								'menu_id'        => 'privacy-policy-menu',
							)
						);
					?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
