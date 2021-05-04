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
 * @package prime
 */

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header();?>

<main>
    <div class="container">
		<?php get_template_part( 'template-parts/secondary-nav'); ?>
		<article>
			<div class="row">
				<div class="col-lg-12">
					<?php if( get_field('lead_headline') ): ?>
						<div class="lead-section">
							<p class="lead">
								<?php the_field("lead_headline"); ?>
							</p>

							<?php if( get_field('lead_intro_text') ): ?>
								<?php the_field("lead_intro_text"); ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
		</div>
	</article>
</main>
	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>