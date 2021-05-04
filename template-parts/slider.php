<?php if( have_rows('logo_slider') ): ?>
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="logo-slider list-unstyled list-inline">
					<?php while( have_rows('logo_slider') ): the_row(); ?>
					<?php 
						$logo = get_sub_field('logo'); 
						$logo_description = get_sub_field("logo_description"); 
					
					?>
						<li class="list-inline-item">
							<img src="<?php echo $logo ?>" alt="<?php echo $logo_description; ?>">
						</li>
					<?php endwhile; ?>
					
                    
				</ul>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
