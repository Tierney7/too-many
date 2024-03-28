<?php
/*
Plugin Name: Less is More 
Description: Alerts users by displaying a message in the dashboard if too many plugins are installed
Version: 1.0
Author: Matthew Tierney 
*/

add_action('admin_notices', 'less_is_more_message');

function less_is_more_message() {
    $active_plugins = get_option('active_plugins');
    $num_active_plugins = count($active_plugins);
    
    
    if ($num_active_plugins > 5) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p>Less is more... Please delete unneeded plugins.</p></div>';
        echo '</div>'
    }
}

add_action('admin_notices', 'less_is_more_message');