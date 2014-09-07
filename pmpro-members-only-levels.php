<?php
/*
Plugin Name: PMPro members-only membership levels
Plugin URI: https://github.com/nickgriffiths/pmpro-members-only-levels
Description: A plugin for Paid Memberships Pro to configure a subset of membership levels to be visible only to existing members.
Version: .1
Author: Nick Griffiths
Author URI: https://github.com/nickgriffiths
*/

function pmpromoml_pmpro_levels_array($pmpro_levels) {
	
	global $current_user;
	
	$is_member = isset($current_user->membership_level->ID);
	foreach($pmpro_levels as $key => $level) {
		if(strpos($level->name, '1 year') !== false) {
			if (!$is_member) {
				unset($pmpro_levels[$key]);
			}
		}
	}
	
	
	return $pmpro_levels;
}
add_filter("pmpro_levels_array", "pmpromoml_pmpro_levels_array");
