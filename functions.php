<?php
function test(){
    wp_enqueue_style('project', get_stylesheet_uri()); // Enqueues the main stylesheet
    // Or if you're trying to add a specific CSS file:
    // wp_enqueue_style('project', get_stylesheet_directory_uri() . '/style.css');



    wp_enqueue_script('main.js', get_theme_file_uri('./js/main.js'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'test');



//menu showing part

function myproject_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','myproject_features') ;

// slider customization


function my_theme_customize_register($wp_customize) {
    // Add a section for the slider
    $wp_customize->add_section('slider_section', array(
        'title' => __('Slider', 'my_theme'),
        'priority' => 30,
    ));

    // Add settings and controls for slider images
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("slider_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slider_image_$i", array(
            'label' => __("Slider Image $i", 'my_theme'),
            'section' => 'slider_section',
            'settings' => "slider_image_$i",
        )));

        $wp_customize->add_setting("slider_caption_$i", array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("slider_caption_$i", array(
            'label' => __("Slider Caption $i", 'my_theme'),
            'section' => 'slider_section',
            'settings' => "slider_caption_$i",
            'type' => 'text',
        ));
    }
}
add_action('customize_register', 'my_theme_customize_register');


// beckend properties settings



function icodeguru_settings_page(){
    add_menu_page(
        'Icodeguru Theme',//page title
        'Change content',//menue title
        'manage_options',//ability for those who are allowed by dashboard/capability required
        'Theme-Settings',//Menu slug
        'mytheme_settings_page',//call back function ye o function bna hai us mn jo b functionality hogi wo sho krway ga
        'dashicons-database',
        10,//priority
        
    
    );
    
    }
    //admin menue is specified by wordpress
    add_action('admin_menu', 'icodeguru_settings_page');
    //theme settings call back function,,file linking here
 require_once(get_theme_file_path('/includes/theme-settings.php'));





    
   
    
  
 
 
   




  
