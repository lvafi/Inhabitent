<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function inhabitent_login_log(){
    echo '<style type="text/css">

    #login h1 a {
        background: url('. get_stylesheet_directory_uri(). '/images/logos/inhabitent-logo-text-dark.svg) no-repeat !important;
        background-size: 300px 53px !important; 
        width: 300px !important; 
        height: 53px !important;
        }
        #login .button.button-primary {
            background-color: #248A83 ;
            }
    </style>';
}
add_action( 'login_head','inhabitent_login_log' );

function inhabitent_login_log_url( $url ) {
 return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_log_url' );







/**
 * Custom About Page background image
 */
function my_styles_method() {

				if(!is_page_template( 'page-about.php' )){
					return;
				}

        $url = CFS()->get( 'about_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
        $custom_css = "
                .about-hero{
                        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({$url}) no-repeat bottom center;
												background-size: cover;
                }";
        wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );


/**
 * Changing the number of posts per page
 */
function textdomain_set_post_per_page( $query ) {
    //Display 16 posts for a custom post type called 'movie'
    if ( is_post_type_archive( 'product' ) && !is_admin() && $query->is_main_query() ) {
        $query->set('posts_per_page', 16);
				$query->set('orderby', 'title');
				$query->set('order', 'ASC');
    }
		else if ( is_post_type_archive( 'product_type' ) && !is_admin() && $query->is_main_query() ) {
        $query->set('posts_per_page', 4);
				$query->set('orderby', 'title');
				$query->set('order', 'ASC');
    }
}
add_action( 'pre_get_posts', 'textdomain_set_post_per_page', 1 );


/**
 * Changes title to just title. Nothing like Category:.
 */
function product_type_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'product_type_archive_title' );
/**
 * Changes title to just title 'product'.
 */
function inhabitent_product_archive_title( $title ) {
    if ( is_post_type_archive('product') ) {
        $title = 'Shop Stuff';
    } 
    return $title;
}

add_filter( 'get_the_archive_title', 'inhabitent_product_archive_title' );
	
