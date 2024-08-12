<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<?php
//custom checkout functions, verplaatsen naar apart bestand en insluiten in functions.php


// end custom checkout functions
?>

<div class="notice">
<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>


<?php


$checkoutHasSubscriptions = false;
$checkoutHasProducts      = false;
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
	if ( showSubscriptionForm( $cart_item['product_id'] ) ) {
		$checkoutHasSubscriptions = true;
	} else {
		$checkoutHasProducts = true;
	}
}

?>
</div>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="">
			<div class="bg-white px-3 py-[50px] no-title">
				<h1 class="text-22 leading-22 lg:text-32 lg:leading-22 font-semibold mb-2">Vul je gegevens in</h1>
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

            <?php
				// If we have subscripts: show information per item
				if ( $checkoutHasSubscriptions ):?>
					<div class="bg-white py-[50px] px-3 woocommerce-subscriptions">
						<h3 class="text-22 leading-22 lg:text-32 lg:leading-22 font-semibold mb-2">2. Personalisering abonnement</h3>
						<p>Het abonnement wordt op naam van het kind gezet.</p>

						<?php
						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
							if ( showSubscriptionForm( $cart_item['product_id'] ) ) :
								$cartProduct = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

								$fieldNamePrefix = 'subscription_' . $cart_item_key . '_';
								$fieldName       = 'subscription[' . $cart_item_key . ']';

								// data
								$prefilledData = WC()->session->get( 'subscription_data_' . $cart_item_key );
							
								?>
								<div class="checkout-subscription">
									<h3 class="font-bold mt-[20px]"><?= $cartProduct->get_title() ?></h3>
									<style>
									    .checkout-subscription__columns {
                                            display: flex;
                                            flex-wrap: wrap;
                                        }
                                        .checkout-subscription__form {
                                            padding-right: 0px;
                                            width: 100%;
                                        }
                                        .checkout-subscription__image {
                                            width: 0;
                                        }
										.checkout-subscription__image img {
											object-fit: contain;
											object-position: top;
										}
									</style>
									<div class="checkout-subscription__columns">
										<div class="checkout-subscription__form">
											<p class="form-row validate-required" id="<?= $fieldNamePrefix ?>first_name">
												<label for="<?= $fieldNamePrefix ?>first_name">Voornaam <abbr class="required" title="verplicht">*</abbr></label>
												<span class="woocommerce-input-wrapper">
												<input type="text" class="input-text" name="<?= $fieldName ?>[first_name]" id="<?= $fieldNamePrefix ?>first_name" value="<?= htmlentities( $prefilledData['first_name'] ?? '' ) ?>">
											</span>
											</p>
											<p class="form-row validate-required" id="<?= $fieldNamePrefix ?>last_name">
												<label for="<?= $fieldNamePrefix ?>last_name">Achternaam <abbr class="required" title="verplicht">*</abbr></label>
												<span class="woocommerce-input-wrapper">
												<input type="text" class="input-text" name="<?= $fieldName ?>[last_name]" id="<?= $fieldNamePrefix ?>last_name" value="<?= htmlentities( $prefilledData['last_name'] ?? '' ) ?>">
											</span>
											</p>
											<p class="form-row validate-required" id="<?= $fieldNamePrefix ?>gender">
												<label for="<?= $fieldNamePrefix ?>gender">Geslacht <abbr class="required" title="verplicht">*</abbr></label>
												<span class="woocommerce-input-wrapper woocommerce-select-field">
												<select name="<?= $fieldName ?>[gender]" id="<?= $fieldNamePrefix ?>gender">
													<option value="Jongen"<?= ( ! empty( $prefilledData['gender'] ) && $prefilledData['gender'] === 'Jongen' ) ? ' selected="selected"' : '' ?>>Jongen</option>
													<option value="Meisje"<?= ( ! empty( $prefilledData['gender'] ) && $prefilledData['gender'] === 'Meisje' ) ? ' selected="selected"' : '' ?>>Meisje</option>
													<option value="Zeg ik liever niet"<?= ( ! empty( $prefilledData['gender'] ) && $prefilledData['gender'] === 'Zeg ik liever niet' ) ? ' selected="selected"' : '' ?>>Zeg ik liever niet</option>
												</select>
											</span>
											</p>
											<p class="form-row validate-required" id="<?= $fieldNamePrefix ?>birthdate">
												<label for="<?= $fieldNamePrefix ?>birthdate">Geboortedatum <abbr class="required" title="verplicht">*</abbr></label>
											<div class="woocommerce-input-wrapper checkout-birthdate">
												<div class="checkout-birthdate__select">
													<select name="<?= $fieldName ?>[birthdate_day]" id="<?= $fieldNamePrefix ?>birthdate_day" aria-required="true">
														<option value="">Dag</option>
														<?php for ( $q = 1; $q <= 31; $q ++ ): ?>
															<option value="<?= $q ?>"<?= ( ! empty( $prefilledData['birthdate_day'] ) && $prefilledData['birthdate_day'] == $q ) ? ' selected="selected"' : '' ?>><?= $q ?></option>
														<?php endfor; ?>
													</select>
												</div>
												<div class="checkout-birthdate__select">
													<select name="<?= $fieldName ?>[birthdate_month]" id="<?= $fieldNamePrefix ?>birthdate_month" tabindex="4" aria-required="true">
														<option value="">Maand</option>
														<?php for ( $q = 1; $q <= 12; $q ++ ): ?>
															<option value="<?= $q ?>"<?= ( ! empty( $prefilledData['birthdate_month'] ) && $prefilledData['birthdate_month'] == $q ) ? ' selected="selected"' : '' ?>><?= $q ?></option>
														<?php endfor; ?>
													</select>
												</div>
												<div class="checkout-birthdate__select">
													<select name="<?= $fieldName ?>[birthdate_year]" id="<?= $fieldNamePrefix ?>birthdate_year" tabindex="5" aria-required="true">
														<option value="">Jaar</option>
														<?php for ( $q = ( date( 'Y' ) - 1 ); $q >= ( date( 'Y' ) - 18 ); $q -- ): ?>
															<option value="<?= $q ?>"<?= ( ! empty( $prefilledData['birthdate_year'] ) && $prefilledData['birthdate_year'] == $q ) ? ' selected="selected"' : '' ?>><?= $q ?></option>
														<?php endfor; ?>
													</select>
												</div>
											</div>
											</p>

											
										</div>
										<div class="checkout-subscription__image hidden">
											<div class="bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] aspect-square">
											<?php
											$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $cartProduct->get_image(), $cart_item, $cart_item_key );

											if ( ! isset( $product_permalink ) ) {
												echo $thumbnail; // PHPCS: XSS ok.
											} else {
												printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
											}
											?>
											</div>
										</div>
									</div>
								</div>
							<?php endif ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				

			<div class="bg-white px-3 py-3 mt-2">
				<div class="paybox">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order mt-2">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
