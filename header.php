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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<header>
	<div class="header-top">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-4">
					<a href="/">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/fff-logo.svg" alt="" class="brand-logo">
					</a>
				</div>

				<div class="col-lg-8 sub-nav">
					<ul class="list-inline">
						<li class="list-inline-item">
							<!-- <form class="header-search-form form-inline  my-lg-0">
								<input class="header-top-search form-control mr-sm-2" type="Search" placeholder="Search"
									aria-label="Search"> -->
								<span id="search-label" class="search-label d-inline-block">Search <i
										class="fas fa-search"></i></span>
							<!-- </form> -->
						</li>
						<li class="list-inline-item"><a href="">Contact <i class="fas fa-at"></i></a></li>
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
					<ul id="menu-main-nav" class="navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
						<li id="menu-item-557"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-557 nav-item">
							<a href="#" aria-haspopup="true" aria-expanded="false"
								class="dropdown-toggle nav-link" id="menu-item-dropdown-557"><span itemprop="name">About Us</span></a>
							<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-557">
								<li id="menu-item-559"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-559 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Team</span></a></li>
								<li id="menu-item-560"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-560 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Careers</span></a></li>
								<li id="menu-item-558"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-558 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Production Facility</span></a></li>
										<li id="menu-item-558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-558 nav-item"><a
												itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Contact us</span></a></li>
							</ul>
						</li>
						<li id="menu-item-565"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-565 nav-item">
							<a href="#" aria-haspopup="true" aria-expanded="false"
								class="dropdown-toggle nav-link" id="menu-item-dropdown-565"><span
									itemprop="name">Our Technology</span></a>
							<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-565">
								<li id="menu-item-577"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Fiber Materials Table</span></a></li>
								<li id="menu-item-576"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-576 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Mechanical Properties</span></a></li>
								<li id="menu-item-575"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-575 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Technical Data Sheets</span></a></li>
								
							</ul>
						</li>
						<li id="menu-item-565"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-565 nav-item">
							<a href="#" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"
								id="menu-item-dropdown-565"><span itemprop="name">Products</span></a>
							<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-565">
								<li id="menu-item-577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577 nav-item">
									<a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Fibers</span></a></li>
								<li id="menu-item-576" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-576 nav-item">
									<a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Powder</span></a></li>
								<li id="menu-item-575" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-575 nav-item">
									<a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Preforms</span></a></li>
						
							</ul>
						</li>
						<li id="menu-item-564"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-564 nav-item">
							<a href="#" aria-haspopup="true" aria-expanded="false"
								class="dropdown-toggle nav-link" id="menu-item-dropdown-564"><span
									itemprop="name">Industries &amp; Applications</span></a>
							<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-564">
								<li id="menu-item-596"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-596 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Aerospace</span></a></li>
								<li id="menu-item-595"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Industrial</span></a></li>
								<li id="menu-item-594"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-594 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Energy</span></a></li>
										<li id="menu-item-594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-594 nav-item"><a
												itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Semiconductor</span></a></li>
								
							</ul>
						</li>
						<li id="menu-item-570"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-570 nav-item">
							<a href="#" aria-haspopup="true" aria-expanded="false"
								class="dropdown-toggle nav-link" id="menu-item-dropdown-570"><span
									itemprop="name">In The News</span></a>
							<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-570">
								<li id="menu-item-571"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-571 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Genomes</span></a></li>
								<li id="menu-item-573"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-573 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Protocols</span></a></li>
								<li id="menu-item-572"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-572 nav-item"><a
										itemprop="url" href="#"
										class="dropdown-item"><span itemprop="name">Microfluidic Devices</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
		
	</div>



	
</header>