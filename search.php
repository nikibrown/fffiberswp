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

<?php if ( have_posts() ) : ?>

<?php get_header();?>

<main>
    <div class="container">
		<?php get_template_part( 'template-parts/secondary-nav'); ?>
		<article>
			<div class="row">
				<div class="col-lg-12">
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							</li>
						<?php endwhile; endif; ?>

					</ul>
					
			</div></div>
			
		</article>
	</div>
</main>
	


	
<?php get_footer(); ?>