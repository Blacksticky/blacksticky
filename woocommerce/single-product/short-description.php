<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

if ( ! $post->post_excerpt ) {
	return;
}

?>
<div class="woo-description" itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>

<div class="woo-product-meta product_meta">
	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
		<div class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></div>
	<?php endif; ?>

	<?php echo $product->get_categories( ', ', '<div class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</div>' ); ?>

	<?php //echo $product->get_tags( ', ', '<div class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '</div>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>
</div>
