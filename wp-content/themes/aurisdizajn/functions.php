<?php

if ( ! isset( $content_width ) )
	$content_width = 685;

add_action( 'after_setup_theme', 'auris_setup' );

function auris_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	//add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

function add_scripts_and_styles() {
	wp_register_script( 'global', get_template_directory_uri() . '/js/misc.js', array( 'jquery' ), 1.2, true );
	wp_register_style( 'global', get_template_directory_uri() . '/style.css', null, 1.3, 'screen' );

	wp_enqueue_script( 'global' );
	wp_enqueue_style( 'global' );
}

add_filter( 'use_default_gallery_style', '__return_false' );
add_filter( 'wp_get_attachment_link' , 'add_gallery_rel' );

function add_gallery_rel( $attachment_link ) {
        global $post;
        $attachment_link = str_replace("<a", "<a rel=\"group-".$post->ID."\"", $attachment_link);
        return $attachment_link;
}

add_shortcode( 'gallery', 'file_gallery_shortcode' );

function file_gallery_shortcode( $atts ) {
    $atts['link'] = 'file';
    return gallery_shortcode( $atts );
}

function main_image() {
	$gallery = get_post_gallery_images( get_the_ID() );

	if ( count($gallery) ) {
		$image = '<img src="' . $gallery[0] . '" class="attachment-thumbnail" width="208" height="150" alt="' . get_the_title() . '" />';
		return $image;
	}

}

// custom taxonomy permalinks
add_filter('post_link', 'product_permalink', 10, 3);
add_filter('post_type_link', 'product_permalink', 10, 3);

function product_permalink($permalink, $post_id, $leavename) {
	if (strpos($permalink, '%product_cat%') === FALSE) {
		return $permalink;
	}

	// Get post
	$post = get_post($post_id);
	if (!$post) {
		return $permalink;
	}

	// Get taxonomy terms
	$terms = wp_get_object_terms($post->ID, 'product_cat');
	if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) {
		$taxonomy_slug = $terms[0]->slug;
	} else {
		$taxonomy_slug = 'other';
	}

	return str_replace('%product_cat%', $taxonomy_slug, $permalink);
}

// add product tags
add_action("save_post", "add_product_tags", '99', 2);

function add_product_tags($post_id, $post){
	if($post->post_type == 'product') {

		$pattern = '/\s([0-9]+)([a-zA-Z]?)$/';
		$title = $post->post_title;
		preg_match($pattern, $title, $matches);

		if ($matches) {
			$new_tag = trim($matches[0]);

			if ($new_tag != '' && !has_term( $new_tag, 'product_tag' ) ) {
				wp_set_post_terms( $post->ID, array($new_tag), 'product_tag', true );
			}
		}

	}
}

// change product order and remove pagination
add_action( 'pre_get_posts', 'modify_products_order' );

function modify_products_order( $query ) {
    if ( $query->is_tax() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        $query->set( 'posts_per_page', 36 );
        return;
    }
}

// remove PageNavi css
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'wp-pagenavi' );
       // deregister as many stylesheets as you need...
}

?>
