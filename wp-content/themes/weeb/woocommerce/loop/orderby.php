<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
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

?>
<!-- form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<?php // foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php // echo esc_attr( $id ); ?>" <?php  // selected( $orderby, $id ); ?>><?php  // echo esc_html( $name ); ?></option>
		<?php // endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php // wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form  -->
<div class="woo-orderingby">
<div class="orderby-label">Сортировать:</div>
<ul class="orderlist">
<?php
    $catalog_orderby = apply_filters( 'woocommerce_catalog_orderby', array(
        'menu_order' => __( 'По названию', 'woocommerce' ),

    'popularity' => __( 'Sort by popularity', 'woocommerce' ),

    'rating'     => __( 'Sort by average rating', 'woocommerce' ),

    'date'       => __( 'Sort by newness', 'woocommerce' ),

    'price'      => __( 'По цене', 'woocommerce' ),

    'price-desc' => __( 'Sort by price: high to low', 'woocommerce' )
) );

if ( get_option( 'woocommerce_enable_review_rating' ) == 'no' )
    unset( $catalog_orderby['rating'] );

foreach ( $catalog_orderby as $id => $name )
     echo '<li><a href="' . get_permalink( wc_get_page_id( 'shop' ) ) . '?orderby=' . $id . '" >' . esc_attr( $name ) . '</a></li>';
?>

</ul>

<div class="woo-top-pagination">
	<?php
$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	echo '</div>';
	echo '</div>';
	return;
}
	
		echo paginate_links( apply_filters( 'woocommerce_pagination_args', array( // WPCS: XSS ok.
			'base'         => $base,
			'format'       => $format,
			'add_args'     => false,
			'current'      => max( 1, $current ),
			'total'        => $total,
			'prev_text'    => '&larr;',
			'next_text'    => '&rarr;',
			'type'         => 'list',
			'end_size'     => 1,
			'mid_size'     => 1,
            'show_all'     => false,
		) ) );
	?>
</div>


</div>