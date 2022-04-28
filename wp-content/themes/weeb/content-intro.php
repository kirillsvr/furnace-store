<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<li class="article-intro">
	<div class="tmb-pad"><?php the_post_thumbnail('thumbnail');?></div>
	<div class="txt-pad">
	<header class="entry-header">
		<h1 class="archive-article-title"><a href="<?php echo get_the_permalink();?>"><span class="orange"><?php the_title();?></span> <?php the_subtitle();?></a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo get_the_excerpt(); ?>
	</div><!-- .entry-content -->
	</div>
</li><!-- #post-## -->
