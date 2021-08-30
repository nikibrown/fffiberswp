<nav class="secondary-nav">
	<ul class="list-unstyled">

	<?php if ( has_children($post->ID) ) { 
		$post_parent_id = get_the_ID();
	} else { 
		$post_parent_id = wp_get_post_parent_id($post);
	} ?>

	<?php

		$args = array(
			'post_type'      => 'page',
			'posts_per_page' => -1,
			'post_parent'    => $post_parent_id,
			'order'          => 'ASC',
			'orderby'        => 'menu_order'
		);


		$parent = new WP_Query( $args );

	if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

			<?php 
				$title = get_the_title(); 
				$titlelowercase = strtolower($title);
				$id = get_the_ID();
			
			?>
			<!--  <li class="<?php echo $titlelowercase . 'page-id-' . $id ?>"> -->
			<li class="<?php echo 'page-id-' . $id ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class><span><?php the_title(); ?></span> </a>
			</li>

    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>

	</ul>
</nav>