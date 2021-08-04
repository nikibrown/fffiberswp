<?php
/**
 * Template Name: Products
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

	<?php get_template_part( 'template-parts/breadcrumbs'); ?>

	<main class="secondary-page">
		<div class="container">
			<div class="row">
				
				<article class="offset-lg-1 col-lg-11">
					<p class="lead"><?php the_field("intro_text"); ?></p>
					<?php the_content(); ?>
				</article>
			</div>
		</div>

		<?php if( have_rows('product_category') ): ?>
			<?php while( have_rows('product_category') ): the_row(); 
				$product_category_image = get_sub_field('product_category_image');
				$product_category_headline = get_sub_field('product_category_headline');
				$product_category_description = get_sub_field('product_category_description');
				$product_category_link = get_sub_field('product_category_link');
				$product_category_link_url = $product_category_link['url'];
				$product_category_link_title = $product_category_link['title'];

				$product_banner_color = get_sub_field('product_banner_color');
				
			?>

			<section class="product <?php echo $product_banner_color; ?>">
				<div class="container">
					<div class="row row-min-height">
						<div class="offset-lg-1 col-lg-4">
							<div class="product-img" style="background-image: url('<?php echo $product_category_image; ?>');"></div>
						</div>
						<div class="col-lg-7">
							<div class="text-content">
								<div class="text-content-inner">
									<h2><?php echo $product_category_headline; ?></h2>
									<?php echo $product_category_description; ?>
									<a href="<?php echo $product_category_link_url; ?>" class="btn btn-secondary"><?php echo $product_category_link_title; ?> <i class="fas fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
		<?php endif; ?>	

	</main>

	<?php if( get_field('cta_banner_headline') ): ?>
		<?php get_template_part( 'template-parts/banner'); ?>
	<?php endif; ?>

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>