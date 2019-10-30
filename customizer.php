<?php


function mytheme_customize_register( $wp_customize ) {

    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'     => '#3498db',
        'transport'   => 'refresh',
    ) );

    // $wp_customize->add_section( 'mytheme_new_section_name' , array(
    //     'title'      => __( 'Visible Section Name', 'mytheme' ),
    //     'priority'   => 30,
    // ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
        'label'      => __( 'Background Colour', '1902Custom' ),
        'section'    => 'colors',
        'settings'   => '1902_backgroundColour',
    ) ) );

    add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css()
    {
        ?>
        <style type="text/css">
        body {
            background-color: <?php echo get_theme_mod('1902_backgroundColour', '#3498db') ?>
        }
        </style>
        <?php
    }

    add_action('wp-head', 'mytheme_customize_css')
