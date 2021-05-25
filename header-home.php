<?php
/**
 * The header for the homepage
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


<?php if( get_field('header_background_image') ){ ?>
	<header style="background-image: url('<?php the_field("header_background_image"); ?>')">
<? } else { ?>
	<header style="background-image: url('<?php the_field("default_header_background_image", 'option'); ?>')">
<?php }  ?>


    <div class="container">
        <div class="header-inner">
            <div class="header-top">
                <a href="<?php bloginfo("url"); ?>" class="logo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/prime.svg" alt="" />
                </a>

                <nav class="nav--utility">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                             <a href="" data-toggle="modal" data-target="#searchmodal"><i class="fas fa-search fa-lg"></i></a>
                        </li>
						<?php get_search_form(); ?>
                        <li class="list-inline-item"><a href="<?php echo esc_url(get_page_link(186)); ?>">Contact Us</a></li>
                    </ul>

                    <p class="tagline">Principles of Microbial Ecosystems</p>
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
                                    href="<?php echo esc_url(get_page_link(174)); ?>"
                                    
                                    ><span>About</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(166)); ?>">FAQs</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(176)); ?>">Jobs</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(186)); ?>">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="<?php echo esc_url(get_page_link(135)); ?>"
                                   
                                    ><span>Research</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(138)); ?>">Physiology</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(141)); ?>">Communities</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(143)); ?>">Behavior</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(145)); ?>">Modeling</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="<?php echo esc_url(get_page_link(153)); ?>"
                                   
                                    ><span>People</span>
                                </a>

                                <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(153)); ?>">Current Members</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(156)); ?>">Past Members</a></li>
                                </ul>-->
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="<?php echo esc_url(get_page_link(58)); ?>"
                                   
                                    ><span>Publications</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="<?php echo esc_url(get_page_link(123)); ?>"
                                    
                                >
                                    <span>Resources</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(104)); ?>">Genomes</a></li>
                                    <li><a class="dropdown-item" href="<?php echo esc_url(get_page_link(125)); ?>">Protocols</a></li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo esc_url(get_page_link(132)); ?>">Microfluidic Devices</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="<?php echo esc_url(get_page_link(191)); ?>"
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



