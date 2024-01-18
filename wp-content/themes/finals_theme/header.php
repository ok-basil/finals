<?php
/**
 * The header for our theme!
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finals_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'finals_theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="nav-menu" id="nav-menu">
			<div class="site-wrapper">
				<div class="menu-container" id="menu-container">
					<div class="site-branding logo-container" id="logo-container">
						<?php
							the_custom_logo();
						?>
					</div>
					<nav id="site-navigation" class="main-navigation navbar">
						<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><?php esc_html_e( '', 'finals_theme' ); ?>
							<div class="hamburger-container" id="click">
								<span class="hamburger first"></span>
								<span class="hamburger second"></span>
								<span class="hamburger third"></span>
							</div>

							<?php
								wp_nav_menu(
									array(
										'theme_location' 	=> 'mobile-menu',
										'menu_class' 		=> 'mobile-menu',
										'container' 		=> 'div',
										'container_class' 	=> 'mobile-list', 
										'container_id' 		=> 'mobile-list-menu',
										'menu_id'        	=> 'mobile-menu',
										'items_wrap' 		=> '<ul class="mobile-menu">%3$s</ul>',
									)
								);
							?>
						</button>
						<?php
							wp_nav_menu(
								array(
									'theme_location' 	=> 	'primary-menu',
									'container'			=>	'div',
									'container_class'	=>	'navbar-list',
									'container_id'		=>	'navbar-list',
									'menu_id'        	=> 	'primary-menu',
									'items_wrap'		=>	'<ul class="menu-list">%3$s</ul>'
								)
							);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	

