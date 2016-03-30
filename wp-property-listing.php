<?php
/*
* Plugin Name: WP Property Listing 
* Plugin URI:
* Description: This plugin is for browsing through listing of properties.
* Author: Arup Mondal
* Author URI: 
* Version: 0.0.1
* License: GPLv2
*/

//Exit if accessed directly
if(!defined('ABSPATH'))
	exit;

require_once (plugin_dir_path(__FILE__).'wp-property-cpt.php');
require_once (plugin_dir_path(__FILE__).'wp-property-fields.php');

