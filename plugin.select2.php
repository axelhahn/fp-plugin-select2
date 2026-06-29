<?php

/**
 * Plugin Name: Select2
 * Version: 1.0.0
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
 * This plugin displays a search box below select boxes in the admin area.
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
