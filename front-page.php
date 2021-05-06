<?php
/**
 * The template for displaying homepage
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prime
 */ ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header("home"); ?>

<main>
	<div class="container">
		<article>
			<div class="row">
				<div class="col-lg-6">
					<div class="home-publicaitons">
						<h3><i class="fas fa-arrow-down"></i><span>Recent Publications</span></h3>

						<ul class="list-unstyled list-publications">
							<?php $args = array(
								'post_type' => array( 'publications' ),
								'posts_per_page' => 3,
								'meta_key'       => 'publication_date',
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC'
							);

							$query = new WP_Query( $args ); ?>

							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

								<li>
									
									<h4><?php the_title(); ?></h4>
									
									<div class="authors">
										<p>
											<!--$string = substr($string,0,10).'...';-->
											<?php if( have_rows('principal_authors') ): while( have_rows('principal_authors') ): the_row();  ?>

												<?php $principle_author = get_sub_field('principle_author'); 

													if( $principle_author ): 
														$principle_author_url = $principle_author['url'];
														$principle_author_title = $principle_author['title'];?>
														
														<span><a href="<?php echo esc_url( $principle_author_url ); ?>"><?php echo esc_html( $principle_author_title ); ?></a>, </span> 
													<?php endif; ?>


											<?php endwhile; endif; ?>
										</p>
										<?php if( get_field('authors') ): ?>
											<?php the_field("authors"); ?>
										<?php endif; ?>
											
									</div>

									<p><em>Nat Immunol. 2021 Jan;22(1):2-6. </em></p>
								</li>

							<?php endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>

						
						</ul>

						<a href="<?php echo esc_url( get_page_link( 58 ) ); ?>" class="btn btn-primary-outline">See All Publications</a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="home-news">
						<h3><i class="fas fa-arrow-down"></i><span>In The News</span></h3>

						<ul class="list-unstyled list-news">
							<?php if( have_rows('news_items') ): while( have_rows('news_items') ): the_row(); ?>
								<?php 
									$news_item_photo = get_sub_field('news_item_photo'); 
									$news_item_headline = get_sub_field("news_item_headline");
									$news_item_text = get_sub_field("news_item_text");
									$news_item_link = get_sub_field("news_item_link"); 
					
								?>
								<li>
									<a href="<?php echo $news_item_link ?>"><img
										src="<?php echo $news_item_photo; ?>"
										alt="<?php echo $news_item_headline ?>"
									/></a>

									<div class="news-content">
										<h4>
											<a href="<?php echo $news_item_link ?>"><?php echo $news_item_headline ?></a
											>
										</h4>

										<p>
											<?php echo $news_item_text; ?>
										</p>
									</div>
								</li>
							<?php endwhile;  endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</article>
	</div>
</main>



<?php get_template_part( 'template-parts/slider'); ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
