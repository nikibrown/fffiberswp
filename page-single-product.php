<?php
/**
 * Template Name: Individual Product 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prime
 */

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_header();?>

	<?php if( get_field('header_image') ) { ?>
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
				<div class="col-lg-3">
					<aside class="sidebar-nav">
						<?php get_sidebar(); ?>
					</aside>
				</div>
				<article class="offset-lg-1 col-lg-8">
					<p class="lead"><?php the_field("intro_text"); ?></p>
					<?php the_content(); ?>

					<div class="row">
						<?php 
							$counter = 1;
							if( have_rows('gallery_images') ): ?>
								<?php while( have_rows('gallery_images') ): the_row(); 
									$gallery_image = get_sub_field('gallery_image');
									$gallery_image_description = get_sub_field('gallery_image_description');
								?>

							<div class="col-lg-4 col-sm-6 col-xs-12">
								<div class="card card-gallery" data-toggle="modal" data-target="#modal<?php echo $counter; ?>">
									<img src="<?php echo $gallery_image; ?>" alt="<?php echo $gallery_image_description; ?>" class="card-img-top">
									<div class="card-body">
										<p class="card-text"><small><?php echo $gallery_image_description; ?></small></p>
									</div>
								</div>
							</div>

							<div class="modal fade" id="modal<?php echo $counter; ?>"" tabindex="-1" role="dialog" aria-labelledby="modal<?php echo $counter; ?>"Label" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"><?php echo $gallery_image_description; ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
																	
										<div class="modal-body">
											<img src="<?php echo $gallery_image; ?>" alt="<?php echo $gallery_image_description; ?>" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
							<?php $counter++; ?>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</article>
			</div>
		</div>
	</main>

	<?php if( get_field('cta_banner_headline') ): ?>
		<?php get_template_part( 'template-parts/banner'); ?>
	<?php endif; ?>

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>