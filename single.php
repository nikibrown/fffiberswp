

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header();?>

<main>
    <div class="container">
		<article>
			<div class="row">
				<div class="col-lg-12">
					<?php if ( 'multimedia' == get_post_type() ) { ?>
						<?php if( get_field('video') ): ?>
							<div class="embed-container">
								<?php the_field('video'); ?>
							</div>
							<?php endif; ?>

							<?php if( get_field('image') ): ?>
								<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />	
							<?php endif; ?>
						<?php } ?>
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	</div>
</main>
	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>