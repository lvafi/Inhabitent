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

function inhabitent_login_logo(){
 echo '<style type="text/css">;
   body.login div#login h1 a {
		 background-image: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg);
		 background-size: 300px 53px;
		 width: 300px;
		 height: 53px;
	  }
		#login .button.button-primary {
			background-color: #248A83;}
}
</style>';
}
add_action('login_head','inhabitent_login_logo');

function inhabitent_login_logo_url($url) {
	return home_url();
}
add_filter('login_headerurl','inhabitent_login_logo_url');


function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_title');


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
   $args = array('posts_per_page' => 3,); 
   $posts = new WP_Query( $args );  ?>

<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	  <ul class="home-posts">
			<li><?php the_post_thumbnail(); ?> </li>
			<li><?php the_time('F jS, Y'); ?> <?php comments_popup_link('0 comments >>', '% Comments>>'); ?></li> 
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
	
