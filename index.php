<?php 
/**
 *  Plugin Name: Page Refresh Counter (revised)
 *  Description: Counts how many times the page has reloaded
 */

session_start();
// Begins session 
//adds option to options.php

function reload_count()  {
    if (!(get_option('reload_counter','0'))) {
    // If the $_SESSION does not have 'count' set as a variable
        add_option('reload_counter','0');
        // Create variable and set 'count' to 0
    } else {
        $count = get_option('reload_counter');
        $count++;
        update_option('reload_counter',"$count");
        // Increase 'count' by increments
    }
    
    echo get_option('reload_counter');
    
};

add_action('wp_head','reload_count');



?>