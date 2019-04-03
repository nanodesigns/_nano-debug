<?php
/**
 * Plugin Name: _nano debug
 * Description: A debugger plugin specific only for the development stage. It is recommended to .gitignore the plugin in your git project. IT IS RECOMMENDED TO REMOVE THE PLUGIN BEFORE PRODUCTION.
 * Plugin URI:  https://nanodesignsbd.com/
 * Author:      nanodesigns
 * Author URI:  https://nanodesignsbd.com
 * Version:     1.0.0
 * License:     MIT
 * Text Domain: '_nano-debug'
 */

/**
 * Dump variable.
 * Inspired from Laravel.
 * @param  integer|array|string|boolean $var Any variable.
 * @return void.
 */
function dump( $var ) {
	highlight_string("<?php\n\$var =\n" . var_export($var, true) . ";\n?>");
}

/**
 * Dump the var and die.
 * Inspired from Laravel.
 * @param  integer|array|string|boolean $var Any variable.
 * @return void.
 */
function dd( $var ) {
	dump($var);
	exit();
}

/**
 * Debugging Scripts.
 * @return void.
 */
function _nano_debug_scripts() {
	wp_enqueue_style( '_nano-debug', plugins_url( '/', __FILE__ ) .'assets/css/_nano-debug.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', '_nano_debug_scripts');
