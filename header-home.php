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



<header style="background-image: url('<?php the_field("header_background_image"); ?>')">
    <div class="container">
        <div class="header-inner">
            <div class="header-top">
                <a href="#" class="logo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/prime.svg" alt="" />
                </a>

                <nav class="nav--utility">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href=""><i class="fas fa-search fa-lg"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="">Contact Us</a></li>
                    </ul>

                    <p class="tagline">Principals of Microbial Ecosystems</p>
                </nav>
            </div>
            <div class="header-bottom">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        Main Menu <span class="navbar-toggler-icon">&#9776;</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><span>About</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">FAQs</a></li>
                                    <li><a class="dropdown-item" href="#">Jobs</a></li>
                                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><span>Research</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Physiology</a></li>
                                    <li><a class="dropdown-item" href="#">Ecology</a></li>
                                    <li><a class="dropdown-item" href="#">Behavior</a></li>
                                    <li><a class="dropdown-item" href="#">Modeling</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><span>People</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Current Members</a></li>
                                    <li><a class="dropdown-item" href="#">Past Members</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><span>Publications</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <span>Resources</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Genomes</a></li>
                                    <li><a class="dropdown-item" href="#">Protocols</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Microfluidic Devices</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><span>Multimedia Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="page-title-container-home">
            <div class="page-title">
                <h1>
                    <?php the_field("header_hero_text"); ?>
                </h1>
            </div>
        </div>
    </div>
</header>