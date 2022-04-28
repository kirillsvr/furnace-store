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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
	
		<?php if(is_page(20)):?>
		
		<div class="widget-quest">
			<div class="floatleft">
			<div class="widget-title">Возникли вопросы?</div>
			<div class="widget-subtitle">Оставьте заявку,  наши специалисты проконсультируют вас!</div>
			</div>
			<a href="#popup" class="button fancybox-inline">Оставить заявку</a>
		</div>
		
		<div class="map-wrap">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac4e90c5369e9924ddad505d353ef8b4beb8097eb99cc8915bbf9fd5b120b076c&amp;width=100%25&amp;height=410&amp;lang=ru_UA&amp;scroll=true"></script>
		</div>
		
		<?php endif; ?>

</article><!-- #post-## -->
