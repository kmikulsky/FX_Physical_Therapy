<?php

function fxphysical_register_styles(){
    //the line below commnted out isnt working so we need a workaround for the array order. this is a common issue with local host 
    //wp_enqueue_style('fxphysical-style' , get_template_directory_uri() . '/FX_Physical_Therapy/style.css', array() ,'1.0','all');
      wp_enqueue_style('fxphysical-style' , get_stylesheet_uri() ); 
      wp_enqueue_style('fxphysical-bootstrap' , "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '1.0', 'all' );
      wp_enqueue_style('fxphysical-fontawesome' , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'fxphysical_register_styles');

?>