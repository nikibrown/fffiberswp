<li class="publication-single filter-content-single

	<?php $hasterms = get_the_term_list( get_the_ID(), 'research_areas'); ?>

	<?php if( $hasterms) { ?>

		<?php foreach ( get_the_terms( get_the_ID(), 'research_areas' ) as $tax ) {
			echo 'filter-' . strtolower($tax->name); 
		} ?>
	<?php } ?>
	
		<?php if( have_rows('principal_authors') ): while( have_rows('principal_authors') ): the_row();  ?>

		<?php $principle_author = get_sub_field('principle_author'); 

			if( $principle_author ): 
				$principle_author_title = $principle_author['title'];
				$nameclass = strtolower(str_replace(' ', '', $principle_author_title));

			?>

				filter-author-<?php echo $nameclass; ?>

			<?php endif; ?>

		<?php endwhile;  endif; ?>
	
	
	filter-all
">

<?php if( get_field('publication_url') ) { ?>
	<h3><a href="<?php the_field("publication_url"); ?>"><?php the_title(); ?></a></h3>
<?php } else if( get_field('publication_file') ) { ?>
	<h3><a href="<?php the_field("publication_file"); ?>"><?php the_title(); ?></a></h3>

	<?php } else { ?>
		<h3><?php the_title(); ?></h3>

	<?php } ?>


	<?php the_field("publication_file"); ?>

	<div class="authors">

		<p>
			<?php if( have_rows('principal_authors') ): while( have_rows('principal_authors') ): the_row();  ?>

			<?php $principle_author = get_sub_field('principle_author'); 

				if( $principle_author ): 
					$principle_author_url = $principle_author['url'];
					$principle_author_title = $principle_author['title'];

				?>
					<span><a  href="<?php echo esc_url( $principle_author_url ); ?>"><?php echo esc_html( $principle_author_title ); ?></a>, </span> 
				<?php endif; ?>


			<?php endwhile;  endif; ?>

			<?php if( get_field('authors') ): ?>

				<?php the_field("authors"); ?>
			<?php endif; ?>
		, <?php the_field("year"); ?>, <?php if( get_field('publication_date') ) { ?>
				<span><em><?php the_field("publication_date"); ?>, </em><?php the_field("journal_name"); ?></span>
			<?php } else { ?>
				<span><?php the_field("journal_name"); ?></span>
			<?php } ?>

		</p>
	</div>


	<?php $hasterms = get_the_term_list( get_the_ID(), 'research_areas'); ?>

	<?php if( $hasterms) { ?>
		<p><strong>Research Areas: </strong> 
			<?php foreach ( get_the_terms( get_the_ID(), 'research_areas' ) as $tax ) {
				echo '<span>' . __( $tax->name ) . '</span> ';
			} ?>
		</p>
	<?php } ?>
	
	<?php $post_id = get_the_ID(); ?>

	<p class="abstract-link" data-toggle="collapse" data-target="#abstract<?php echo $post_id; ?>">
		Abstract <i class="fas fa-caret-right"></i>
	</p>

	<div class="abstract-details collapse" id="abstract<?php echo $post_id; ?>">
		<?php the_field("abstract"); ?>
	</div>
</li>