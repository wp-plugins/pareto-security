<?php
 /*
  The user function for uninstalling Pareto Security WordPress plugin
  Plugin Name: Pareto Security
  Plugin URI: http://hokioisec7agisc4.onion/?p=25
  Description: Core Security Class - Defense against a range of common attacks such as database injection
  Author: Te_Taipo
  Version: 1.0.3
  Author URI: http://hokioisec7agisc4.onion
  BTC:1LHiMXedmtyq4wcYLedk9i9gkk8A8Hk7qX
  */

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}


if ( !is_user_logged_in() )
	wp_die( 'You must be logged in to run this script.' );

if ( !current_user_can( 'install_plugins' ) )
	wp_die( 'You do not have permission to run this script.' );


// Enter our plugin uninstall script below
?>