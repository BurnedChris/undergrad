<?php
/**
 * Undergrad Theme Customizer.
 *
 * @package Undergrad
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Undergrad_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    /**
     * Custom Customizer Customizations
     */

    // Create header background color setting
    $wp_customize->add_setting('header_color', array(
        'default' => '#262626',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    ));

    // Add header background color control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_color', array(
        'label' => __('Header Background Color', 'Undergrad'),
        'section' => 'colors'
    )));

    $wp_customize->add_setting('footer_color', array(
        'default' => '#262626',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    ));

    // Add header background color control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
        'label' => __('Footer Background Color', 'Undergrad'),
        'section' => 'colors'
    )));

    // Add section to the Customizer
    $wp_customize->add_section('Undergrad-options', array(
        'title' => __('Theme Options', 'Undergrad'),
        'capability' => 'edit_theme_options',
        'description' => __('Change the default display options for the theme.', 'Undergrad')
    ));

    // Create sidebar layout setting
    $wp_customize->add_setting('layout_setting', array(
        'default' => 'no-sidebar',
        'type' => 'theme_mod',
        'sanitize_callback' => 'Undergrad_sanitize_layout',
        'transport' => 'postMessage'
    ));

    // Add sidebar layout controls
    $wp_customize->add_control('layout_control', array(
        'settings' => 'layout_setting',
        'type' => 'radio',
        'label' => __('Sidebar position', 'Undergrad'),
        'choices' => array(
            'no-sidebar' => __('No sidebar (default)', 'Undergrad'),
            'sidebar-left' => __('Left sidebar', 'Undergrad'),
            'sidebar-right' => __('Right sidebar', 'Undergrad')
        ),
        'section' => 'Undergrad-options'
    ));

    $wp_customize->add_setting('width_setting', array(
        'default' => 'fluid',
        'type' => 'theme_mod',
        'sanitize_callback' => 'Undergrad_sanitize_width',
        'transport' => 'postMessage'
    ));

    // Add sidebar layout controls
    $wp_customize->add_control('width_control', array(
        'settings' => 'width_setting',
        'type' => 'radio',
        'label' => __('layout Witdh', 'Undergrad'),
        'choices' => array(
            'fluid' => __('fluid (default)', 'Undergrad'),
            'fixed' => __('fixed', 'Undergrad')
        ),
        'section' => 'Undergrad-options'
    ));

    $wp_customize->add_setting('compacted-header');
    //Add control
    $wp_customize->add_control('compacted-header', array(
        'type' => 'checkbox',
        'label' => 'compacted header',
        'section' => 'Undergrad-options'
    ));


    //Adding a section
    $wp_customize->add_section('footer_setting_section', array(
        'title' => 'Footer Settings',
        'description' => 'This section club the setting for the fotter of the theme.',
        'priority' => 9999
    ));

    //Add a setting
    $wp_customize->add_setting('show_wp_footer_text');

    $wp_customize->add_control('show_wp_footer_text', array(
        'type' => 'checkbox',
        'label' => 'Show Proudly powered by WordPress',
        'section' => 'footer_setting_section'
    ));

    $wp_customize->add_setting('show_footer_project_text');

    $wp_customize->add_control('show_footer_project_text', array(
        'type' => 'checkbox',
        'label' => 'Show Github Info',
        'section' => 'footer_setting_section'
    ));
    //Add a setting
    $wp_customize->add_setting('footer_text_textbox', array(
        'default' => 'Footer text goes here'
    ));
    //Add control
    $wp_customize->add_control('footer_text_textbox', array(
        'label' => 'Footer text',
        'section' => 'footer_setting_section',
        'type' => 'text'
    ));

    $wp_customize->add_setting('show_footer_text');
    //Add control
    $wp_customize->add_control('show_footer_text', array(
        'type' => 'checkbox',
        'label' => 'Show footer text',
        'section' => 'footer_setting_section'
    ));


}
add_action('customize_register', 'Undergrad_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function Undergrad_customize_preview_js()
{
    wp_enqueue_script('Undergrad_customizer', get_template_directory_uri() . '/js/customizer.js', array(
        'customize-preview'
    ), '20130508', true);
}
add_action('customize_preview_init', 'Undergrad_customize_preview_js');

/**
 * Sanitize layout options
 */

function Undergrad_sanitize_layout($value)
{
    if (!in_array($value, array(
        'sidebar-left',
        'sidebar-right',
        'no-sidebar'
    ))) {
        $value = 'no-sidebar';
    }
    return $value;
}

function Undergrad_sanitize_width($value)
{
    if (!in_array($value, array(
        'fixed',
        'fluid'
    ))) {
        $value = 'fluid';
    }
    return $value;
}


/**
 * Inject Customizer CSS when appropriate
 */

function Undergrad_customizer_css()
{
    $header_color = get_theme_mod('header_color');
    $footer_color = get_theme_mod('footer_color');
?>
<style type="text/css">
	.site-header {
		background-color: <?php
    echo $header_color;
?>
	}
	.site-footer {
		background-color: <?php
    echo $footer_color;
?>
	}
</style>
	<?php
}
add_action('wp_head', 'Undergrad_customizer_css');
