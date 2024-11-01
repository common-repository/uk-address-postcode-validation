=== UK Address Postcode Validation ===
Contributors: idealpostcodes
Donate link: https://ideal-postcodes.co.uk/
Tags: address, validation, search, checkout, data, PAF, ideal postcodes
Requires at least: 5.0
Tested up to: 6.5.2
Stable tag: 3.5.7
Requires PHP: 7.4.0
License: MIT
License URI: https://github.com/ideal-postcodes/woocommerce/blob/master/LICENSE

Ideal Postcodes UK address search and validation extension for WooCommerce

== Description ==

This extension provides realtime address autocompletion lookup on your address forms, including billing and shipping. Ideal Postcodes address tools validates and accelerates customer entered address information to reduce cart abandonment and ensure correct delivery address capture.

Ideal Postcodes provides address autocomplete for your WooCommerce address forms. We specialize in the UK addressing data, drawing the most up-to-date & accurate UK dataset from Royal Mail on a daily basis. We have over 1,000 clients that use our address validation tools to speed up checkout, increase deliverability, and ensure data quality.

This extension adds address validation including realtime address autocompletion on your address forms. Our tools appear on your checkout and user account pages (for billing and shipping addresses). Our address validation tools speed up the checkout process and ensure that correct addresses are collected, thereby reducing cart abandonment and ensuring deliverability.

