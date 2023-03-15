<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container header-wrapper flex flex-row flex-nowrap items-center justify-between py-[26px]">
			<div class="site-branding logo-wrapper max-w-[120px]">
				<?php the_custom_logo(); ?>
			</div>
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
