<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package prime
 */
 ?>


<?php get_header();?>

	<?php get_header();?>

	<?php if( get_field('field_name') ) { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("header_image"); ?>');">
	<? } else { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("default_sub_page_header_image", "option"); ?>');">
	<? } ?>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<h1>Error 404</h1>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/breadcrumbs'); ?>

	<main class="secondary-page">
		<div class="container">
			<div class="row">
				
				<article class="col-lg-12">
					<p class="lead"><?php esc_html_e( 'It looks like nothing was found at this location', 'prime' ); ?></p>
					<p>Try navigating to the page again or try searching. </p>
				</article>
			</div>
		</div>
	</main>



	
<?php get_footer(); ?>