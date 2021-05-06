<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package prime
 */
 ?>


<?php get_header();?>

<main>
    <div class="container">
		<article>
			<div class="row">
				<div class="col-lg-12">
					<h2><?php esc_html_e( 'It looks like nothing was found at this location', 'prime' ); ?></h2>
					<p>Try navigating to the page again or try searching. </p>

					<form action="/" method="get">
					<div class="row">
						<div class="col-lg-8">
							<input class="form-control form-control-lg" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
						</div>
						<div class="col-lg-4"><input class="btn btn-primary-outline btn-block" type="submit" value="search" /></div>
					</div>
				</form>
				</div>
			</div>
		</article>
	</div>
</main>
		
<?php get_footer(); ?>