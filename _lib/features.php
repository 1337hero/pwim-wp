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
      'Nav-2' => __( 'Footer Nav' ),
      'Nav-3' => __( 'Mobile Home Nav' ),
      'Nav-4' => __( 'Mobile Sidebar Nav' )
    )
  );
}
add_action( 'init', 'wp_theme_navigation' );