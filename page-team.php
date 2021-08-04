<?php
/**
 * Template Name: Team 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fffibers
 */

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header();?>

<section class="hero section-md" style="background-image: url('https://nikibrown.github.io/fffibers/assets/img/hero.jpg');">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-12">
				<h1>General Subpage</h1>
			</div>
		</div>
	</div>
</section>

<nav aria-label="breadcrumb" class="breadcrumb-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">About Us</a></li>
					<li class="breadcrumb-item active" aria-current="page">General Subpage</li>
				</ol>
			</div>
		</div>
	</div>
</nav>

<main class="secondary-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<aside class="sidebar-nav">
					<?php get_sidebar(); ?>
				</aside>
			</div>
			<article class="offset-lg-1 col-lg-8">
				<p class="lead"><?php the_field("intro_text"); ?></p>


						<?php the_content(); ?>
			
						<?php
							$counter = 1;
							$args = array(
								'post_parent' => $post->ID,
								'post_type' => 'page',
								'orderby' => 'menu_order'
							);

							$child_query = new WP_Query( $args );
						?>
						<div class="row">
							<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
							
								<div class="col-lg-4 col-sm-12">
									<div class="card card-bio">
										<div class="card-body">
											<a href="<?php the_permalink(); ?>"><img src="<?php the_field("headshot"); ?>" class="img-fluid" alt="<?php the_title(); ?><"></a>
											<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
											<p class="card-text"><?php the_field("title_or_role"); ?></p>
										</div>
									</div>
								</div>
								
						<?php if ($counter % 3 == 0) { ?>
							</div><!--/.row-->
							<div class="row">
						<?php } ?>

							<?php $counter++; ?>
						<?php endwhile; ?>

					</div><!--/.row-->






					
					

				


			</article>
		</div>
	</div>
</main>



<?php endwhile; endif; ?>
	
<?php get_footer(); ?>