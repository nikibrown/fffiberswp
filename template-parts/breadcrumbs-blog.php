<nav aria-label="breadcrumb" class="breadcrumb-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<a class="breadcrumbs__link" href="<?php bloginfo('url'); ?>" itemprop="item">Home</a>
						</li>
						<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<a class="breadcrumbs__link" href="<?php echo esc_url( get_page_link(88) ); ?>" itemprop="item">In The News</a>
						</li>
						<li class="breadcrumb-item"><?php the_title(); ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</nav>
