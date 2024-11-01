<?php
/**
 * Plugin Name: UK Address Postcode Validation
 * Plugin URI: http://ideal-postcodes.co.uk/woocommerce
 * Description: UK address search and validation on address forms
 * Version: 3.5.7
 * Author: Ideal Postcodes
 * Author URI: https://ideal-postcodes.co.uk/
 * Developer: Ideal Postcodes
 * Developer URI: https://ideal-postcodes.co.uk/
 * Text Domain: uk-address-postcode-validation
 * Domain Path: /languages
 *
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 * WC requires at least: 5.0.0
 * WC tested up to: 8.8.3
 *
 * License: Copyright IDDQD Limited
 * License URI: https://github.com/ideal-postcodes/woocommerce/blob/master/LICENSE
 */

defined("ABSPATH") or die("No direct script");

//set constants
define("IDEALPOSTCODES_DIR", plugin_dir_path(__FILE__));
define("IDEALPOSTCODES_NAME", "Ideal Postcodes");
define("IDEALPOSTCODES_SLUG", "uk-address-postcode-validation");
define("IDEALPOSTCODES_URL", plugins_url() . "/" . IDEALPOSTCODES_SLUG . "/");

//includes
require_once ABSPATH . "wp-admin/includes/plugin.php";

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );

function add_action_links ( $actions ) {
  $link = admin_url("admin.php?page=wc-settings&tab=integration&section=idealpostcodes");
  $mylinks = array(
    '<a href="'.$link.'">Settings</a>',
  );
  $actions = array_merge( $actions, $mylinks );
  return $actions;
}

if (!class_exists("WC_IdealPostcodes")) {

  add_action( 'before_woocommerce_init', function() {
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
      \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
  });

  class WC_IdealPostcodes
  {
    /**
     * Construct the plugin.
     */
    public function __construct()
    {
      add_action("plugins_loaded", [$this, "init"]);
    }

    /**
     * Initialize the plugin.
     */
    public function init()
    {
      if (class_exists("WC_Integration")) {
        require_once IDEALPOSTCODES_DIR .
          "classes" .
          DIRECTORY_SEPARATOR .
          "ideal.postcodes.php";
        add_filter("woocommerce_integrations", [$this, "add_integration"]);
      }
    }

    /**
     * Add a new integration to WooCommerce.
     */
    public function add_integration($integrations)
    {
      $integrations[] = "WC_IdealPostcodes_Integration";
      return $integrations;
    }
  }

  //Init plugin if woocommerce is installed
  $WC_IdealPostcodes_Integration = new WC_IdealPostcodes(__FILE__);
}
