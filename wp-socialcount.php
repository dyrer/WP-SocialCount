<?php
/*
Plugin Name: WPSocialCount
Plugin URI: http://skin-planet.org
Description:
Version: 0.1
Author: Athanasiadis Evagelos
Author URI: http://athanasiadis.me
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
More 
*/


// Register Script
function wpsocialcount_enqueue() {

	wp_register_script( 'wpsocialcount', 'url_plugins(\'/js/\')', array( 'socialcount.js' ), false, true );
	wp_enqueue_script( 'wpsocialcount' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'wpsocialcount_enqueue' );