<?php
/*
Plugin Name: Rename WooCommerce Home to Shop
Plugin URI: https://widerwebs.com
Description: Rename WooCommerce Home to Shop (in breadcrumbs)
Version: 1.0
Author: Wider Webs
Author URI: https://widerwebs.com
License: Private
*/

// Woocommerce breadcrumbs home URL.
function woo_custom_breadcrumb_home_url() {
	return '/shop/';
}
add_filter('woocommerce_breadcrumb_home_url', 'woo_custom_breadcrumb_home_url');

function woocommerce_change_breadcrumb_home_text($defaults) {
	if (is_product_category()) {
		$defaults['home'] = 'Shop';
	}
	return $defaults;
}
add_filter('woocommerce_breadcrumb_defaults', 'woocommerce_change_breadcrumb_home_text');
