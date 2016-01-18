<?php
/**
 * Use the PHP for https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate
 *
 * @package   Manage User Roles
 * @author    Airton Vancin Junior <airtonvancin@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/airton/manage-user-roles
 * @copyright 2016 Airton
 *
 * @wordpress-plugin
 * Plugin Name:       Manage User Roles
 * Plugin URI:        https://github.com/airton/manage-user-roles
 * Description:       Show only of his own publications
 * Version:           1.0.0
 * Author:            Airton Vancin Junior
 * Author URI:        http://airtonvancin.com
 * Text Domain:       manage-user-roles
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/airton/manage-user-roles
 */

// Previne acesso direto
if( ! defined( 'ABSPATH' ) ){
	exit;
}

/**
 * Carrega arquivos de traduções.
 *
 * @return void
 */
function mur_load_textdomain() {
	load_plugin_textdomain( 'manage-user-roles', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'mur_load_textdomain' );


