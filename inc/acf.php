<?php
/**
 * Setup Advanced Custom Fields
 *
 * @package understrap
 */

//Add the ACF contact page options tab
if( function_exists('acf_add_options_page') ) {

    $args = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Company Info',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Company Info',
    
);

    acf_add_options_page( $args );
    
}

//Add the ACF homepage options tab
if( function_exists('acf_add_options_page') ) {

    $args = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Homepage',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Home',
    
);

    acf_add_options_page( $args );
    
}

//Add the ACF about page options tab
if( function_exists('acf_add_options_page') ) {

    $args = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'About Page',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'About',
    
);

    acf_add_options_page( $args );
    
}

//Add the ACF contact page options tab
if( function_exists('acf_add_options_page') ) {

    $args = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Contact Page',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Contact',
    
);

    acf_add_options_page( $args );
    
}