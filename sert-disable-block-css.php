<?php 
/*
Plugin Name: Remove Gutenberg CSS
Plugin URI: https://www.sertmedia.com
Description: Removes Gutenberg Block css when you're using the classic editor plugin.  
Version: 1.0
Author: SERTMedia
Author URI: https://www.sertmedia.com
*/

function sert_remove_block_css(){
    /*Block Library CSS*/
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );

    /*Block Library Theme CSS*/
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_deregister_style( 'wp-block-library-theme' );

    /*WooCommerce Block CSS*/
    wp_dequeue_style( 'wc-block-style' );
    wp_deregister_style( 'wc-block-style' );

}
add_action( 'wp_enqueue_scripts', 'sert_remove_block_css', PHP_INT_MAX );