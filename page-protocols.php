<?php
/**
 * Template Name: Protocols 
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
<?php endwhile; endif; ?>

<main>
    <div class="container">
		<!-- TODO: make subnavs works -->
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
		
					<table class="table accordion-table">
						<thead>
							<tr>
								<th scope="col"><h4>Name</h4></th>
								<th scope="col"><h4>Description</h4></th>
								<th scope="col"><h4>Link</h4></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
				
							<?php $args = array(
								'post_type' => array( 'protocols' ),
								'numberposts' => -1,	
								'order'          => 'DESC'
							);

							// The Query
							$query = new WP_Query( $args ); ?>

							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php $post_id = get_the_ID(); ?>

								<tr class="parent">
									<th scope="row"><h4><?php the_title(); ?></h4></th>
									<td><p><?php the_field("description"); ?></p></td>
									<td>
										<?php if( get_field('link') ): ?>
											<a href="<?php the_field("link"); ?>">Link <i class="fas fa-link fa-xs"></i></a>
										<?php endif; ?>

										<?php if( get_field('download') ): ?>
											<a href="<?php the_field("download"); ?>">Download <i class="fas fa-download fa-xs"></i></a>
										<?php endif; ?>
									</td>
									<td>
										<p class="details-link" data-toggle="collapse" data-target="#details<?php echo $post_id; ?>">
											Details <i class="fas fa-caret-down"></i>
										</p>
									</td>
								</tr>

								<tr class="details collapse" id="details<?php echo $post_id; ?>">
									<td colspan="4">
										<table>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php the_field("details_heading_1"); ?></h4>
														<?php the_field("details_text_1"); ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php the_field("details_heading_2"); ?></h4>
														<?php the_field("details_text_2"); ?>
													</div>
												</td>

												<td>
													<div class="details-item">
														<h4><?php the_field("details_heading_3"); ?></h4>
														<?php the_field("details_text_3"); ?>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php the_field("details_heading_4"); ?></h4>
														<?php the_field("details_text_4"); ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php the_field("details_heading_5"); ?></h4>
														<?php the_field("details_text_5"); ?>
													</div>
												</td>
												<td></td>
											</tr>
										</table>
									</td>
								</tr>

							


						
							<?php endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>
						</tbody>
					</table>

				
				</div>

			</div>
		</div>
	</article>
</main>
	


	
<?php get_footer(); ?>