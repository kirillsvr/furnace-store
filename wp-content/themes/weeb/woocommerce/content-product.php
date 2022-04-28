<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
	
	<a href="<?php echo get_the_permalink();?>" class="cat-item-tmb"><?php the_post_thumbnail('large');?></a>
	
	<div class="cat-item-pad">
		<div class="cat-item-title"><?php 
		$brands = wp_get_object_terms( $product->get_id(), 'pwb-brand' );?>
		<?php foreach( $brands as $brand ): ?>
		<?php echo $brand->name;?>
		<?php endforeach; ?></div>
		<div class="cat-item-brand"> 
			<a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
		</div>
		<div class="price">
          <?php if($product->get_price_html() == ""){ ?>
          <span style="font-size:14px;">Цена по запросу</span>
          <?php }else{ ?>
          <?php echo $product->get_price_html(); ?>
          <?php } ?>
      	</div>
		<a href="#buyform" class="button-buy fancybox-inline">Купить</a>
      	<div style="clear:both;"></div>
		<!--div class="short-desc"><?php echo get_the_excerpt(); ?></div-->
      	<div class="short-desc">
          <?php 
          	$string = get_the_excerpt();
          	$new = strlen($string);
          	if($new < 100){
              echo $string;
            }else{
          	$string = strip_tags($string);
          	$string = substr($string, 0, 100);
          	$string = rtrim($string, "!,.-");
            $string = substr($string, 0, strrpos($string, ' '));
			echo $string."… ";
            };
          ?>
      	</div>
		<a class="button-detail" href="<?php echo get_the_permalink();?>">ПОДРОБНЕЕ</a>
	</div>
</li>
