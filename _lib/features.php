<?php

//*******************************************//
//           THEME FEATURES BUILD OUT        //
//*******************************************//

// ADD THEME SUPPORT FOR FEATURED IMAGES
function wp_theme_features()  {
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'slideshow', 'trails') ); 
}
add_action( 'after_setup_theme', 'wp_theme_features' );


// ADD MENU SUPPORT
function wp_theme_navigation() {
  register_nav_menus(
    array(
      'Nav-1' => __( 'Main Nav' ),
      'Nav-2' => __( 'Quick Links' ),
      'Nav-3' => __( 'Mobile Sidebar Nav' )
    )
  );
}
add_action( 'init', 'wp_theme_navigation' );

// Custom Excerpt Length Function
function ld_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );

function ld_new_excerpt_more($more) {
    global $post;
    return ' . . .';
}
add_filter('excerpt_more', 'ld_new_excerpt_more');
?>