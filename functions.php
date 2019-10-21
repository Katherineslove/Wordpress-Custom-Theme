<?php

function addCustomThemeFiles_1902(){

    wp_enqueue_style('customCSS', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.1', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('customJS1902', get_template_directory_uri() . '/assets/js/script.js', array(), '0.0.1', true);

};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_1902');
