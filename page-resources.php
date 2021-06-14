<?php
/**
 * Template Name: Resources 
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


					<h3>Genome Highlights</h3>

					<table class="table accordion-table">
						<thead>
							<tr>
								<th scope="col"><h4>Name</h4></th>
								<th scope="col"><h4>Date of Isolation</h4></th>
								<th scope="col"><h4>Download</h4></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>

							<?php
							$genome_highlights = get_field('genome_highlights');
							if( $genome_highlights ): ?>

							<?php foreach( $genome_highlights as $genome_highlight ): 
								$g_title = get_the_title( $genome_highlight->ID );
								$g_date_of_isolation = get_field( 'date_of_isolation', $genome_highlight->ID );
								$g_ncbi_download = get_field( 'ncbi_download', $genome_highlight->ID );
								$g_biocyc_download = get_field( 'biocyc_download', $genome_highlight->ID );
								$g_details_heading_1 = get_field( 'details_heading_1', $genome_highlight->ID );
								$g_details_text_1 = get_field( 'details_text_1', $genome_highlight->ID );
								$g_details_heading_2 = get_field( 'details_heading_2', $genome_highlight->ID );
								$g_details_text_2 = get_field( 'details_text_2', $genome_highlight->ID );
								$g_details_heading_3 = get_field( 'details_heading_3', $genome_highlight->ID );
								$g_details_text_3 = get_field( 'details_text_3', $genome_highlight->ID );
								$g_details_heading_4 = get_field( 'details_heading_4', $genome_highlight->ID );
								$g_details_text_4 = get_field( 'details_text_4', $genome_highlight->ID );
								$g_details_heading_5 = get_field( 'details_heading_5', $genome_highlight->ID );
								$g_details_text_5 = get_field( 'details_text_5', $genome_highlight->ID );
							?>
							
							
								<?php $g_post_id = $genome_highlight->ID; ?>

								<tr class="parent">
									<th scope="row"><h4><?php echo $g_title; ?></h4></th>
									<td><p><?php echo $g_date_of_isolation; ?></p></td>
									<td>
										<?php if( $g_ncbi_download ): ?>
											<a href="<?php echo $g_ncbi_download; ?>"class="ncbi">NCBI <i class="fas fa-download fa-xs"></i></a>
										<?php endif; ?>

										<?php if( $g_biocyc_download ): ?>
											<a href="<?php echo $g_biocyc_download; ?>" class="biocyc">Biocyc <i class="fas fa-download fa-xs"></i></a>
										<?php endif; ?>
									</td>
									<td>
										<p class="details-link" data-toggle="collapse" data-target="#details<?php echo $g_post_id; ?>">
											Details <i class="fas fa-caret-down"></i>
										</p>
									</td>
								</tr>

								<tr class="details collapse" id="details<?php echo $g_post_id; ?>">
									<td colspan="4">
										<table>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php echo $dg_etails_heading_1; ?></h4>
														<?php echo $g_details_text_1; ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php echo $g_details_heading_2; ?></h4>
														<?php echo $g_details_text_2; ?>
													</div>
												</td>

												<td>
													<div class="details-item">
														<h4><?php echo $g_details_heading_3; ?></h4>
														<?php echo $g_details_text_3; ?>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php echo $g_details_heading_4; ?></h4>
														<?php echo $g_details_text_4; ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php echo $g_details_heading_45 ?></h4>
														<?php echo $g_details_text_5; ?>
													</div>
												</td>
												<td></td>
											</tr>
										</table>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php endif; ?>

						</tbody>
					</table>

					<p class="text-right"><a href="<?php echo esc_url( get_page_link( 104 ) ); ?>" class="btn btn-primary-outline">See All Genomes</a></p>

						<h3>Protocol Highlights</h3>

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

						<?php
							$protocol_highlights = get_field('protocol_highlights');
							if( $protocol_highlights ): ?>

							<?php foreach( $protocol_highlights as $protocol_highlight ): 
								$p_title = get_the_title( $protocol_highlight->ID );
								$p_description = get_field( 'description', $protocol_highlight->ID );
								$p_link = get_field( 'link', $protocol_highlight->ID );
								$p_download = get_field( 'download', $protocol_highlight->ID );
								$p_details_heading_1 = get_field( 'details_heading_1', $protocol_highlight->ID );
								$p_details_text_1 = get_field( 'details_text_1', $protocol_highlight->ID );
								$p_details_heading_2 = get_field( 'details_heading_2', $protocol_highlight->ID );
								$p_details_text_2 = get_field( 'details_text_2', $protocol_highlight->ID );
								$p_details_heading_3 = get_field( 'details_heading_3', $protocol_highlight->ID );
								$p_details_text_3 = get_field( 'details_text_3', $protocol_highlight->ID );
								$p_details_heading_4 = get_field( 'details_heading_4', $protocol_highlight->ID );
								$p_details_text_4 = get_field( 'details_text_4', $protocol_highlight->ID );
								$p_details_heading_5 = get_field( 'details_heading_5', $protocol_highlight->ID );
								$p_details_text_5 = get_field( 'details_text_5', $protocol_highlight->ID );
							?>
							
							
								<?php $p_post_id = $protocol_highlight->ID; ?>
								

								<tr class="parent">
									<th scope="row"><h4><?php echo $p_title; ?></h4></th>
									<td><p><?php echo $p_description; ?></p></td>
									<td>
										<?php if( $p_link ): ?>
											<a href="<?php echo $p_link; ?>">Link <i class="fas fa-link fa-xs"></i></a>
										<?php endif; ?>

										<?php if( $p_download ): ?>
											<a href="<?php echo $p_download; ?>">Download <i class="fas fa-download fa-xs"></i></a>
										<?php endif; ?>
									</td>
									<td>
										<p class="details-link" data-toggle="collapse" data-target="#details<?php echo $p_post_id; ?>">
											Details <i class="fas fa-caret-down"></i>
										</p>
									</td>
								</tr>

								<tr class="details collapse" id="details<?php echo $p_post_id; ?>">
									<td colspan="4">
										<table>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php echo $p_details_heading_1; ?></h4>
														<?php echo $p_details_text_1; ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php echo $p_details_heading_2; ?></h4>
														<?php echo $p_details_text_2; ?>
													</div>
												</td>

												<td>
													<div class="details-item">
														<h4><?php echo $p_details_heading_3; ?></h4>
														<?php echo $p_details_text_3; ?>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="details-item">
														<h4><?php echo $p_details_heading_4; ?></h4>
														<?php echo $p_details_text_4; ?>
													</div>
												</td>
												<td>
													<div class="details-item">
														<h4><?php echo $p_details_heading_45 ?></h4>
														<?php echo $p_details_text_5; ?>
													</div>
												</td>
												<td></td>
											</tr>
										</table>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php endif; ?>

												
						</tbody>
					</table>

					<p class="text-right"><a href="<?php echo esc_url( get_page_link( 125 ) ); ?>" class="btn btn-primary-outline">See All Protocols</a></p>

				

				
				</div>

			</div>
		</div>
	</article>
</main>
	
<?php endwhile; endif; ?>

	
<?php get_footer(); ?>