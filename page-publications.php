<?php
/**
 * Template Name: Publications 
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
		<?php endwhile; endif; ?>

			<div class="row">
				<div class="col-lg-4">
					<select class="custom-select custom-select-lg mb-3 select-filter1">
						<!-- Loop through custom taxonomy terms -->
						<option value="filter-area-all">View by Research Area</option>
						<option value="filter-all">All Research Areas</option>
						<option value="filter-physiology">Physiology</option>
						<option value="filter-ecology">Ecology</option>
						<option value="filter-behavior">Behavior</option>
						<option value="filter-modeling">Modeling</option>
					</select>
				</div>
				<div class="col-lg-4">
					<select class="custom-select custom-select-lg mb-3 select-filter2">
						<option value="filter-all">View by Author</option>
						<option value="filter-all">All Authors</option>

						<?php $args = array(
							'post_type' => array( 'profiles' ),
							'numberposts' => -1,	
							'orderby'        => 'last_name',
							'order'          => 'ASC'
						);

						// The Query
						$query = new WP_Query( $args ); ?>

						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

						<?php 
							$name = get_the_title();
							$nameclass = strtolower(str_replace(' ', '', $name));
						?>

							<option value="filter-author-<?php echo $nameclass; ?>"><?php the_title(); ?></option>
							
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>


					</select>
				</div>
				<div class="col-lg-4">
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">

					<!-- TODO: somehow list year only once -->

					<!-- <h3><span class="year">2021</span></h3> -->

					<ul class="publications list-unstyled">
			
						<?php $args = array(
							'post_type' => array( 'publications' ),
							'numberposts' => -1,	
							'meta_key'       => 'publication_date',
							'orderby'        => 'meta_value_num',
							'order'          => 'DESC'
						);

						// The Query
						$query = new WP_Query( $args ); ?>

						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

						

							<li class="publication-single filter-content-single

								<?php $hasterms = get_the_term_list( get_the_ID(), 'research_area'); ?>

								<?php if( $hasterms) { ?>
					
									<?php foreach ( get_the_terms( get_the_ID(), 'research_area' ) as $tax ) {
										echo 'filter-' . strtolower($tax->name); 
									} ?>
								<?php } ?>
								
									<?php if( have_rows('principal_authors') ): while( have_rows('principal_authors') ): the_row();  ?>

									<?php $principle_author = get_sub_field('principle_author'); 

										if( $principle_author ): 
											$principle_author_title = $principle_author['title'];
											$nameclass = strtolower(str_replace(' ', '', $principle_author_title));
						
										?>
							
											filter-author-<?php echo $nameclass; ?>

										<?php endif; ?>

									<?php endwhile;  endif; ?>
								
								
								filter-all
							">

							<?php if( get_field('publication_url') ) { ?>

								
								<h3><a href="<?php the_field("publication_url"); ?>"><?php the_title(); ?></a></h3>
							<?php } else if( get_field('publication_file') ) { ?>
								<h3><a href="<?php the_field("publication_file"); ?>"><?php the_title(); ?></a></h3>

								<?php } else { ?>
									<h3><?php the_title(); ?></h3>

								<?php } ?>
							
								

								<?php the_field("publication_file"); ?>
								
								<p><em><?php the_field("publication_date"); ?>, </em><?php the_field("journal_name"); ?></p>

								<!-- TODO: WYSIWYG for now - cant get relationship query to display inside wp_query -->

								<div class="authors">
									<?php if( have_rows('principal_authors') ): while( have_rows('principal_authors') ): the_row();  ?>

									<?php $principle_author = get_sub_field('principle_author'); 

										if( $principle_author ): 
											$principle_author_url = $principle_author['url'];
											$principle_author_title = $principle_author['title'];
						
										?>
											<span><a  href="<?php echo esc_url( $principle_author_url ); ?>"><?php echo esc_html( $principle_author_title ); ?></a>, </span> 
										<?php endif; ?>


								 	<?php endwhile;  endif; ?>

									 <?php if( get_field('authors') ): ?>

										<?php the_field("authors"); ?>
									<?php endif; ?>
								</div>

								
							

								<?php $hasterms = get_the_term_list( get_the_ID(), 'research_area'); ?>

								<?php if( $hasterms) { ?>
									<p><strong>Research Area: </strong> 
										<?php foreach ( get_the_terms( get_the_ID(), 'research_area' ) as $tax ) {
											echo '<span>' . __( $tax->name ) . '</span>';
										} ?>
									</p>
								<?php } ?>
								
								<?php $post_id = get_the_ID(); ?>

								<p class="abstract-link" data-toggle="collapse" data-target="#abstract<?php echo $post_id; ?>">
                                    Abstract <i class="fas fa-caret-right"></i>
                                </p>

								<div class="abstract-details collapse" id="abstract<?php echo $post_id; ?>">
									<?php the_field("abstract"); ?>
								</div>
							</li>
					
					
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>

					</ul>
				
				</div>

			</div>
		</div>
	</article>
</main>
	


	
<?php get_footer(); ?>