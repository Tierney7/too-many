<?php
/*
Plugin Name: Less is More
Author: Matthew Tierney 
*/

add_action('admin_notices', 'less_is_more_message');

function less_is_more_message() {
    $plugins = get_plugins();
    $active_plugins_count = count($plugins);
    
    
    if ($active_plugins_count > 5) {
        echo '<div class="notice notice-info"><p>Less is more... Please delete unneeded plugins.</p></div>';
    }
}
