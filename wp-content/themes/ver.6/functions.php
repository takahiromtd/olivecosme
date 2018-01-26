<?php
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
 
if(empty($first_img)){ //Defines a default image
        $first_img = "http://dummyimage.com/640x360/f7f7f7/222222.png&text=no-image";
    }
    return $first_img;
}
?>
<?php

// 抜粋の長さを変更する
function custom_excerpt_length($length) {   
    return  100;
}   
add_filter('excerpt_length', 'custom_excerpt_length');

// 文末文字を変更する
function custom_excerpt_more($more) {
    return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

add_action('init','add_categories_for_pages'); 
function add_categories_for_pages(){ 
   register_taxonomy_for_object_type('category', 'page'); 
} 
add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' ); 
function nobita_merge_page_categories_at_category_archive( $query ) { 

if ( $query->is_category== true && $query->is_main_query() ) { 
$query->set('post_type', array( 'post', 'page', 'nav_menu_item')); 
} 
} 


?>
