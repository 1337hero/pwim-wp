<?php

//*******************************************//
//           THEME FEATURES BUILD OUT        //
//*******************************************//

// ADD THEME SUPPORT FOR FEATURED IMAGES
function wp_theme_features()  {
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'slideshow', 'trails') ); 
}
add_action( 'after_setup_theme', 'wp_theme_features' );

add_image_size( 'post-thumbnail', 1000, 420 );
add_image_size( 'homepage-thumb', 342, 228 );
add_image_size( 'fullpage-thumb', 2000, 840 );

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
    return 40;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );


// ADD CUSTOM READ MORE TO THE EXCERPT
add_filter( 'excerpt_more', 'wihp_read_more_link' );
function wihp_read_more_link($more) {
   return ' ... <div class="clearme"><a class="read-more" href="' . get_permalink() . '">Continue reading <i class="fas fa-arrow-right"></i></a></div>';
}


// BUILD OUT NUMBERED PAGINATION
function pwim_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
        
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
        
     }
}
