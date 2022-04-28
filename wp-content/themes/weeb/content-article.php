<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	
	<!--  widget  products  offer  -->
	<div class="widget product-offers">
		<div class="widget-title">Товары по акции</div>
		<?php echo do_shortcode('[featured_products limit="3" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>
	</div>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>?p=149" class="button-featured">Посмотреть все товары по акции</a>

</article>
