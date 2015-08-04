<?php
/**
 * @package softnepnewstheme-posttypes
 * 
 */
/*
Plugin Name: SoftNEP News Theme Post Types
Plugin URI: https://github.com/supportsoftnep/softnepnewstheme-posttypes
Description: This plug in is required to create custom post type in SoftNEP News theme.
Author: SoftNEP PVT LTD
Version: 1
Author URI: http://softnep.com
*/

add_action('init', 'photogallery_init');
function photogallery_init() {
    $labels = array(
        'name' => _x('Photo Gallery', 'post type general name', 'softnepnews'),
        'singular_name' => _x('Photo Gallery', 'post type singular name', 'softnepnews'),
        'add_new' => _x('Add New', 'Photo Gallery', 'softnepnews'),
        'add_new_item' => __('Add Photo Gallery', 'softnepnews'),
        'edit_item' => __('Edit Photo Gallery', 'softnepnews'),
        'new_item' => __('New Photo Gallery', 'softnepnews'),
        'view_item' => __('View Photo Gallery', 'softnepnews'),
        'search_items' => __('Search Photo Gallery', 'softnepnews'),
        'not_found' => __('No Photo Gallery found', 'softnepnews'),
        'not_found_in_trash' => __('No Photo Gallery found in Trash', 'softnepnews'),
        'parent_item_colon' => '',
        'menu_name' => __('Photo Gallery', 'softnepnews')
    );
   
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    
    register_post_type('photo-gallery', $args);
}

add_action('init', 'subscribe_email_init');
/* SECTION - photogallery_custom_init */

function subscribe_email_init() {
    $labels = array(
        'name' => _x('Subscribe List', 'post type general name', 'softnep_news'),
        'singular_name' => _x('Subscribe Email', 'post type singular name', 'softnep_news'),
        //'add_new' => _x('Add New', 'Subscribe Email', 'softnep_news'),
        //'add_new_item' => __('Add Subscribe Email', 'softnep_news'),
        'edit_item' => __('Edit Subscribe Email', 'softnep_news'),
       // 'new_item' => __('New Subscribe Email', 'softnep_news'),
        'view_item' => __('View Subscribe Email', 'softnep_news'),
        'search_items' => __('Search Subscribe Email', 'softnep_news'),
        'not_found' => __('No Subscribe Email found', 'softnep_news'),
        'not_found_in_trash' => __('No Subscribe Email found in Trash', 'softnep_news'),
        'parent_item_colon' => '',
        'menu_name' => __('Subscribe Email', 'softnepnews')
    );
    // Some arguments and in the last line 'supports', we say to WordPress what features are supported on the Subscribe Email post_type  
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title')
    );
    // We call this function to register the custom post type  
    register_post_type('subscribe-email', $args);
}

add_action('init', 'videogallery_init');

function videogallery_init() {
    $labels = array(
        'name' => _x('Video Gallery', 'post type general name', 'softnepnews'),
        'singular_name' => _x('Video Gallery', 'post type singular name', 'softnepnews'),
        'add_new' => _x('Add New', 'Video Gallery', 'softnepnews'),
        'add_new_item' => __('Add Video Gallery', 'softnepnews'),
        'edit_item' => __('Edit Video Gallery', 'softnepnews'),
        'new_item' => __('New Video Gallery', 'softnepnews'),
        'view_item' => __('View Video Gallery', 'softnepnews'),
        'search_items' => __('Search Video Gallery', 'softnepnews'),
        'not_found' => __('No Video Gallery found', 'softnepnews'),
        'not_found_in_trash' => __('No Video Gallery found in Trash', 'softnepnews'),
        'parent_item_colon' => '',
        'menu_name' => __('Video Gallery', 'softnepnews')
    );
    // Some arguments and in the last line 'supports', we say to WordPress what features are supported on the Project post type  
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','comments')
    );
    // We call this function to register the custom post type  
    register_post_type('video-gallery', $args);
}
?>
