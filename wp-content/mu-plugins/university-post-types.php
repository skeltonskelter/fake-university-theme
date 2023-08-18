<?php

function university_post_types()
{
    // Campus Post Type
    register_post_type('campus', array(
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Campuses',
            'all_items' => 'All Campuses',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    // Event Post Type
    register_post_type('event', array(
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'all_items' => 'All Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

    // Program Post Type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'all_items' => 'All Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    // Professor Post Type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'all_items' => 'All Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    // Note Post Type
    register_post_type('note', array(
        'capability_type' => 'note',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Notes',
            'all_items' => 'All Notes',
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'singular_name' => 'Note'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));

    // Like Post Type
    register_post_type('like', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Likes ',
            'all_items' => 'All Likes',
            'add_new_item' => 'Add New Like',
            'edit_item' => 'Edit Like',
            'singular_name' => 'Like'
        ),
        'menu_icon' => 'dashicons-heart'
    ));
}

add_action('init', 'university_post_types');
