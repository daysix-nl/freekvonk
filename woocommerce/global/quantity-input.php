<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

defined( 'ABSPATH' ) || exit;

/* translators: %s: Quantity. */
$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );

?>
<div class="input-quantity flex justify-between pb-2">
	<p class="text-16 leading-32 font-karlsen font-normal text-[#2B2828]">Slecteer het aantal</p>
	<div class="quantity flex">
		<?php
		/**
		 * Hook to output something before the quantity input field.
		 *
		 * @since 7.2.0
		 */
		do_action( 'woocommerce_before_quantity_input_field' );
		?>
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
		<div class="quantity-decrease h-3 w-3 bg-transparent border-[1px] border-[#2B2828] flex justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="1" viewBox="0 0 12 1">
				<line id="Line_191" data-name="Line 191" x1="12" transform="translate(0 0.5)" fill="none" stroke="#2b2828" stroke-width="1"/>
			</svg>
		</div>
		<input
			type="<?php echo esc_attr( $type ); ?>"
			<?php echo $readonly ? 'readonly="readonly"' : ''; ?>
			id="<?php echo esc_attr( $input_id ); ?>"
			class="border-t-[1px] border-b-[1px] border-[#2B2828] h-3 w-3 font-karlsen text-16 flex justify-center items-center text-center"
			name="<?php echo esc_attr( $input_name ); ?>"
			value="<?php echo esc_attr( $input_value ); ?>"
			aria-label="<?php esc_attr_e( 'Product quantity', 'woocommerce' ); ?>"
			size="4"
			min="<?php echo esc_attr( $min_value ); ?>"
			max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
			<?php if ( ! $readonly ) : ?>
				step="<?php echo esc_attr( $step ); ?>"
				placeholder="<?php echo esc_attr( $placeholder ); ?>"
				inputmode="<?php echo esc_attr( $inputmode ); ?>"
				autocomplete="<?php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); ?>"
			<?php endif; ?>
		/>
		<div class="quantity-increase h-3 w-3 bg-transparent border-[1px] border-[#2B2828] flex justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.4" viewBox="0 0 12 11.4">
				<g id="Group_1099" data-name="Group 1099" transform="translate(-1131.5 -706.5)">
					<line id="Line_190" data-name="Line 190" y2="11.4" transform="translate(1137.5 706.5)" fill="none" stroke="#2b2828" stroke-width="1"/>
					<line id="Line_191" data-name="Line 191" x1="12" transform="translate(1131.5 712.2)" fill="none" stroke="#2b2828" stroke-width="1"/>
				</g>
			</svg>
		</div>
		<?php
		/**
		 * Hook to output something after quantity input field
		 *
		 * @since 3.6.0
		 */
		do_action( 'woocommerce_after_quantity_input_field' );
		?>
	</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var quantityInput = document.getElementById('<?php echo esc_attr( $input_id ); ?>');
        var decreaseButton = document.querySelector('.quantity-decrease');
        var increaseButton = document.querySelector('.quantity-increase');

        // Voeg event listeners toe voor verhogen en verlagen
        decreaseButton.addEventListener('click', function() {
            if (quantityInput.value > <?php echo esc_attr( $min_value ); ?>) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });

        increaseButton.addEventListener('click', function() {
            var maxValue = <?php echo esc_attr( 0 < $max_value ? $max_value : 'Infinity' ); ?>;
            if (quantityInput.value < maxValue) {
                quantityInput.value = parseInt(quantityInput.value) + 1;
            }
        });

        // Verwijder de standaard pijltjes
        var woocommerceQuantity = document.querySelector('.quantity');
        woocommerceQuantity.style.position = 'relative';
        var woocommerceQuantityArrows = woocommerceQuantity.querySelectorAll('input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button');
        woocommerceQuantityArrows.forEach(function(arrow) {
            arrow.style.display = 'none';
        });
    });
</script>


<?php
