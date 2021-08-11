<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prime
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/img/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>

	<?php 
		global $post; 
		$post_id = $post->ID; 
	?>

	<style>
		/* Current page styling for sidebar */
		.page-id-<?php echo $post_id; ?> .page-id-<?php echo $post_id; ?> a {
			color: #cc3256;
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-4">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/fff-logo.svg" alt="" class="brand-logo">
					</a>
				</div>

				<div class="col-lg-8 sub-nav">
					<ul class="list-inline">
						<li class="list-inline-item">
                             <a href="" data-toggle="modal" data-target="#searchmodal">Search <i class="fas fa-search fa-lg"></i></a>
                        </li>
						<?php get_search_form(); ?>
						<li class="list-inline-item"><a href="<?php echo esc_url( get_page_link(54) ); ?>">Contact <i class="fas fa-at"></i></a></li>
					</ul>

					<p class="tagline">High Performance Materials</p>
				</div>

			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					Main Menu <span class="navbar-toggler-icon">☰</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<?php
						wp_nav_menu( array(
						'menu'              => 'Main Nav',
						'theme_location'    => 'header-menu',
						'depth'             => 2,
						'container'         => 'false',
						'menu_class'        => 'navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div>
			</nav>
		</div>
	</div>	
</header>