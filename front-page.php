<?php
/**
 * The template for displaying hoempage
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
						<h2>Recent Publications</h2>

						<ul class="list-unstyled list-publications">
							<li>
								<h3>
									<a href=""
										>Lorem ipsum dolor sit amet, consectetur adipiscing
										elitn am , ante et convallis feugiat</a
									>
								</h3>

								<p>
									Author names, Joosten LAB, Kaufmann E, Latz E, Matarese
									G, Truncated here ...
								</p>

								<p><em>Nat Immunol. 2021 Jan;22(1):2-6. </em></p>
							</li>

							<li>
								<h3>
									<a href=""
										>Lorem ipsum dolor sit amet, consectetur adipiscing
										elitn am , ante et convallis feugiat</a
									>
								</h3>

								<p>
									Author names, Joosten LAB, Kaufmann E, Latz E, Matarese
									G, Truncated here ...
								</p>

								<p><em>Nat Immunol. 2021 Jan;22(1):2-6. </em></p>
							</li>

							<li>
								<h3>
									<a href=""
										>Lorem ipsum dolor sit amet, consectetur adipiscing
										elitn am , ante et convallis feugiat</a
									>
								</h3>

								<p>
									Author names, Joosten LAB, Kaufmann E, Latz E, Matarese
									G, Truncated here ...
								</p>

								<p><em>Nat Immunol. 2021 Jan;22(1):2-6. </em></p>
							</li>
						</ul>

						<a href="" class="btn btn-primary">See All Publications</a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="home-news">
						<h2>In The News</h2>

						<ul class="list-unstyled list-news">
							<li>
								<img
									src="https://via.placeholder.com/160x160?text=Image"
									alt=""
								/>

								<div class="news-content">
									<h3>
										<a href=""
											>Lorem ipsum dolor sit amet, consectetur
											adipiscing elitn am , ante et convallis
											feugiat</a
										>
									</h3>

									<p>
										Author names, Joosten LAB, Kaufmann E, Latz E,
										Matarese G, Truncated here ...
									</p>
								</div>
							</li>

							<li>
								<img
									src="https://via.placeholder.com/160x160?text=Image"
									alt=""
								/>

								<div class="news-content">
									<h3>
										<a href=""
											>Lorem ipsum dolor sit amet, consectetur
											adipiscing elitn am , ante et convallis
											feugiat</a
										>
									</h3>

									<p>
										Author names, Joosten LAB, Kaufmann E, Latz E,
										Matarese G, Truncated here ...
									</p>
								</div>
							</li>
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
