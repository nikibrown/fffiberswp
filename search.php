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
		<article>
			<div class="row">
				<div class="col-lg-12">
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $post_type = get_post_type(); ?>

							<?php if ( 'publications' == get_post_type() ) { ?>
								<li>
									<h2>
										<?php if( get_field('publication_url') ) { ?>
											<a href="<?php the_field("publication_url"); ?>" target="_blank">
										<?php } else if( get_field('publication_file') ) { ?>
											<a href="<?php the_field("publication_file"); ?>" target="_blank">
										<?php } ?>
											<?php echo ucfirst($post_type); ?>: <?php the_title(); ?> <i class="fas fa-external-link-alt fa-xs"></i>
										</a>
									</h2>
								</li>
							<?php } else { ?>
								<li>
									<h2><a href="<?php the_permalink(); ?>"><?php echo ucfirst($post_type); ?>: <?php the_title(); ?></a></h2>
								</li>
							<?php } ?>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</article>
	</div>
</main>
	


	
<?php get_footer(); ?>