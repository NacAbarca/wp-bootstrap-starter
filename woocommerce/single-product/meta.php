<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to wp-bootstrap-starter/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		Nac Abarca
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 * todo: metas.php - OK
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><i class="fa fa-barcode" aria-hidden="true"></i><?php esc_html_e( ' ', 'wp-bootstrap-starter' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'wp-bootstrap-starter' ); ?></span></span> <br/>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( '<i class="fas fa-bars"></i> ', '<i class="fas fa-bars"></i> ', count( $product->get_category_ids() ), 'wp-bootstrap-starter' ) . ' ', '</span> <br/>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( '<i class="fa fa-tag"></i> ', '<i class="fa fa-tags"></i> ', count( $product->get_tag_ids() ), 'wp-bootstrap-starter' ) . ' ', '</span> <br/>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
