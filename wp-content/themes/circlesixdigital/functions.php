<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        rand(111,9999)
    );
}

add_filter( 'get_the_archive_title', function ($title) {    
    if ( is_category() ) {    
            $title = single_cat_title( '<span style="font-size: 1rem;">Category:</span> ', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        }    
    return $title;    
});


add_filter('the_category', 'c6_the_category');
function c6_the_category($cat_list)
{
    return str_ireplace(',', ' ', $cat_list);
}

// add_filter( 'sidebars_widgets', 'c6_disable_widgets' );
// function c6_disable_widgets( $sidebars_widgets ) 
// {
//     if (is_single(array(93,134,152,157))) {
//         $sidebars_widgets = array( false );
//         return $sidebars_widgets;
//     }
// }
  