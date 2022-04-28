<?php
/**
 * The template for displaying all single posts and attachments
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
			get_template_part( 'content', 'article' );
		endwhile;
		?>
		
	</div>
</main>
	

<?php get_footer(); ?>
