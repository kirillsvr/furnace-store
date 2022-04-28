<?php
/**
 * The template for displaying link post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<li class="review-item">
		<div class="img-pad"><?php the_content();?></div>
		<div class="info-pad">
		<div class="review-quote"><?php echo get_the_excerpt(); ?></div>
		<div class="review-name"><?php the_title(); ?></div>
		</div>
</li>
