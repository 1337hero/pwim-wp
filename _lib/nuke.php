<?php

//*******************************************//
//                                           //
//        WORDPRESS NUCLEAR OPTION           //
//           Built by Mike Key               //
//*******************************************//

// REMOVE BLOAT FROM HEAD!!
add_filter( 'emoji_svg_url', '__return_false' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// REMOVE MENU CLASSES!!
add_filter( 'nav_menu_css_class', function ( array $classes, $item, $args, $depth ) {
    $disallowed_class_names = array(
        "menu-item",
        "menu-item-object-{$item->object}",
        "menu-item-type-{$item->type}",
        "menu-item-{$item->ID}",
        "current-{$item->object}-item",
        "current-{$item->type}-item",
        "current-{$item->object}-parent",
        "current-{$item->type}-parent",
        "current-{$item->object}-ancestor",
        "current-{$item->type}-ancestor",
        'page_item',
        'page_item_has_children',
        "page-item-{$item->object_id}",
        'current_page_parent',
        'current_page_ancestor',
    );
    foreach ( $classes as $class ) {
        if ( in_array( $class, $disallowed_class_names ) ) {
            $key = array_search( $class, $classes );
            if ( false !== $key ) {
                unset( $classes[ $key ] );
            }
        }
    }
    return $classes;
}, 10, 4 );

// REMOVE ID'S FROM EVERY MENU ITEM!!
function wp_nav_menu_remove_attributes( $menu ){
    return $menu = preg_replace('/ id=\"(.*)\"/iU', '', $menu );
}
add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );

// CLOSE COMMENTS ON FRONT END
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// HIDE EXISTING COMMENTS
function df_disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// REDIRECT USER TRYING TO ACCESS COMMENTS PAGE
function df_disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url()); exit;
    }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// REMOVE COMMENTS METABOX FROM DASHBOARD
function df_disable_comments_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// REMOVE COMMENTS FROM ADMIN BAR
function df_disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');

// ADD WIHP MESSAGE IN ADMIN AREA
add_filter('admin_footer_text', 'change_footer_content');
function change_footer_content() {
    echo 'Site built & managed by <a href="https://mk3y.com" target="_blank">Mike Key</a>';
}

// REMOVE WP VERISON FROM SITE
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// EXIT IF ACCESSED DIRECTLY FOR SECURITY
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


// REORDER ADMIN MENU IN MY IMAGINE
function reorder_admin_menu( $__return_true ) {
    return array(
         'index.php', 
         'upload.php', 
         'separator1', // --Space--
         'edit.php?post_type=page',  // Pages 
         'edit.php',                 // Posts
         'edit.php?post_type=trails',  // Documents
         'edit.php?post_type=slideshow', 
         'admin.php?page=gf_edit_forms',
         'separator2', // --Space--
         'themes.php', 
         'plugins.php', // Plugins
         'options-general.php', // Settings
         'users.php', // Users
         'tools.php', // Tools
        'separator3' // --Space--

   );
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );

add_filter( 'gform_menu_position', 'my_gform_menu_position' );
function my_gform_menu_position( $position ) {
    return 16.9;
}

// REMOVE ACCESS TO THINGS WE DO NOT WANT THE CLIENT MESSING WITH
function remove_admin_menus() {
   remove_menu_page( 'edit-comments.php' ); // Comments
}
add_action( 'admin_menu', 'remove_admin_menus' );


remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
