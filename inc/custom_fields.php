<?php

function add_custom_meta_boxes(){
    add_meta_box( 'moviesInfo', 'More Movie Info', 'moviesInfoCallback', 'movie', 'normal', 'default', null );
    add_meta_box( 'videoInfo', 'Video Link', 'videoInfoCallback', 'video', 'normal', 'default', null );
}

add_action('add_meta_boxes', 'add_custom_meta_boxes');

function moviesInfoCallback($post){
    require_once get_template_directory() . '/inc/moviesInfoForm.php';
}

function videoInfoCallback($post){
    require_once get_template_directory() . '/inc/videoInfoForm.php';
}

function save_moviesInfo_meta_boxes($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    $fields = [
        '1902_year'
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'save_moviesInfo_meta_boxes');

function save_videoInfo_meta_boxes($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    $fields = [
        '1902_videoLink'
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'save_videoInfo_meta_boxes');
