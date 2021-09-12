<?php
/*
Plugin Name: YouTube subscribe widget
Description: A widget that displays channel name and icon + subcribe button
Version:     0.1
Author:      Francesco Silvani
Author URI:  https://nasa-boi.ga
License:     GPL2 etc
*/

// Exit if accesed
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__). '/include/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__). '/include/youtubesubs-class.php');

// Register
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'Youtube_Subs_Widget');

?>