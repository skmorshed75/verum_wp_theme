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
 //Class 4.21
 require_once plugin_dir_path(__FILE__)."/widgets/verum-flickr-widget.php";
 //Class 4.24
 require_once plugin_dir_path(__FILE__)."/widgets/verum-about-widget.php";
 //Class 4.25
 require_once plugin_dir_path(__FILE__)."/widgets/verum-recent-posts-widget.php";
 //Class 4.26
 require_once plugin_dir_path(__FILE__)."/widgets/verum-advertisement-widget.php";
//Class 4.27
 require_once plugin_dir_path(__FILE__)."/widgets/verum-mailchimp-widget.php";


 function verumc_load_textdomain(){
     load_plugin_textdomain('verum-companion',false,dirname(__FILE__)."/languages");
 }
 add_action('plugins_loaded','verumc_load_textdomain');

 function verum_plugin_init(){
    add_image_size('verum-sidebar-thumbnail',90,75,true);
 }
 add_action('init','verum_plugin_init');