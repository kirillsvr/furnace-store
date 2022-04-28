<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( has_post_thumbnail() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" class="single-product-page">
	<div class="container">
	
	<div class="product-gallery-pad">
		<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
			<figure class="woocommerce-product-gallery__wrapper">
				<?php
				if ( has_post_thumbnail() ) {
					$html  = wc_get_gallery_image_html( $post_thumbnail_id, true );
				} else {
					$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
					$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
					$html .= '</div>';
				}

				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );

				do_action( 'woocommerce_product_thumbnails' );
				?>
			</figure>
		</div>

	</div>
	
	<div class="product-info-pad">
		<h1 class="product-title">
		<?php 
		$brands = wp_get_object_terms( $product->get_id(), 'pwb-brand' );
		?>
		<?php foreach( $brands as $brand ): ?>
		<?php $brand_link = get_term_link( $brand->term_id ); ?>
		<a class="brand-title" href="<?php echo $brand_link;?>">
		<?php echo $brand->name;?>
		</a> 
		<?php endforeach; ?> <span class="arrow">&rarr;</span> <span class="pname"><?php the_title();?></span></h1>
		
		<div class="column-attributes">
		<!--p class="product-sku">Артикул <span><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></p-->
		<p class="product-brand">Производитель: <span>
		<?php foreach( $brands as $brand ): ?>
		<?php echo $brand->name;?>
		<?php endforeach; ?>
		</span></p>
	
		<?php // $product->list_attributes();
		$attributes = wp_get_object_terms(  $product->list_attributes());
		?>

	
		</div>
		
		<div class="column-buy">
		<div class="product-stock">
		<?php if($product->is_in_stock()):?>
		<span class="product-stock-true">В наличии</span>
		<?php else: ?>
		<span class="product-stock-false">Под заказ</span>
		<?php endif; ?>
		</div>
		
		<div class="price"><?php echo $product->get_price_html(); ?></div>
		<a href="#buyform2" class="fancybox-inline button-buy">Купить</a>
		<div class="block-phone">
		или позвоните <a href="tel:+73422543344">+7 (342) 254-33-44</a>
		</div>
		<p class="fieldcheck">Бесплатная доставка <br />по Перми</p>
		<p class="fieldcheck">Возможная покупка <br />в кредит</p>
		</div>
	</div>
	
	
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
