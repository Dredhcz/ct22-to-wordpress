<?php

   

function ct_theme_support(){
    add_theme_support("title_tag");
}
    add_action("after_theme_setup", "ct_theme_support");

function ct_menus(){
    $locations = array(
        "primary" => "Mobile Rubrics Menu",
        "footer" => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
    add_action("init", "ct_menus");

function ct_registrer_styles(){

    wp_enqueue_style("ct-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
    wp_enqueue_style("ct-queries", get_template_directory_uri() . "/queries.css", array(), "1.0", "all");
}
    add_action("wp_enqueue_scripts", "ct_registrer_styles");

function ct_registrer_scripts(){

    wp_enqueue_script("ct-script", get_template_directory_uri() . "/script.js", array(), "1.0", true);   
    }
    add_action("wp_enqueue_scripts", "ct_registrer_scripts");


?>