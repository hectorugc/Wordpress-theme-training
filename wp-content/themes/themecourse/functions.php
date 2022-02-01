<?php
/**
 * Theme Function
 * 
 * @package ThemeCourse
 * 
 */



function themecourse_enqueue_scripts(){

    // Register Styles
    wp_register_style("styles-css",get_template_directory_uri() . '/assets/css/style.css','all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css',[],false,'all');
    wp_register_style('meanmenu-css', get_template_directory_uri() . '/assets/css/meanmenu.css',[],false,'all' );
    wp_register_style('font-awesome-css', get_template_directory_uri() . '/assets/library/css/font-awesome.min.css',[],false,'all');
    wp_register_style('material-design-css', get_template_directory_uri() . '/assets/css/material-design-iconic.min.css',[],false,'all');
    wp_register_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css',[],false,'all');
    wp_register_style('owl-carrousel-css', get_template_directory_uri() . '/assets/css/owl-carrousel.css',[],false,'all');
    wp_register_style('circlifull-css', get_template_directory_uri() . '/assets/css/jquery.circlifull.css',[],false,'all');
    wp_register_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css',[],false,'all');
    wp_register_style('magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css',[],false,'all');
    wp_register_style('circulfull-css', get_template_directory_uri() . '/assets/css/circulfull.css',[],false,'all');
    wp_register_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css',[],false,'all');
    


    // Enqueue Styles

    wp_enqueue_style("styles-css");
    wp_enqueue_style("bootstrap-css");
    wp_enqueue_style("font-awesome-css");
    wp_enqueue_style("meanmenu-css");
    wp_enqueue_style("material-design-css");
    wp_enqueue_style("themify-icons");
    wp_enqueue_style("magnific-css");
    wp_enqueue_style("owl-carrousel-css");
    wp_enqueue_style("responsive-css");
    wp_enqueue_style("animate-css");



    // Register Scripts

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js',['jquery'],false,true);
    wp_register_script("carousel-js", get_template_directory_uri() . '/assets/library/js/owl.carousel.min.js',['jquery'],false,true);
    wp_register_script("modernizer-js", get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js',['jquery'],false,false);
    wp_register_script("main-js", get_template_directory_uri() . '/assets/js/main.js',[],false,true);
    
    // Enqueue Scripts

    wp_enqueue_script("bootstrap-js");
    wp_enqueue_script("carousel-js");
    wp_enqueue_script("modernizer-js");
    wp_enqueue_script("main-js");
}




add_action("wp_enqueue_scripts","themecourse_enqueue_scripts");


function plz_theme_suppoerts(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        "height"              => 170,
        "width"               => 35,
        "flex-height"         => true,
        "flex-width"           => true,
    ));
}


add_action("after_setup_theme","plz_theme_suppoerts");




function plz_add_menus(){
    register_nav_menus(
        ['menu-principal' => "Menu Principal",
        'menu-responsive' => "Menu Responsive"]
    );
}


add_action("after_setup_theme","plz_add_menus");



function plz_add_sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de Pagina',
            'id' => 'pie-pagina',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
}


add_action("widgets_init","plz_add_sidebar");