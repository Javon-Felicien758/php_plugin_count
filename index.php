<?php 
/**
 *  Plugin Name: Page Refresh Counter (revised)
 *  Description: Counts how many times the page has reloaded
 */


function reload_count()  {
    
    $count = (int) get_option('reload_counter', 0 );
    $count++;
    
    update_option('reload_counter', $count );
    
    echo $count;
    
};

add_action('wp_head','reload_count');



?>
