
<?php if ( have_posts() ) : ?>

	<?php get_header();?>

	<?php if( get_field('field_name') ) { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("header_image"); ?>');">
	<? } else { ?>
	<section class="hero section-md" style="background-image: url('<?php the_field("default_sub_page_header_image", "option"); ?>');">
	<? } ?>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-12">
					<h1><?php printf( esc_html__( 'Search Results for: %s', 'prime' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/breadcrumbs'); ?>

	<main class="secondary-page">
		<div class="container">
			<div class="row">
				
				<article class="col-lg-12">
					<ul>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $post_type = get_post_type(); ?>

							
								<li>
									<h2><a href="<?php the_permalink(); ?>"><?php echo ucfirst($post_type); ?>: <?php the_title(); ?></a></h2>
								</li>
							
						<?php endwhile; endif; ?>
					</ul>
				</article>
			</div>
		</div>
	</main>

	
<?php get_footer(); ?>