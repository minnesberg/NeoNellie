<?php
function register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menu' );

add_filter('comment_post_redirect', 'redirect_after_comment');
function redirect_after_comment($location)
{
return $_SERVER["HTTP_REFERER"] . "#post-" . $_POST['comment_post_ID'];
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="next-page"';
}

function my_scripts_method() {
	wp_enqueue_script(
		'modernizr',
		get_stylesheet_directory_uri() . '/js/modernizr-2.6.2.min.js'
	);
	wp_enqueue_script(
		'infinitescroll',
		get_stylesheet_directory_uri() . '/js/jquery.infinitescroll.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'fancybox',
		get_stylesheet_directory_uri() . '/js/jquery.fancybox.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'main',
		get_stylesheet_directory_uri() . '/js/main.js',
		array( 'jquery' )
	);
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

add_filter('wp_get_attachment_link', 'add_gallery_id_rel');
function add_gallery_id_rel($link) {
	global $post;
	return str_replace('<a href', '<a rel="lightbox-' . get_the_id() . '" href', $link);
}

?>