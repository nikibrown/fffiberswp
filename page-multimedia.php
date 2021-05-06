<?php
/**
 * Template Name: Multimedia 
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

			<div class="row">

				<?php $args = array(
					'post_type' => array( 'multimedia' ),
					'numberposts' => -1,	
					'order' => 'ASC'
				);

				// The Query
				$query = new WP_Query( $args ); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="col-lg-4 d-flex align-items-stretch">

					<div class="card">
						<div class="embed-container">
							<?php the_field('video'); ?>
						</div>
						<div class="card-body">
							<h4 class="card-title"><?php the_title(); ?></h4>
							<?php $hasterms = get_the_term_list( get_the_ID(), 'research_area'); ?>

								<?php if( $hasterms) { ?>
									<p> 
										<?php foreach ( get_the_terms( get_the_ID(), 'research_area' ) as $tax ) {
											echo '<span><em>' . __( $tax->name ) . '</em></span>';
										} ?>
									</p>
								<?php } ?>
							<p class="card-text"><?php the_field("description"); ?></p>
						</div>
					</div>
						
					</div>

					
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>


				

			</div>

					
					<style>

						.card {
							margin-bottom: 2rem;
						}
					.embed-container { 
						position: relative; 
						padding-bottom: 56.25%;
						overflow: hidden;
						max-width: 100%;
						height: auto;
						
					} 

					.embed-container iframe,
					.embed-container object,
					.embed-container embed { 
						position: absolute;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
					}
				</style>
				</div>
			</div>
		</article>
	</div>
</main>
	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>