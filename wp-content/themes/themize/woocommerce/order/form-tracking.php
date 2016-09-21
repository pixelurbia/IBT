<?php
/**
 * Order tracking form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post;
?>
<div class="center-title">
		<h2>Track your order</h2>
		
			<p><?php _e( 'To track your order please enter your Order ID in the box below and press return.', 'woocommerce' ); ?></p>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4 boxed">
		<form action="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" method="post" class="track_order">
		
			<p class="form-row form-row-first"><label for="orderid"><?php _e( 'Order ID', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="orderid" id="orderid" placeholder="<?php _e( 'Found in confirmation email.', 'woocommerce' ); ?>" /></p>
			<p class="form-row form-row-last"><label for="order_email"><?php _e( 'Billing Email', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="order_email" id="order_email" placeholder="<?php _e( 'Email you used during checkout.', 'woocommerce' ); ?>" /></p>
			<div class="clear"></div>
		
			<input type="submit" class="button" name="track" value="<?php _e( 'Track', 'woocommerce' ); ?>" />
			<?php wp_nonce_field( 'woocommerce-order_tracking' ); ?>
		
		</form>
	</div>
</div>