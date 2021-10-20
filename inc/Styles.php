<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    }elseif(is_page('Blog')){
        wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/style-blog.min.css', [], '1.0.0', 'all');
    }elseif(is_page()){
        wp_enqueue_style('page', get_template_directory_uri() . '/assets/css/style-page.min.css', [], '1.0.0', 'all');
    }elseif(is_single()){
        wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/style-single.min.css', [], '1.0.0', 'all');
    }elseif(is_404()){
//        wp_enqueue_style('error', get_template_directory_uri() . '/assets/css/style-error.min.css', [], '1.0.4', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');

function dm_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );