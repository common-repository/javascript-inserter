<?php
/**
 * Plugin Name: JavaScript Inserter
 * Plugin URI: https://github.com/ArthurGareginyan/javascript-inserter
 * Description: Easily and safely add your custom JavaScript code to your WordPress website, directly out of the WordPress Admin Area, without the need to have an external editor.
 * Author: Space X-Chimp
 * Author URI: https://www.spacexchimp.com
 * Version: 1.28
 * License: GPL3
 * Text Domain: javascript-inserter
 * Domain Path: /languages/
 *
 * Copyright 2018-2021 Space X-Chimp ( website : https://www.spacexchimp.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗██████╗  █████╗  ██████╗███████╗    ██╗  ██╗      ██████╗██╗  ██╗██╗███╗   ███╗██████╗
 * ██╔════╝██╔══██╗██╔══██╗██╔════╝██╔════╝    ╚██╗██╔╝     ██╔════╝██║  ██║██║████╗ ████║██╔══██╗
 * ███████╗██████╔╝███████║██║     █████╗       ╚███╔╝█████╗██║     ███████║██║██╔████╔██║██████╔╝
 * ╚════██║██╔═══╝ ██╔══██║██║     ██╔══╝       ██╔██╗╚════╝██║     ██╔══██║██║██║╚██╔╝██║██╔═══╝
 * ███████║██║     ██║  ██║╚██████╗███████╗    ██╔╝ ██╗     ╚██████╗██║  ██║██║██║ ╚═╝ ██║██║
 * ╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝╚══════╝    ╚═╝  ╚═╝      ╚═════╝╚═╝  ╚═╝╚═╝╚═╝     ╚═╝╚═╝
 *
 */


/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function spacexchimp_p016_define_constants( $constant_name, $value ) {
    $constant_name = 'SPACEXCHIMP_P016_' . $constant_name;
    if ( ! defined( $constant_name ) )
        define( $constant_name, $value );
}
spacexchimp_p016_define_constants( 'FILE', __FILE__ );
spacexchimp_p016_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p016_define_constants( 'BASE', plugin_basename( __FILE__ ) );
spacexchimp_p016_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
spacexchimp_p016_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
spacexchimp_p016_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p016_define_constants( 'NAME', $plugin_data['name'] );
spacexchimp_p016_define_constants( 'VERSION', $plugin_data['version'] );
spacexchimp_p016_define_constants( 'TEXT', $plugin_data['text'] );
spacexchimp_p016_define_constants( 'PREFIX', 'spacexchimp_p016' );
spacexchimp_p016_define_constants( 'SETTINGS', 'spacexchimp_p016' );

/**
 * A useful function that returns an array with the contents of the plugin constants
 */
function spacexchimp_p016_plugin() {
    $array = array(
        'file'     => SPACEXCHIMP_P016_FILE,
        'dir'      => SPACEXCHIMP_P016_DIR,
        'base'     => SPACEXCHIMP_P016_BASE,
        'url'      => SPACEXCHIMP_P016_URL,
        'path'     => SPACEXCHIMP_P016_PATH,
        'slug'     => SPACEXCHIMP_P016_SLUG,
        'name'     => SPACEXCHIMP_P016_NAME,
        'version'  => SPACEXCHIMP_P016_VERSION,
        'text'     => SPACEXCHIMP_P016_TEXT,
        'prefix'   => SPACEXCHIMP_P016_PREFIX,
        'settings' => SPACEXCHIMP_P016_SETTINGS
    );
    return $array;
}

/**
 * Put value of plugin constants into an array for easier access
 */
$plugin = spacexchimp_p016_plugin();

/**
 * Load the plugin modules
 */
require_once( $plugin['path'] . 'inc/php/core.php' );
require_once( $plugin['path'] . 'inc/php/options.php' );
require_once( $plugin['path'] . 'inc/php/upgrade.php' );
require_once( $plugin['path'] . 'inc/php/versioning.php' );
require_once( $plugin['path'] . 'inc/php/enqueue.php' );
require_once( $plugin['path'] . 'inc/php/functional.php' );
require_once( $plugin['path'] . 'inc/php/controls.php' );
require_once( $plugin['path'] . 'inc/php/page.php' );
require_once( $plugin['path'] . 'inc/php/messages.php' );
