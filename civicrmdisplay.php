<?php
/**
 * Plugin Name: CiviCRM Display
 * Plugin URI: http://www.DallasGiveCamp.org
 * Description: the goal of this plugin is to provide a way to mine information from CiviCRM for display on a random page
 * Version: 0.1
 * Author: Shawn Weisfeld
 * Author URI: http://www.ShawnWeisfeld.com
 * License: ???
 */    
    
defined('ABSPATH') or die("No script kiddies please!");


function list_events() {
    global $wpdb;
    $myevents = $wpdb->get_results( "SELECT * FROM civicrm_event;" );

    foreach ($myevents as $myevent) {
        echo '<p>' .$myevent->title. '</p>';
    }
}
add_shortcode( 'list_events', 'list_events' );


?>
