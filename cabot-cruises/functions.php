<?php
    // Remove visual editor
    add_filter( 'user_can_richedit' , '__return_false', 50 );

    // Create a menu
    register_nav_menu( 'siteNavigation', 'Primary Navigation' );

    // Read more button
    function wpdocs_excerpt_more($more) {
        return '<a href="'.get_the_permalink().'" rel="nofollow" class="primary read-more">Read More...</a>';
    }
    
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more');


    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 292, 292, true ); // default Post Thumbnail dimensions (cropped)        
    }

	function shapeSpace_customize_image_sizes($sizes) {
            unset($sizes['thumbnail']);
	    unset($sizes['medium']);
	    unset($sizes['medium_large']);
	    unset($sizes['large']);
	    return $sizes;        
        }

        add_filter('intermediate_image_sizes_advanced', 'shapeSpace_customize_image_sizes');

        // disable srcset on frontend
	function disable_wp_responsive_images() {
	    return 1;
	}

	add_filter('max_srcset_image_width', 'disable_wp_responsive_images');

	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

	function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    		return $html;
	}	

	
?>