This extension is free to download and install. However, our address validation services requires a paid account at [ideal-postcodes.co.uk](https://ideal-postcodes.co.uk).

- Looking for Gravity Forms Address Validation? [See our guide](https://ideal-postcodes.co.uk/guides/gravity)
- Looking for Contact Form 7 Address Validation? [See our guide](https://ideal-postcodes.co.uk/guides/contact-form-7)

Contact us if you get stuck. Drop by our [chat page](https://ideal-postcodes.co.uk) for immediate assistance or send us a message on one of our [support channels](https://ideal-postcodes.co.uk/support).

= Benefits =

- *Speed up the Checkout Process.* Reduce the time it takes to accurately insert an address on your checkout
- *Increase Deliverability.* Reduce failed deliveries by making address entry easier and less error prone
- *Ensure Data Quality.* Access the most up-to-date and accurate address dataset in the UK with Royal Mail's PAF® dataset

= Features =

- Address autocompletion on checkout shipping and billing pages
- Address autocompletion on accounts pages
- Post towns now capitalised by default (instead of all caps)
- Checks if key is usable before enabling autocomplete
- Optionally populate organisation name from selected address
- Optionally populate county information

== Installation ==

= Wordpress Plugins =

1. Install the plugin through the Wordpress plugins screen

= Manual Installation =

1. Retrieve the plugin from the [Github repository](https://github.com/ideal-postcodes/woocommerce) and download the latest from the [releases page](https://github.com/ideal-postcodes/woocommerce/releases)
2. Unzip the release and upload the `uk-address-postcode-validation` directory to `/wp-content/plugins/uk-address-postcode-validation`

= Configuration =

When the plugin has been retrieved manually or via the plugins page,

1. Activate the plugin through the 'Plugins' screen in WordPress
2. Configure the plugin. Click on the WooCommerce link in the sidebar, then the `Integrations` tab on the settings page and finally `UK Address Postcode Validation`.
3. Add your API Key. You will need to add your API Key from your Ideal Postcodes dashboard. Your first key will have a free test balance. To go live, you will need to prepurchase a lookup balance on your key.

== Frequently Asked Questions ==

= How do I create an Ideal Postcodes API Key? =

You will need to create an account on Ideal-Postcodes.co.uk and generate a key from the dashboard. [View our guide](https://ideal-postcodes.co.uk/guides/account-setup) on how to create your first Ideal Postcodes API key and enable automated top-ups.

= Is this free to test? =

Yes. Your first key on your Ideal Postcodes account will carry a free test balance which you can use to verify and test your integration. When you are ready to go live, you will need to add a live balance to your Key either manually or with automated top-ups.

= How much does this cost? =

Prices range between 2 and 2.5p per lookup, with alternate pricing options available for specific sectors and volumes. See our [pricing page](https://ideal-postcodes.co.uk/pricing) or [contact us](https://ideal-postcodes.co.uk/support) to find out more.

== Screenshots ==

1. Address autocompletion on accounts pages
2. Address autocompletion on checkout billing and shipping pages
3. Admin console
4. Admin console, second tab

== Changelog ==

= 3.5.7 =
* Fix broken settings link on Plugins list page

= 3.5.6 =
* Update Postcode Lookup to version 2.0.0

= 3.5.5 =
* Toggle the country context of Address Finder when a new country is selected in checkout
* Fix address field binding for certains countries with dynamically generated inputs in WooCommerce Blocks checkout

= 3.5.4 =
* Improve Postcode Lookup layout on WooCommerce Blocks checkout

= 3.5.3 =
* Better handling of new WooCommerce Blocks county and county combobox

= 3.5.2 =
* Recompile JavaScript packages

= 3.5.1 =
* Fix issue with country selection for certain country input fields

= 3.5.0 =
* Add support for blocks checkout
* Add support for php 8.2+

= 3.4.4 =
* Update Address Finder and Postcode Lookup to newest versions
* Fix issue with admin Address Finder config override option
* Add testing against php 8+

= 3.4.1 =
* Allow Postcode Lookup styles override

= 3.4.0 =
* Add search for wordpress customer user creation

= 3.3.2 =
* Declare compatibility for HPOS

= 3.2.3 =
* Add Postcode Lookup entity targeting
* Add Postcode Lookup contextClass to enable styling

= 3.2.2 =
* Add tests for WooCommerce 5.9

= 3.2.1 =
* Add tests for WooCommerce 5.6

= 3.2.0 =
* Adds Address Validation to WooCommerce Admin dashboard
* Defaults county population to true
* Test on WooCommerce 5.5
* Upgrade Postcode Lookup to 1.8
* Upgrade Address Finder to 2.2

= 3.1.4 =
* Test on WooCommerce 5.4
* Test on Wordpress 5.7

= 3.1.3 =
* Update Readme

= 3.1.2 =
* Test on WooCommerce 5.2

= 3.1.1 =
* Upgrade Postcode Lookup to 1.7.2

= 3.1.0 =

*Important.* If you are using Postcode Lookup consider checking the styling of our Postcode Lookup tools on your checkout and user address book. This is particularly important if you are using custom styling to adapt our Postcode Lookup to your theme.

As always, please drop by chat (chat.ideal-postcodes.co.uk) if you have any questions about this change.

This update brings accessibility, usability and consistency improvements to our Postcode Lookup tools. In order to do this, the update reorganises Postcode Lookup HTML elements which may require you to update any custom styling you may have applied.

* Reorganise Postcode Lookup HTML Elements to more closely match WooCommerce defaults
* Adds "Postcode Lookup" label above Postcode Lookup search box for better accessibility
* Improves touch target size for small screen sizes on Postcode Lookup

= 3.0.6 =
* Adds testing for WooCommerce 5.1

= 3.0.5 =
* Use country ISO code in country field if text input is detected. Currently Ideal Postcodes will set the country to it's full name (United Kingdom) rather than ISO code (GB) if a text input field is detected. This behaviour has been changed so that the ISO code is added only

= 3.0.4 =
* Update Address Finder
* Update Postcode Lookup
* Rebuild JS payload to incorporate 3.0.3

= 3.0.3 =
* Delay checkout refresh to after address population is complete

= 3.0.2 =
* Improve styling of default postcode lookup setup

= 3.0.1 =
* Updates Address Finder to 1.8.0
* Updates Postcode Lookup to 1.7.0
* Update and compress Address Finder CSS

= 3.0.0 =

Substantial upgrade of Postcode Lookup and Address Finder.

Custom override users (advanced configuration) will be affected by Breaking Changes. You will not need to take action if your "Postcode Lookup Configuration Override" and "Address Autocomplete Configuration Override" configurations are empty.

If you are upgrading from 1.x please upgrade to 2.x first to ensure your configuration is migrated correctly.

Please reach out to support (https://ideal-postcodes.co.uk/support) if this change brings backwards incompatible changes not listed here. We will address these immediately.

New Features:

* Screen Reader Support. Both Postcode Lookup and Address Finder are now screen reader friendly. Any visually impaired user will now get audio cues when using our Address Validation tools.
* Address Validation can be hidden when an unsupported territory/country is selected. This can be enabled from the admin panel.
* Initialised Address Finder and Postcode Lookup controllers are now available at the global IdealPostcodes namespace for easier customisation
* More custom callback options for Address Finder and Postcode Lookup
* More custom styling options for Address Finder and Postcode Lookup
* More custom behaviours like auto select single premise postcodes, hide/unhide address fields

Breaking Changes:

* Both Postcode Lookup and Address Finder have been replaced. This means the any custom library overrides on the admin page will need to be translated into the new setup format.

Deprecations:

* The legacy Postcode Lookup jQuery plugin is deprecated. This library will continue to be served until 4.0 is released. Please use Postcode Lookup instead (https://postcode-lookup.ideal-postcodes.dev/)
* The legacy Address Finder plugin is deprecated. This library will continue to be served until 4.0 is released. Please use Address Finder instead (https://address-finder.ideal-postcodes.dev/)

Chores:

* Adds testing on WooCommerce 5.0
* Remove data migration check

= 2.3.1 =
* Add tests for WooCommerce 4.9

= 2.3.0 =
* Add tests for Wordpress 5.6
* Add tests for WooCommerce 4.8

= 2.2.0 =
* Added Postcode Lookup and Address Autocomplete configuration overrides

= 2.1.9 =
* Tested up to WooCommerce 4.7
* Test Wordpress 5.5.3

= 2.0.3 =
* Tested up to WooCommerce 4.6

= 2.0.2 =
* Tested up to WooCommerce 4.3

= 2.0.1 =
* Fix: Restore manual checkout trigger

= 2.0.0 =
* Tested up to WooCommerce 4.2
* BREAKING CHANGE: Settings page moved to Integration tab, under "UK Address Postcode Validation"
* Feature: Adds postcode lookup to checkout pages

= 1.0.5 =
* Manually fire checkout refresh on address population

= 1.0.3 =
* Update tested platforms for Wordpress & WooCommerce
* Release to Wordpress plugins directory

= 1.0.2 =
* Automate version deploys to Wordpress plugins directory

= 1.0.1 =
* Drop trademark for plugin submission

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.5 =
* None

= 1.0.4 =
* None

= 1.0.3 =
* Installations and updates can now be retrieved from the Wordpress plugins directory

= 1.0.2 =
* None

= 1.0.1 =
* None

= 1.0.0 =
* Initial release
