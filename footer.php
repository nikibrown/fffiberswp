<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prime
 */

?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<p><a href="<?php bloginfo("url"); ?>">www.primecollaboration.org</a></p>
			</div>
			<div class="col-lg-4">
			
				<p><?php the_field('phone', 'option'); ?><br />
					<a href="<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
			</div>
			<div class="col-lg-4">
				<nav class="social-nav">
					<ul class="list-unstyled list-inline">
						<?php if( get_field('facebook_url', 'option') ): ?>
							<li class="list-inline-item"><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<?php endif; ?>
						<?php if( get_field('twitter_url', 'option') ): ?>
							<li class="list-inline-item"><a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>
		
	</div>
</footer>

		

		<?php wp_footer(); ?>
		<script>

			// TODO: move to .js file

			$(document).ready(function() {

				$('.logo-slider').slick({
    				infinite: true,
					arrows: true,
					slidesToShow: 4,
  					slidesToScroll: 4,
            		prevArrow:"<button type='button' class='slick-prev fa-lg'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            		nextArrow:"<button type='button' class='slick-next fa-lg'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
					responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
					}
					},
					{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
					}
					}

  					]
  				});

				// listening for bs.collapse to run and toggling border from previous table row
				$('.accordion-table').on('shown.bs.collapse', function () {
					$(".details.collapse.show").prev().addClass("has-border-top");
				});

				$('.accordion-table').on('hidden.bs.collapse', function () {
					$(".parent").removeClass("has-border-top");
				});


				$('.accordion-table').on('show.bs.collapse','.collapse', function() {
   					$('.accordion-table').find('.collapse.show').collapse('hide');
				});

				// TODO = refactor into 1 function

				// $(".select-filter1").change(function() {
				// 	$(".publication-single").hide(); // ✔ 
				// 	// get value of selected and add "."
				// 	let $selected = "." + $(".select-filter1 option:selected").val(); // ✔ 
				// 	console.log($selected);
				// 	// show single publications that have selected class
				// 	$(".publication-single" + $selected).show();

				// 	// reset other select menus
				// 	$("select").not(".select-filter1").prop('selectedIndex',0);
				// });

				// $(".select-filter2").change(function() {
				// 	$(".publication-single").hide(); // ✔ 
				// 	// get value of selected and add "."
				// 	let $selected = "." + $(".select-filter2 option:selected").val(); // ✔ 
				// 	console.log($selected);
				// 	// show single publications that have selected class
				// 	$(".publication-single" + $selected).show();

				// 	// reset other select menus
				// 	$("select").not(".select-filter2").prop('selectedIndex',0);
				// });

				// hide all .publication-single

				// show all with selected classname from value of select menu


				$(".select-filter1").change(function() {
					$(".filter-content-single").hide(); // ✔ 
					// get value of selected and add "."
					let $selected = "." + $(".select-filter1 option:selected").val(); // ✔ 
					console.log($selected);
					// show single publications that have selected class
					$(".filter-content-single" + $selected).show();

					// reset other select menus
					$("select").not(".select-filter1").prop('selectedIndex',0);
				});

				$(".select-filter2").change(function() {
					$(".filter-content-single").hide(); // ✔ 
					// get value of selected and add "."
					let $selected = "." + $(".select-filter2 option:selected").val(); // ✔ 
					console.log($selected);
					// show single publications that have selected class
					$(".filter-content-single" + $selected).show();

					// reset other select menus
					$("select").not(".select-filter2").prop('selectedIndex',0);
				});

				$(".select-filter3").change(function() {
					$(".filter-content-single").hide(); // ✔ 
					// get value of selected and add "."
					let $selected = "." + $(".select-filter3 option:selected").val(); // ✔ 
					console.log($selected);
					// show single publications that have selected class
					$(".filter-content-single" + $selected).show();

					// reset other select menus
					$("select").not(".select-filter3").prop('selectedIndex',0);
				});


			}) ;
		</script>
	</body>
</html>

