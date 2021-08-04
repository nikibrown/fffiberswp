<?php
/**
 * Template Name: Team Member
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

<section class="hero section-md" style="background-image: url('https://nikibrown.github.io/fffibers/assets/img/hero.jpg');">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-12">
				<h1>General Subpage</h1>
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
				<figure class="figure headshot">
					<img class="figure-img img-fluid" src="<?php the_field("headshot"); ?>" alt="<?php the_title(); ?>">
					<figcaption class="figure-caption text-center"><a href="<?php the_field("linkedin_url"); ?>"><i class="fab fa-linkedin"></i> Linkedin</a></figcaption>
				</figure>
					
					
				
				<h2><?php the_title(); ?></h2>
				<p><strong><?php the_field("title_or_role"); ?></strong></p>

				<?php the_field("bio"); ?>
			</article>
		</div>
	</div>
</main>



<?php endwhile; endif; ?>
	
<?php get_footer(); ?>