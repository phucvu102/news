<?php 
/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );

  /**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/
 
  require_once( CORE . '/init.php' );

  /**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
 if ( ! isset( $content_width ) ) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
    $content_width = 620;
}

/**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
**/
function w5d_theme_setup() {
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats',array(
        'image',
        'video',
        'gallery',
        'quote',
        'link'
        ) );
    register_nav_menu ( 'primary-menu', __('Primary Menu', 'w5d') );
    $sidebar = array(
        'name' => __('Main Sidebar', 'thachpham'),
        'id' => 'main-sidebar',
        'description' => 'Main sidebar for Thachpham theme',
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );
}
add_action ( 'init', 'w5d_theme_setup' );

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'main';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

