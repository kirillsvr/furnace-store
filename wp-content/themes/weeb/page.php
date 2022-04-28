<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!--  breadcrumbs  -->
<div class="container">
	<?php breadcrumb_trail(); ?>
</div>

<!--  main  -->
<main class="mainwrap wrapper">
	<div class="container">

		<?php get_sidebar('article'); ?>

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
		endwhile;
		?>


		
		
	</div>
</main>

<?php get_footer(); ?>
