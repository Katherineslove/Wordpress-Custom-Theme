<?php
function mytheme_customize_register($wp_customize) {

    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'   => '#ecf0f1',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
        'label'       => __( 'Background Color', '1902Custom' ),
        'description' => 'Change the Background Colour',
        'section'     => 'Colors',
        'settings'    => '1902_backgroundColour',
    )));

    //---------------------------------------------------------

    $wp_customize->add_section( '1902_navBackground' , array(
        'title'      => __( 'Navigation Colours', '1902Custom' ),
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

    $wp_customize->add_section( '1902_searchButton' , array(
        'title'      => __( 'Search Bar Colour', '1902Custom' ),
        'priority'   => 0,
    ));
    $wp_customize->add_setting( '1902_searchButtonColour' , array(
        'default'   => '#4ca746',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_searchButtonControl', array(
        'label'       => __( 'Search Bar Colour', '1902Custom' ),
        'description' => 'Change the Colour of the Search Button',
        'section'     => '1902_searchButton',
        'settings'    => '1902_searchButtonColour',
    )));

    //---------------------------------------------------------

    $wp_customize->add_section( '1902_HeaderInformation' , array(
        'title'      => __( 'Header Image Text', '1902Custom' ),
        'priority'   => 10,
    ));
    $wp_customize->add_setting( '1902_HeaderText' , array(
        'default'   => '#343a40',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '1902_HeaderText', array(
        'label'       => __( 'Header Text Colour', '1902Custom' ),
        'description' => 'Change the Colour of the Header Text',
        'section'     => '1902_HeaderInformation',
        'settings'    => '1902_HeaderText',
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

    //---------------------------------------------------------

    $wp_customize->add_section( '1902_imageDisplaySection' , array(
        'title'      => __( 'Image Section', '1902Custom' ),
        'priority'   => 35,
    ));
    $wp_customize->add_setting( '1902_imageDisplay' , array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '1902_imageDisplay', array(
        'label'          => __( 'Image Section', '1902Custom' ),
        'section'        => '1902_imageDisplaySection',
        'settings'       => '1902_imageDisplay',
        'context'        => '1902_imageDisplayContext' 
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

    .headerText {
        color: <?php echo get_theme_mod('1902_HeaderText', '#343a40') ?>;
    }

    .searchButton {
        border-color: <?php echo get_theme_mod('1902_searchButtonColour','#4ca746') ?>
    }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');
?>
