<?php

add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
	if ( isset( $_GET['clear-cart'] ) ) {
		global $woocommerce;
		$woocommerce->cart->empty_cart();
	}
}

function wc_empty_cart_redirect_url() {
	return get_CTA_default_link()['href'];
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );

// Conditional function detecting if the current user has an active subscription
function has_active_subscription( $user_id=null ) {
    // if the user_id is not set in function argument we get the current user ID
    if( null == $user_id )
        $user_id = get_current_user_id();

    // Get all active subscrptions for a user ID
    $active_subscriptions = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => $user_id,
        'post_type'   => 'shop_subscription', // Subscription post type
        'post_status' => 'wc-active', // Active subscription
    ) );
    // if user has an active subscription
    if( ! empty( $active_subscriptions ) ) return true;
    else return false;
}


// Change woocommerce subscription “shop” link inside my account page
add_filter( 'woocommerce_subscriptions_message_store_url', 'custom_subscriptions_message_store_url', 10, 1 );
function custom_subscriptions_message_store_url( $url ){

    // If current user has NO active subscriptions 
    if( ! has_active_subscription() ){

        // HERE Define below the new URL linked to your product.
        $url = get_CTA_default_link()['href'];
    }
    return $url;
}
?>