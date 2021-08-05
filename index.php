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


	<?php get_header();?>

	<?php if( get_field('field_name') ) { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("header_image"); ?>');">
	<? } else { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("default_sub_page_header_image", "option"); ?>');">
	<? } ?>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<h1>In The News</h1>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/breadcrumbs'); ?>

	<main class="secondary-page">
		<div class="container">
			<div class="row">
				
				<section class="col-lg-12">
					<div class="row">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="col-lg-4">
								<article>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('medium', ['class' => 'img-fluid my-4']); ?>
									</a>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="date"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
									<p><?php the_excerpt(); ?></p>
								</article>
							</div>
						<?php endwhile; ?>
						
						
						<?php endif; ?>
					</div>

					<div class="row">
						<div class="col-lg-12 mb-3">
							<p>
								<span class="float-right"><?php next_posts_link(); ?></span>
								<span class="float-left"><?php previous_posts_link(); ?></span>
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>




	
<?php get_footer(); ?>