<nav class="secondary-nav">
	<ul class="list-unstyled">

	<!-- TODO: make this get the top level parent in a section - even when you are on a child page -->

	<!-- If page has children
	then list child pages
	if you are on a child page get parent and list child pages -->

	<!-- wp_list_pages(array(
  'child_of' => $post->ID,
  'title_li' => ''
))


get_pages('child_of='.$post->ID.'&sort_column=menu_order'); -->



	<?php

		$args = array(
			'post_type'      => 'page',
			'posts_per_page' => -1,
			'post_parent'    => $post->ID, // possibly set the post parent dynamically for each section?
			'order'          => 'ASC',
			'orderby'        => 'menu_order'
		);


	$parent = new WP_Query( $args );

	if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>


		<li class="secondary-nav-1">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <i class="fas fa-arrow-down"></i> <span><?php the_title(); ?></span> </a>
		</li>

    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>

	</ul>
</nav>