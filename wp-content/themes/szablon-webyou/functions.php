<?php

// ustala ścieżke na komputerze
if(!defined('WEBYOU_THEME_DIR')) {
    //define('WEBYOU_THEME_DIR', ABSPATH.'wp-content/themes/'.het_template().'/');
    define('WEBYOU_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

// ustala ścieżke na w śieci
if(!defined('WEBYOU_THEME_URL')) {
    define('WEBYOU_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

require_once WEBYOU_THEME_DIR.'libs/posttypes.php';
require_once WEBYOU_THEME_DIR.'libs/utils.php';
require_once WEBYOU_THEME_DIR.'libs/wp_bootstrap_navwalker.php';

//dodanie formatu
add_theme_support('post-formats', array('gallery'));

//obrazek przy wpisie
add_theme_support('post-thumbnails', array('post', 'portfolio'));



if(function_exists('register_nav_menus')){ //sprawdza czy była już utworzona

    function wpb_theme_setup(){
        //rejestracja menu
        register_nav_menus(array(
            'main_nav' => __('Primary Menu')
        ));
    }
}

add_action('after_setup_theme','wpb_theme_setup');


?>