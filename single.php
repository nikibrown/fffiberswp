<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fffibers
 */

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_header();?>

	<?php if( get_field('field_name') ) { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("header_image"); ?>');">
	<? } else { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("default_sub_page_header_image", "option"); ?>');">
	<? } ?>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/breadcrumbs-blog'); ?>

	<main class="secondary-page">
		<div class="container">
			<div class="row">
				
				<article class="offset-lg-1 col-lg-8">
					<p class="lead"><?php the_field("intro_text"); ?></p>
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</main>



<?php endwhile; endif; ?>
	
<?php get_footer(); ?>