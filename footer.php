<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fffibers
 */

?>


		<footer class="section-sm">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<?php the_field("address", "option"); ?>
					</div>
					<div class="col-lg-6">
						<?php the_field("contact_info", "option"); ?>
					</div>
					<div class="col-lg-3">
						<ul class="list-inline social-nav text-lg-right">
							<?php if( get_field('facebook_url', 'option') ): ?>
								<li class="list-inline-item"><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('twitter_url', 'option') ): ?>
								<li class="list-inline-item"><a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<?php the_field("copyright", "option"); ?>
					</div>
				</div>
			</div>
		</footer>

		

		<?php wp_footer(); ?>
		<script>

		// TODO: move to .js file

			const $dropdown = $('.dropdown');
			const $dropdownToggle = $('.dropdown-toggle');
			const $dropdownMenu = $('.dropdown-menu');
			const showClass = 'show';

			$(window).on('load resize', function () {
				if (this.matchMedia('(min-width: 992px)').matches) {
					$dropdown.hover(
						function () {
							const $this = $(this);
							$this.addClass(showClass);
							$this.find($dropdownToggle).attr('aria-expanded', 'true');
							$this.find($dropdownMenu).addClass(showClass);
						},
						function () {
							const $this = $(this);
							$this.removeClass(showClass);
							$this.find($dropdownToggle).attr('aria-expanded', 'false');
							$this.find($dropdownMenu).removeClass(showClass);
						}
					);
				} else {
					$dropdown.off('mouseenter mouseleave');
				}
			});

			$(document).ready(function () {
				// init slider
				$('.home-slider').slick({
					autoplay: true,
					autoplaySpeed: 5000,
					dots: true,
					arrows: false,
					infinite: true
				});
				
			});

		</script>
	</body>
</html>

