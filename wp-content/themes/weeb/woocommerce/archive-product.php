<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<main class="mainwrap wrapper">
	<div class="container">
<?php get_sidebar();?>

<div class="shop-content">

<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php

if ( have_posts() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
?>

		<div class="shop-archive-seo">
		<?php 
		// get the current taxonomy term
		$term = get_queried_object();
		$shoparchive_seo = get_field('shoparchive_seo', $term);
		
		echo $shoparchive_seo; ?>
		</div>

		</div>

	</div>
</main>

<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' ); ?>


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
	
	


<?php get_footer( 'shop' );
