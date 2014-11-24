<?php

add_filter('comment_post_redirect', 'redirect_after_comment');
function redirect_after_comment($location)
{
return $_SERVER["HTTP_REFERER"] . "#post-" . $_POST['comment_post_ID'];
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="next-page"';
}

function register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menu' );

?>