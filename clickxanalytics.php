<?php
/*
 * Plugin Name: Clickx Analytics
 * Version: 1.0.3
 * Plugin URI: https://www.clickx.io
 * Description: Plugin to insert clickX analytics into your wordpress website.
 * Author: Clickx
 * Author URI: https://www.clickx.io
 * Requires at least: 4.2
 * Tested up to: 4.9.4
 * Text Domain: clickx

 Copyright 2017 Clickx Analytics

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
// Setup
if ( !function_exists( 'add_action' ) ){
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
$plugin = plugin_basename( __FILE__ );
//Includes
include('includes/activate.php');
include('includes/adminmenu.php');

//Hooks
register_activation_hook (__FILE__,'clickx_activate');
add_action( 'wp_footer', 'clickx_insertfooter');
add_action( 'admin_menu', 'clickx_menucreate');
add_action( 'admin_enqueue_scripts', 'clickx_enqeue_code' );
add_filter( "plugin_action_links_$plugin", 'clickx_add_settings_link' );

// Core
function clickx_insertfooter(){
    $sloppyspiderman = get_option('clickx_code', 'XXXX');
    echo '<!--  Clickx Analytics  --> <script type="text/javascript">!function(e,n,o,t){var r=n.createElement(o);r.src=t+"?time="+(new Date).getTime(),r.async=!0,r.onload=function(){ClickxTracker.init({twId:"'.$sloppyspiderman.'", apiUrl:"https://app.clickx.io"})},   r.onerror=function(){console.log("Error")},n.getElementsByTagName("head")[0].appendChild(r)}(window,document,"script","https://app.clickx.io/clickx-tracker.js");</script><noscript><p><img src="https://app.clickx.io/tracker.gif?twId='.$sloppyspiderman.'&noscript=true" style="border:0;" alt="" /></p></noscript><!-- End Clickx Analytics -->';
}
function clickx_enqeue_code(){
        wp_register_style( 'clickx_wp_admin_css', plugins_url('/css/plugin.css', __FILE__, false, '0.0.1'));
        wp_enqueue_style( 'clickx_wp_admin_css' );
}
?>