<?php
function mytheme_customize_register($wp_customize) {

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

    //----------------------NAV BACKGROUND----------------------

    $wp_customize->add_setting( '1902_navBackgroundColour' , array(
        'default'   => '#343a40',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_navBackgroundColourControl', array(
        'label'       => __( 'Nav Background Color', '1902Custom' ),
        'description' => 'Change the Background Colour of the Navs',
        'section'     => 'colors',
        'settings'    => '1902_navBackgroundColour',
    )));

    //----------------------SEARCH BAR--------------------------

    $wp_customize->add_setting( '1902_searchButtonColour' , array(
        'default'   => '#4ca746',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_searchButtonControl', array(
        'label'       => __( 'Search Bar Colour', '1902Custom' ),
        'description' => 'Change the Colour of the outline for the Search Button',
        'section'     => 'colors',
        'settings'    => '1902_searchButtonColour',
    )));

    //----------------------HEADER INFORMATION------------------

    $wp_customize->add_setting( '1902_HeaderText' , array(
        'default'   => '#343a40',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '1902_HeaderText', array(
        'label'       => __( 'Header Text Colour', '1902Custom' ),
        'description' => 'Change the Colour of the Header Text',
        'section'     => 'colors',
        'settings'    => '1902_HeaderText',
    )));

    //----------------------FOOTER INFORMATION------------------

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

    //----------------------IMAGE DISPLAY SECTION----------------

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

    //----------------------SIDE NAVIGATION----------------------

    $wp_customize->add_section( '1902_sideNav' , array(
        'title'      => __( 'Side Navigation', '1902Custom' ),
    ));
    $wp_customize->add_setting( '1902_sideNavDisplay' , array(
        'default'   => 'left',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( '1902sideNavRadio', array(
        'label'    => __( 'Side Navigation', '1902Custom' ),
        'section'  => '1902_sideNav',
        'settings' => '1902_sideNavDisplay',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => 'left',
            'right' => 'right',
        ),
    ));

    //----------------------GRID LAYOUT FRONT PAGE---------------

    $wp_customize->add_section( '1902_gridLayout' , array(
        'title'      => __( 'Card Layout', '1902Custom' ),
    ));
    $wp_customize->add_setting( '1902_gridLayoutSetting' , array(
        'default'   => 'grid',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( '1902gridLayoutRadio', array(
        'label'    => __( 'Grid Layout', '1902Custom' ),
        'section'  => '1902_gridLayout',
        'settings' => '1902_gridLayoutSetting',
        'type'     => 'radio',
        'choices'  => array(
            'grid' => 'grid',
            'rows' => 'rows',
        ),
    )
    );

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
