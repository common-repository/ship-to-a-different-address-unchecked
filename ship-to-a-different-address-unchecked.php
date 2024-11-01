<?php
/**
 * Plugin Name: Ship to a different address unchecked
 * Description: Ship to a different address unchecked for Woocommerce
 * Version: 1.0
 * Author: RoMedia Design
 * Author URI: https://romediadesign.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 3.0.0
 * Tested up to: 5.2.3
 */
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );