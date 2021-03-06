<?php
/*
Plugin Name: WooCommerce Google Trusted Stores Integration
Description: @TODO
Author: Enollo
Author URI: http://www.enollo.com
Version: 0.0.1
*/

// Add the integration to WooCommerce
function wc_google_trusted_stores_add_integration( $integrations ) {
	include_once( 'includes/class-wc-google-trusted-stores-integration.php' );
	$integrations[] = 'WC_Google_Trusted_Stores';

	return $integrations;
}

add_filter( 'woocommerce_integrations', 'wc_google_trusted_stores_add_integration', 10 );
