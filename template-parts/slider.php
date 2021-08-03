<?php if( have_rows('slider') ): ?>


<section class="home-slider">
	<?php while( have_rows('slider') ): the_row(); ?>
	<?php 
		$slide_background_image = get_sub_field('slide_background_image'); 
		$slide_headline = get_sub_field("slide_headline");
		$slide_content = get_sub_field("slide_content");
		$slide_cta_text = get_sub_field("slide_cta_text");
		$slide_cta_link = get_sub_field("slide_cta_link");
	
	?>
		<div class="slide" style="background-image: url('<?php echo $slide_background_image; ?>');">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<h1>
							<?php echo $slide_headline; ?>
						</h1>
						<p>
							<?php echo $slide_content; ?>
						</p>

						<a href="<?php echo $slide_cta_link; ?>" class="btn btn-primary">
							<?php echo $slide_cta_text; ?><i class="fas fa-angle-right"
								aria-hidden="true"></i>
						</a>
					</div>
					<div class="col-lg-7"></div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</section>

<?php endif; ?>
