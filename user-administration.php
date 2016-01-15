<?php
/**
 * Use the PHP for https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate
 *
 * @package   User Administration
 * @author    Airton Vancin Junior <airtonvancin@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/airton
 * @copyright 2016 Airton
 *
 * @wordpress-plugin
 * Plugin Name:       User Administration
 * Plugin URI:        https://github.com/airton/user-adminstration
 * Description:       Show only of his own publications
 * Version:           1.0.0
 * Author:            Airton Vancin Junior
 * Author URI:        http://airtonvancin.com
 * Text Domain:       user-administration
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/airton/user-administration
 */

if( ! defined( 'ABSPATH' ) ){
	exit;
}

/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function u_admin_load_textdomain() {
	load_plugin_textdomain( 'user-administration', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'u_admin_load_textdomain' );






function u_admin_shortcode( $attrs ){
	return __('Teste shortcode', 'user-administration');
}

add_shortcode( 'teste_shortcode', 'u_admin_shortcode' );




function custom_post_content( $content ){

	//return str_replace( 'Bem-vindo', 'Oii!!!!!!!!!', $content );

	return "<p>Estou aqui em cima</p>". $content;

}

add_filter( 'the_content', 'custom_post_content' );



function custom_post_class( $classes ){

	return array('minha','classe', 'opa');

}

add_filter( 'post_class', 'custom_post_class' );

