<?php
/*
Plugin Name: PMPro members-only membership levels
Plugin URI: https://github.com/nickgriffiths/pmpro-members-only-levels
Description: A plugin for Paid Memberships Pro to configure a subset of membership levels to be visible only to existing members.
Version: .1
Author: Nick Griffiths
Author URI: https://github.com/nickgriffiths
*/

function pmpromoml_pmpro_pages_shortcode_levels($content)
{
	ob_start();
	include(plugin_dir_path(__FILE__) . "templates/levels.php");
	$temp_content = ob_get_contents();
	ob_end_clean();
	return $temp_content;
}
add_filter("pmpro_pages_shortcode_levels", "pmpromoml_pmpro_pages_shortcode_levels");
