<?php
/**
 * Template Name: FAQs 
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


					<?php if( have_rows('faqs') ): ?>
						<ul class="faqs">
							<?php while( have_rows('faqs') ): the_row(); 
								$question = get_sub_field('question');
								$answer = get_sub_field('answer');
							?>
								<li>
									<h3 class="question" data-toggle="collapse" data-target="#faq-<?php echo get_row_index(); ?>"><?php echo $question ?> <i class="fas fa-caret-right"></i></h3>
									<div class="answer collapse" id="faq-<?php echo get_row_index(); ?>">
										<?php echo $answer ?>
									</div>
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