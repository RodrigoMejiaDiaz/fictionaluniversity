<?php
function university_post_types() {
    // Campus Post Type
    register_post_type('campus', array(
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Agregar nuevo Campus',
            'edit_item' => 'Editar Campus',
            'all_items' => 'Todos los Campuses',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    // Event Post Type
    register_post_type('event', array(
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Eventos',
            'add_new_item' => 'Agregar nuevo Evento',
            'edit_item' => 'Editar Evento',
            'all_items' => 'Todos los Eventos',
            'singular_name' => 'Evento'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // Program Post Type
    register_post_type('program', array(
        'supports' => array('title', 'excerpt'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Programas',
            'add_new_item' => 'Agregar nuevo Programa',
            'edit_item' => 'Editar Programa',
            'all_items' => 'Todos los Programas',
            'singular_name' => 'Programa'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    // Professor Post Type
    register_post_type('professor', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Profesores',
            'add_new_item' => 'Agregar nuevo Profesor',
            'edit_item' => 'Editar Profesor',
            'all_items' => 'Todos los Profesores',
            'singular_name' => 'Profesor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    // Note Post Type
    register_post_type('note', array(
        'capability_type' => 'note',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Notas',
            'add_new_item' => 'Agregar nueva Nota',
            'edit_item' => 'Editar Nota',
            'all_items' => 'Todos las Notas',
            'singular_name' => 'Nota'
        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));

    // Like Post Type
    register_post_type('like', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Likes',
            'add_new_item' => 'Agregar nuevo Like',
            'edit_item' => 'Editar Like',
            'all_items' => 'Todos los Likes',
            'singular_name' => 'Like'
        ),
        'menu_icon' => 'dashicons-heart'
    ));
}

add_action('init', 'university_post_types');

function universityMapKey($api) {
    $api['key'] = 'AIzaSyDSTQunKtwPg7d2Krz2E0EyWQSf-uWa0jQ';
    return $api;
}

add_filter('acf/fields/google_map/api', 'universityMapKey');