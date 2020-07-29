<?php
/**
 * Plugin Name: Verum Theme Companion Plugin
 * Plugin URI: vtcp.com
 * Description: Verum theme Companion Plugin
 * Version: 1.0
 * Author LWHH
 * Author URI: lwhh.com
 * License: GPLv2 or later
 * Text Domain: verum-companion
 * Domain Path: /languages/
 */

 //Class 4.15

 require_once plugin_dir_path(__FILE__)."/widgets/verum-social-widget.php";

 function verumc_load_textdomain(){
     load_plugin_textdomain('verum-companion',false,dirname(__FILE__)."/languages");
 }
 add_action('plugins_loaded','verumc_load_textdomain');