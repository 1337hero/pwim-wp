<?php

//*******************************************//
//           THEME INITIALIZATION            //
//*******************************************//


// INIT CORE COMPONENTS
require get_parent_theme_file_path( '/_lib/nuke.php' );
require get_parent_theme_file_path( '/_lib/login.php' );


// ADD THEME FEATURES
require get_parent_theme_file_path( '/_lib/post-type-trails.php' );
require get_parent_theme_file_path( '/_lib/features.php' ); 


// ENQUEUE THEME
function load_theme() {
    global $wp_query;
    
    // We don't need WordPress doing it for us!
    // if ( !is_admin() ) wp_deregister_script('jquery'); 
    if ( !is_admin() ) wp_deregister_script('wp-embed');
    // if ( !is_admin() ) wp_deregister_script('jquery-migrate'); 

    // DEV MODE
    wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/assets/scripts.min.js' );
    wp_register_script( 'video',   get_stylesheet_directory_uri() . '/assets/video.js' );

    wp_enqueue_style( 'main-styling', get_stylesheet_directory_uri() . '/assets/styles.min.css' );
    wp_enqueue_style( 'aos', get_stylesheet_directory_uri() . '/assets/aos.min.css' );

    // PRODUCTION MODE
    //wp_register_script( 'scripts', 'https://cdn.powerwagonsinmoab.com/assets/scripts.min.js' );
    //wp_register_script( 'video',   'https://cdn.powerwagonsinmoab.com/assets/video.js' );

    //wp_enqueue_style( 'main-styling', 'https://cdn.powerwagonsinmoab.com/assets/styles.min.css' );
    //wp_enqueue_style( 'aos', 'https://cdn.powerwagonsinmoab.com/assets/aos.min.css' );

    // Inject the theme scripts into the footer
    wp_enqueue_script(  'scripts', '', '', '', true ); 

    // Check if homepage to load this script, otherwise don't load it!
    if ( is_page_template( 'homepage.php' ) ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_script(  'video', '', '', '', true );
    }

}
add_action( 'wp_enqueue_scripts', 'load_theme' );

// DEFER SCRIPTS ON LOAD 
function js_defer($tag, $handle) {
    // add script handles to the array below
    $scripts_to_defer = array('scripts', 'video');

    foreach($scripts_to_defer as $defer_script) {
        if ($defer_script === $handle) {
            return str_replace(' src', ' defer="defer" src', $tag);
        }
   }
   return $tag;
}
add_filter( 'script_loader_tag', 'js_defer', 10, 2);