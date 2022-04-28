<?php
/**
 * Template Name: Featured Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!--  breadcrumbs  -->
<div class="container">
	<?php breadcrumb_trail(); ?>
</div>

<main class="mainwrap wrapper">
	<div class="container">
<?php get_sidebar();?>

<div class="shop-content">



			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>
		</div>

	</div>
</main>


<?php
get_footer();
