

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header();?>

<main>
    <div class="container">
		<article>
			<div class="row">
				<div class="col-lg-9">
					<p>
						<?php if( get_field("role_or_title") ): ?>
							<?php the_field("role_or_title"); ?>
						<?php endif; ?> 

						<?php if( get_field("location") ): ?>
							| <?php the_field("location"); ?> 
						<?php endif; ?> 
			
						<?php if( get_field("email") ): ?>
							| <a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a>
						<?php endif; ?> 
					</p>
					
					<h2>Bio</h2>
					
					<?php the_field("bio"); ?>

					<h2>Research Interests</h2>

					<?php the_field("research_interests"); ?>
				</div>
				<div class="col-lg-3">
					<img src="<?php the_field("photo"); ?>" alt="<?php the_title(); ?>" class="img-fluid">
				</div>
			</div>
		</article>
	</div>
</main>
	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>