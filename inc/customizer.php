<?php
function mytheme_customize_register($wp_customize) {

    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'   => '#ecf0f1',
        'transport' => 'refresh',
    ));
    // $wp_customize->add_section( 'mytheme_new_section_name' , array(
    //     'title'      => __( 'Visible Section Name', 'mytheme' ),
    //     'priority'   => 30,
    // ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
        'label'       => __( 'Background Color', '1902Custom' ),
        'description' => 'Change the Background Colour',
        'section'     => 'colors',
        'settings'    => '1902_backgroundColour',
    )));

    //---------------------------------------------------------

    $wp_customize->add_section( '1902_navBackground' , array(
        'title'      => __( 'Navigation Background Colour', '1902Custom' ),
        'priority'   => 0,
    ));
    $wp_customize->add_setting( '1902_navBackgroundColour' , array(
        'default'   => '#343a40',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_navBackgroundColourControl', array(
        'label'       => __( 'Nav Background Color', '1902Custom' ),
        'description' => 'Change the Background Colour of the Navs',
        'section'     => '1902_navBackground',
        'settings'    => '1902_navBackgroundColour',
    )));

    //---------------------------------------------------------

    $wp_customize->add_section( '1902_FooterInformation' , array(
        'title'      => __( 'Footer Information', '1902Custom' ),
        'priority'   => 35,
    ));
    $wp_customize->add_setting( '1902_FooterText' , array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_FooterText', array(
        'label'          => __( 'Footer Text', '1902Custom' ),
        'section'        => '1902_FooterInformation',
        'settings'       => '1902_FooterText',
        'type'           => 'text'
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
    .navColour {
        background-color: <?php echo get_theme_mod('1902_navBackgroundColour', '#343a40');  ?>;
    }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');
?>
