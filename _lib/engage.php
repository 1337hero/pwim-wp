<?php

//*******************************************//
//           THEME INITIALIZATION            //
//*******************************************//


// INIT CORE COMPONENTS
require get_parent_theme_file_path( '/_lib/nuke.php' );
require get_parent_theme_file_path( '/_lib/login.php' );

// ADD THEME FEATURES
require get_parent_theme_file_path( '/_lib/post-type-slideshow.php' );
require get_parent_theme_file_path( '/_lib/post-type-trails.php' );
require get_parent_theme_file_path( '/_lib/features.php' ); 


// ENQUEUE THEME
function load_theme() {
    global $wp_query;
    
    // We don't need WordPress doing it for us!
    // if ( !is_admin() ) wp_deregister_script('jquery'); 
    // if ( !is_admin() ) wp_deregister_script('wp-embed');
    // if ( !is_admin() ) wp_deregister_script('jquery-migrate'); 

    // Register Scripts
    wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/assets/scripts.min.js' );
    wp_register_script( 'video',   get_stylesheet_directory_uri() . '/assets/video.js' );

    // Inject the site styling into the header
    wp_enqueue_style( 'main-styling', get_stylesheet_directory_uri() . '/assets/styles.min.css' );

    // Inject the theme scripts into the footer
    wp_enqueue_script(  'scripts', '', '', '', false ); 

    // Check if homepage to load this script, otherwise don't load it!
    if ( is_page_template( 'homepage.php' ) ) {
        wp_deregister_script('jquery'); 
        wp_enqueue_script(  'video', '', '', '', true );
    }

}
add_action( 'wp_enqueue_scripts', 'load_theme' );