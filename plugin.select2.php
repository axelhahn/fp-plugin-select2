<?php

/**
 * Plugin Name: Select2
 * Version: 0.0.1
 * Plugin URI: https://github.com/axelhahn/fp-plugin-select2
 * Description: Adds a text filter to select boxes in the admin area using Select2
 * Author: Axel Hahn
 * Author URI: https://www.axel-hahn.de
 */

/**
 * --------
 * About
 * --------
 *
 * This plugin displays single images and whole image galleries with the JavaScript library
 * PhotoSwipe (photoswipe.com). Since it uses FlatPress default functionality for building
 * the image HTML, you may use the documented parameters of the [img] tag such as "alt",
 * "title", "height", "width" or "float" (see FlatPress BBCode documentation for details).
 *
 *
 * --------
 * Usage
 * --------
 *
 * Enable the plugin.
 * Then the select boxes in the admin area will have a text filter. 
 * Just start typing to filter the options.
 */

if(! strstr($_SERVER['SCRIPT_NAME'], 'admin.php')) {
	return true;
}

// Always load the plugin tag handlers
include_once dirname(__FILE__) . '/select2.class.php';

add_action('wp_head', 'Select2Functions::htmlHead', 2);

// Inject necessary JavaScript and Overlay-Container into the footer section
add_action('wp_footer', 'Select2Functions::htmlFooter', 10);
