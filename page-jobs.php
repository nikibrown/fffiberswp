<?php
/**
 * Template Name: Jobs 
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


					<?php if( have_rows('jobs') ): ?>
						<ul class="jobs list-unstyled">
							<?php while( have_rows('jobs') ): the_row(); 
								$job_title = get_sub_field('job_title');
								$job_description = get_sub_field('job_description');
								$job_link = get_sub_field('job_link');
								
							?>
								<li>
									<h3><?php echo $job_title; ?></h3>
									<?php echo $job_description; ?>
									<?php if($job_link) { ?>
										<p><a href="<?php echo $job_link; ?>">Learn more</a></p>
									<?php } ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>


				</div>
			</div>
		</article>
	</div>
</main>
	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>