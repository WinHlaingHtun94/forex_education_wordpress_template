<?php

// (1)hide adminbar
add_filter('show_admin_bar', '__return_false');

// (2)remove p tag
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_theme_support('post-thumbnails');
add_image_size('bnrImg',1200,600,true);

// (3)fixed page img setting
function img_replace_filter($content){
$content = str_replace('"assets/img/', '"' . get_bloginfo('template_directory') . '/assets/img/', $content);
return $content;
}
add_filter('the_content','img_replace_filter');


// fixed page a tag filter
function atag_replace_filter($content){
$content = str_replace('"assets/pdf/', '"' . get_bloginfo('template_directory') . '/assets/pdf/', $content);
return $content;
}
add_filter('the_content','atag_replace_filter');

remove_action( 'wp_head', 'feed_links_extra', 3 );

add_theme_support( 'automatic-feed-links' );

function remove_emoji() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'remove_emoji' );

function deny_restapi_except_plugins( $result, $wp_rest_server, $request ) {
        $namespaces = $request->get_route();
        // oembed
        if( strpos( $namespaces, 'oembed/' ) === 1 ) {
                return $result;
        }
        // Jetpack
        if( strpos( $namespaces, 'jetpack/' ) === 1 ) {
                return $result;
        }
        // BlockEditor
        if ( current_user_can( 'edit_posts' ) ) {
                return $result;
        }
        return new WP_Error( 'rest_disabled', __( 'The REST API on this site has been disabled.' ), array( 'status' => rest_authorization_required_code() ) );
}
add_filter( 'rest_pre_dispatch', 'deny_restapi_except_plugins', 10, 3 );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

remove_action( 'wp_head', 'wp_generator' );

remove_action( 'wp_head', 'rel_canonical' );

remove_action( 'wp_head', 'wp_shortlink_wp_head' );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

//titleを取得
function get_page_title(){
  $res = "";
  global $post;
  $title = get_the_title($post->ID);
  if(is_front_page()){
      $res = "『私共はEBP（科学的根拠に基づく政策）のための研究により社会に貢献します』" . "｜" . get_bloginfo();
  }else {
    $res =$title . "｜" . get_bloginfo();
  }

  return $res;
}
add_action( 'wp_head', 'get_page_title' );
add_shortcode( 'page_title', 'get_page_title' );


//canonicalを取得
function get_canonical( $query = false ) {
    //クエリ付きのURL
    $url = ( empty( $_SERVER["HTTPS"] ) ? "http://" : "https://" ) . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    if ( !$query ) {
        //クエリを削除したURL
        $parse_url = parse_url( $url );
        $url = $parse_url['scheme'].'://'.$parse_url['host'].$parse_url['path'];
    }
    return $url;
}

?>
