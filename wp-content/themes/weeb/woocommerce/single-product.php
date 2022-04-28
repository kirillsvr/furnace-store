<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
	
<main class="mainwrap wrapper">
	

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

		
<!--  product ACF  -->
<section class="product-acf wrapper">
	<div class="container">
	
		<div id="p-tabs">
		  <ul>
			<?php if(get_the_content()): ?><li><a href="#tabs-1">Описание</a></li><?php endif; ?>
			<li><a href="#tabs-2">Характеристики</a></li>
			<li><a href="#tabs-3">Доставка</a></li>
			<li><a href="#popup" class="fancybox-inline">Задать вопрос</a></li>
		  </ul>
		  <?php if(get_the_content()): ?>
		  <div id="tabs-1">
			<?php	the_content(); ?>
		  </div>
		  <?php endif; ?>
		  <div id="tabs-2">
		   <?php	the_field( 'product_info' ); ?>
		  </div>
		  <div id="tabs-3">
		   <?php	the_field( 'product_delivery' ); ?>
		  </div>
		  <!-- div id="tabs-4">
		   <?php	// the_field( 'tab_instr' ); ?>
		  </div -->
		</div>
	
	</div>
</section>
		
		
<!--  popular  -->
<section class="popular-products wrapper">
	<div class="container">
		<div class="widget-title"><span>Популярные товары</span></div>
		<?php echo do_shortcode('[products limit="10" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
		<a href="#" class="show-products">Смотреть все</a>
	</div>
</section>
		
	
<?php get_sidebar('about');?>

<!--    brands  -->
<section class="home-brands wrapper">
	<div class="container">
	<div class="widget-title"><span>Интернет-магазин печей и каминов в Перми</span></div>
	<?php dynamic_sidebar( 'home-brands' ); ?>
	</div>
</section>


<!--  seo text  -->
<section class="single-seotext wrapper">
	<div class="container">
	<hr />
	<div class="widget-body">
		<p>Владельцы загородной недвижимости (дач и коттеджей) знают, что печи-камины – это не роскошь, а необходимость, особенно, если поблизости не имеется центрального отопления и собственной котельной. Желание иметь свой, хотя бы небольшой дом за городом вполне естественно для жителя мегаполиса. Однако не всегда есть возможность отапливать его без соответствующей техники.</p>
		<p><strong>Качественная печь-камин</strong> – это не только оборудование, предназначенное для отопления жилого помещения. Печь-камин - это статусная, имиджевая вещь, создающая в доме ни с чем не сравнимый комфорт. Печи и камины в Перми, как и других городах страны, играют большую роль при оформлении жилого интерьера, придавая ему определенный стиль – изысканный, аристократичный и комфортный. Известно, что у человека живой огонь традиционно ассоциируется с уютом еще с первобытных времен и сохраняется на генетическом уровне.</p>
		<p><a href="#">Интернет-магазин Печи-Камины</a> реализует большой ассортимент отопительного оборудования и сопутствующих товаров по привлекательным ценам. Специалисты нашей компании помогут подобрать и приобрести печь камин в Перми. В нашем каталоге вы можете найти печи-камины для любого типа помещения, под любой интерьер и на различный вкус. В ассортименте представлены лучшие печи-камины самых известных производителей, как отечественных, так и зарубежных.</p>
		<p>Подберите свою печь-камин, печь для бани, котлы или другое отопительное оборудование.</p>
		<p>Если говорить про отопительное оборудование, то печи-камины давно завоевали популярность в европейских странах, в том числе, тех, чей климат схож с российским. Во-первых, они компактны; во-вторых, характеризуются высоким коэффициентом полезного действия.</p>
		</div>
	</div>
</section>
	
	
</main>


		
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
	
<!-- bxSlider Javascript file -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.min.js"></script>
<script>
jQuery(document).ready(function(){ 
	jQuery('.pwb-row').bxSlider({
		  	mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 30,
			infiniteLoop: true,
			slideWidth: 170,
			minSlides: 1,
			maxSlides: 6,
			speed: 800,
			pager:false
	  });
	jQuery('.popular-products ul.products ').bxSlider({
		  	mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 30,
			infiniteLoop: true,
			slideWidth: 270,
			minSlides: 1,
			maxSlides: 4,
			speed: 800,
			pager:false
	  });	  
});
</script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  jQuery( function() {
    jQuery( "#p-tabs" ).tabs();
  } );
  </script>


<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
