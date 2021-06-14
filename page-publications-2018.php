<?php
/**
 * Template Name: Publications 2018
 *
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
			<div class="col-lg-12">
				<ul class="list-inline">
					<li class="list-inline-item"><strong>Publications by year:</strong></li>
					<li class="list-inline-item"><a href="<?php echo esc_url(get_page_link(58)); ?>">2021</a></li>
					<li class="list-inline-item"><a href="<?php echo esc_url(get_page_link(581)); ?>">2020</a></li>
					<li class="list-inline-item"><a href="<?php echo esc_url(get_page_link(585)); ?>">2019</a></li>
					<li class="list-inline-item"><a href="<?php echo esc_url(get_page_link(586)); ?>">2018</a></li>
				</ul>
			</div>
		</div>

			<!-- <div class="row">
				<div class="col-lg-4">
					<select class="custom-select custom-select-lg mb-3 select-filter1">
						<option value="filter-area-all">View by Research Area</option>
						<option value="filter-all">All Research Areas</option>
						<option value="filter-physiology">Physiology</option>
						<option value="filter-communities">Communities</option>
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
			</div> -->
			
			<div class="row">
				<div class="col-lg-12">

					<ul class="publications list-unstyled">
			
						<?php 

						$args = array(
							'post_type' => 'publications',
							'numberposts' => -1,
							'meta_key' => 'year', 
							'meta_value' => '2018' ,
						);

						// The Query
						$query = new WP_Query( $args ); ?>

						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php get_template_part( 'template-parts/publication-info'); ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>

					</ul>
				
				</div>

			</div>
		</div>
	</article>
</main>
	


	
<?php get_footer(); ?>