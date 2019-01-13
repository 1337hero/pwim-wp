<?php
// REGISTAR DOCUMENTATION
function trails_post_type() {

    $labels = array(
        'name'                  => _x( 'Trails', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Trail', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Trails', 'text_domain' ),
        'name_admin_bar'        => __( 'Trails', 'text_domain' ),
        'archives'              => __( 'Moab Trails', 'text_domain' ),
        'attributes'            => __( 'Trail Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Trail:', 'text_domain' ),
        'all_items'             => __( 'View All', 'text_domain' ),
        'add_new_item'          => __( 'Add Trail', 'text_domain' ),
        'add_new'               => __( 'Add New Trail', 'text_domain' ),
        'new_item'              => __( 'New Trail', 'text_domain' ),
        'edit_item'             => __( 'Edit Trail', 'text_domain' ),
        'update_item'           => __( 'Update Trail', 'text_domain' ),
        'view_item'             => __( 'View Trail', 'text_domain' ),
        'view_items'            => __( 'View Trials', 'text_domain' ),
        'search_items'          => __( 'Search Trail', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Trail Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set trail image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove trail image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as trail image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into trail', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this trail', 'text_domain' ),
        'items_list'            => __( 'Trails list', 'text_domain' ),
        'items_list_navigation' => __( 'Trails list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'Trails', 'text_domain' ),
        'description'           => __( 'Trails in Moab', 'text_domain' ),
        'menu_icon'             => __('dashicons-media-document'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'page-attributes', 'revisions', 'thumbnail', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'trails', $args );

}
add_action( 'init', 'trails_post_type', 0 );