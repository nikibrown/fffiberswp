<section class="banner section-md">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9">
				<h2><?php the_field("cta_banner_headline"); ?>?</h2>
				<?php the_field("cta_banner_text"); ?>
			</div>
			<div class="col-lg-3">
				<a href="<?php the_field("cta_banner_button_link"); ?>" class="btn btn-secondary"><?php the_field("cta_banner_button_text"); ?> <i class="fas fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>