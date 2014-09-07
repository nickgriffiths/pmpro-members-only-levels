<?php
/*
Plugin Name: PMPro members-only membership levels
Plugin URI: https://github.com/nickgriffiths/pmpro-members-only-levels
Description: A plugin for Paid Memberships Pro to configure a subset of membership levels to be visible only to existing members.
Version: .1
Author: Nick Griffiths
Author URI: https://github.com/nickgriffiths
*/

function pmpromoml_pmpro_levels_array($pmpro_levels)
{
	var_dump($pmpro_levels);
	/*if(strpos($level->description, '1 Year') !== false) {
		
	}*/
	return $pmpro_levels;
}
add_filter("pmpro_levels_array", "pmpromoml_pmpro_levels_array");
