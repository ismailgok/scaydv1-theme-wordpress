<?php 

add_theme_support('menus');
register_nav_menus(array(
 'header_menu' => 'Header Menü',
 'footer_menu' => 'Footer Menü',
));
register_sidebars(1, array('name'=>'Sidebar'));
add_theme_support( 'post-thumbnails' );
add_image_size( 'anasayfa', 155, 265, true );
add_image_size( 'altsayfa', 220, 580, true );

function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>