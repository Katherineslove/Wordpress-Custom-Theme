<?php

function mytheme_customize_register($wp_customize){
    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'   => '#ecf0f1',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
        'label'       => __( 'Background Color', '1902Custom' ),
        'description' => 'Change the Background Colour',
        'section'     => 'colors',
        'settings'    => '1902_backgroundColour',
    )));

}
add_action('customize_register', 'mytheme_customize_register');

function mytheme_customize_css()
{
    ?>
    <style type="text/css">
    body {
        background-color: <?php echo get_theme_mod('1902_backgroundColour', '#ecf0f1');  ?>;
    }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');
