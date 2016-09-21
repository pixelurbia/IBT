<?php global $post; ?>

		<?php $cart_items = edd_get_cart_contents(); ?>
		<?php do_action( 'edd_cart_items_before' ); ?>
		<?php if ( $cart_items ) : ?>
			<?php foreach ( $cart_items as $key => $item ) : ?>

			<table id="edd_checkout_cart" <?php if ( ! edd_is_ajax_disabled() ) { echo 'class="ajaxed"'; } ?>>
				<tbody>
				<tr class="edd_cart_item" id="edd_cart_item_<?php echo esc_attr( $key ) . '_' . esc_attr( $item['id'] ); ?>" data-download-id="<?php echo esc_attr( $item['id'] ); ?>">
					<?php do_action( 'edd_checkout_table_body_first', $item ); ?>
					<td class="edd_cart_item_name">
						<?php
	
							$item_title = get_the_title( $item['id'] );
							if ( ! empty( $item['options'] ) && edd_has_variable_prices( $item['id'] ) ) {
								$item_title .= ' - ' . edd_get_cart_item_price_name( $item );
							}
							echo '<span class="edd_checkout_cart_item_title">' . esc_html( $item_title ) . '</span>';
						?>
						<span class="edd_checkout_price"><?php echo edd_cart_item_price( $item['id'], $item['options'] ); ?></span>
					</td>
					<td class="edd_cart_actions">
						<?php if( edd_item_quantities_enabled() ) : ?>
							<input type="number" min="1" step="1" name="edd-cart-download-<?php echo $key; ?>-quantity" class="edd-input edd-item-quantity" value="<?php echo edd_get_cart_item_quantity( $item['id'], $item['options'] ); ?>"/>
							<input type="hidden" name="edd-cart-downloads[]" value="<?php echo $item['id']; ?>"/>
							<input type="hidden" name="edd-cart-download-<?php echo $key; ?>-options" value="<?php esc_attr_e( serialize( $item['options'] ) ); ?>"/>
						<?php endif; ?>
						<a class="edd_cart_remove_item_btn" href="<?php echo esc_url( edd_remove_item_url( $key, $post ) ); ?>"><?php _e( 'Remove', 'edd' ); ?></a>
					</td>
					<?php do_action( 'edd_checkout_table_body_last', $item ); ?>
				</tr>
					</tbody>
					</table>
			<?php endforeach; ?>

		<?php endif; ?>
		<?php do_action( 'edd_cart_items_middle' ); ?>
		<!-- Show any cart fees, both positive and negative fees -->
		<?php if( edd_cart_has_fees() ) : ?>
			<?php foreach( edd_get_cart_fees() as $fee_id => $fee ) : ?>
				<tr class="edd_cart_fee" id="edd_cart_fee_<?php echo $fee_id; ?>">
					<td class="edd_cart_fee_label"><?php echo esc_html( $fee['label'] ); ?></td>
					<td class="edd_cart_fee_amount"><?php echo esc_html( edd_currency_filter( edd_format_amount( $fee['amount'] ) ) ); ?></td>
					<td>
						<?php if( ! empty( $fee['type'] ) && 'item' == $fee['type'] ) : ?>
							<a href="<?php echo esc_url( edd_remove_cart_fee_url( $fee_id ) ); ?>"><?php _e( 'Remove', 'edd' ); ?></a>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php do_action( 'edd_cart_items_after' ); ?>
	<tfoot>

		<?php if( has_action( 'edd_cart_footer_buttons' ) ) : ?>
			<tr class="edd_cart_footer_row">
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>">
					<?php do_action( 'edd_cart_footer_buttons' ); ?>
				</th>
			</tr>
		<?php endif; ?>

		<?php if( edd_use_taxes() ) : ?>
			<tr class="edd_cart_footer_row edd_cart_subtotal_row"<?php if ( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
				<?php do_action( 'edd_checkout_table_subtotal_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_subtotal">
					<?php _e( 'Subtotal', 'edd' ); ?>:&nbsp;<span class="edd_cart_subtotal"><?php echo edd_cart_subtotal(); ?></span>
				</th>
				<?php do_action( 'edd_checkout_table_subtotal_last' ); ?>
			</tr>
			<tr class="edd_cart_footer_row edd_cart_tax_row"<?php if( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
				<?php do_action( 'edd_checkout_table_tax_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_tax">
					<?php _e( 'Tax', 'edd' ); ?>:&nbsp;<span class="edd_cart_tax_amount" data-tax="<?php echo edd_get_cart_tax( false ); ?>"><?php echo esc_html( edd_cart_tax() ); ?></span>
				</th>
				<?php do_action( 'edd_checkout_table_tax_last' ); ?>
			</tr>

		<?php endif; ?>

		<tr class="edd_cart_footer_row edd_cart_discount_row" <?php if( ! edd_cart_has_discounts() )  echo ' style="display:none;"'; ?>>
			<?php do_action( 'edd_checkout_table_discount_first' ); ?>
			<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_discount">
				<?php edd_cart_discounts_html(); ?>
			</th>
			<?php do_action( 'edd_checkout_table_discount_last' ); ?>
		</tr>

	</tfoot>