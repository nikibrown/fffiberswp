<?php
/**
 * Template Name: Research Child Page 
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

					
					<?php endwhile; endif; ?>
				</div>
			</div>

			<div class="row">


		


					<div class="col-lg-12">
						<h2>Researchers</h2>
					</div>

					<?php $termstring = basename(get_permalink());?>

					<?php $args = array(
							'post_type' => array( 'profiles' ),
							'numberposts' => -1,	
							'orderby'        => 'last_name',
							'order'          => 'ASC',
							'tax_query' => array(
								array(
									'taxonomy' => 'research_areas',   // taxonomy name
									'field' => 'slug',           // term_id, slug or name
									'terms' => $termstring,                  // term id, term slug or term name
								)
							)
						);

						// The Query
						$query = new WP_Query( $args ); ?>

						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<div class="col-md-6">
								<div class="bio">
									<a href="<?php the_permalink(); ?>" class=" bio-headshot">
										<img src="<?php the_field("photo"); ?>" alt="" class="img-fluid" alt="<?php the_title(); ?>">
									</a>

									<div class="bio-details">
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<p><?php the_field("role_or_title"); ?></p>

										<p>
											<?php the_field("location"); ?><br>
											<?php the_field("lab"); ?>
										</p>
									</div>
								</div>
							</div>




							<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>


					
				</div>
			</div>
		</article>
	</div>
</main>
	


	
<?php get_footer(); ?>