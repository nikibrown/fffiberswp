<?php
/**
 * The template for displaying homepage
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fffibers
 */ ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_header(); ?>

	<?php get_template_part( 'template-parts/slider'); ?>

	<section class="banner section-md">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-10 offset-lg-1 ">
					<p class="lead text-center text-white"><?php the_field("homepage_banner"); ?></p>
				</div>

			</div>
		</div>
	</section>

	<main>
		<section class="news section-lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="text-center">In The News</h2>
					</div>
					<?php $featured_news_items = get_field('featured_news_items');
						if( $featured_news_items ): ?>
						<?php foreach( $featured_news_items as $post ): 

							// Setup this post for WP functions (variable must be named $post).
							setup_postdata($post); ?>
						
								<div class="col-lg-4">
									<article>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail();?>
										</a>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p class="date"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
										<p><?php the_excerpt();?>
										</p>
									</article>
								</div>
						<?php endforeach; ?>
						</ul>
						<?php 
						// Reset the global post object so that the rest of the page works correctly.
						wp_reset_postdata(); ?>
					<?php endif; ?>

				</div><!--/.row-->
				<div class="row">
					<div class="col-lg-12 text-center">
						<a href="#" class="btn btn-primary">See All News <i class="fas fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				
			</div>
		</section>
	</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
