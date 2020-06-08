<?php
/**
 * @package  InpsydePlugin
 */
/*
Plugin Name: Inpsyde Plugin
Plugin URI: http://inpsyde.com/
Description: This is my task to build custom Plugin.
Version: 1.0.0
Author: Samrat Shakya
Author URI: http://samratshakya.com.np
License: OS
Text Domain: inpsyde-plugin
 */

// If this file is called firectly, abort!!!
defined('ABSPATH') or die('Access Denied');

// Require once the Composer Autoload
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_inpsyde_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_inpsyde_plugin');

/**
 * The code that runs during plugin deactivation
 */
function deactivate_inpsyde_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_inpsyde_plugin');

/**
 * Initialize all the core classes of the plugin
 */
if (class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}