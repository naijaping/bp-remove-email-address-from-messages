<?php
/*
Plugin Name: Bp Remove Email Address From Messages
Plugin URI: http://cityflavourmagazine.com
Description: Stop members from sending email address to each other by removing it automatically when sent.
Version: 1.0
Requires at least: WordPress 3.0 / BuddyPress 1.3
Tested up to: WordPress 3.6  / BuddyPress 1.8.1 
License: GNU/GPL 2
Author URI: http://cityflavourmagazine.com/
Author:Prince Abiola Ogundipe
*/


function omo_remove_email_from_BP_private_messages_init() {
	require( dirname( __FILE__ ) .'/bp-remove-email-address-from-messages' );
}
add_action( 'bp_include', 'omo_remove_email_from_BP_private_messages_init' );


?>
