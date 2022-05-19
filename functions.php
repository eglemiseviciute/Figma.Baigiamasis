<?php

function Baigiamasis_widget_areas(){
register_sidebar(
array(
    'before_title'=>'',
    'after_title'=>'',
    'before_widget'=>'',
    'after_widget'=>'',)
,
array(
    'name'=>'Sidebar Area',
    'id'=>'sidebar-1',
    'description'=>'Sidebar Widget Area'
)
);
}
add_action('widgets_init','Baigiamasis_widget_areas');

// cia taip sukodavus gaunam dinamini navigacija bara
function Baigiamasis_menus(){

$loacations = array(
'primary'=>"Dekstop Primary Top",
'footer'=>"Footer Menu Items",
'sidebar'=>"Right Sidebar"
);
register_nav_menus($loacations);

}
add_action('init','Baigiamasis_menus');




function Baigiamasis_register_styles()
{
    // $version = wp_get_theme()->get('Version');
    
    wp_enqueue_style('Baigiamasis-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), null, 'all');
  
    wp_enqueue_style('Baigiamasis-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-Owlmin', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-googlefonts', " https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-googlefonts', "https://fonts.gstatic.com ", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-googlefonts', "https://fonts.googleapis.com ", array(), null, 'all');
    wp_enqueue_style('Baigiamasis-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('Baigiamasis-Owltheme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'Baigiamasis_register_styles');


function Baigiamasis_register_scripts()
{
    wp_enqueue_script('Baigiamasis-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js", array(), null, 'all', true);
    wp_enqueue_script('Baigiamasis-manojs', get_template_directory_uri() . '/assets/js/script.js' , null, false, true);
    wp_enqueue_script('Baigiamasis-owlca', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), null, 'all', true);
    wp_enqueue_script('Baigiamasis-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), null, 'all', true);
wp_enqueue_script('Baigiamasis-gs', "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js", array(), null, 'all', true);
}


add_action('wp_enqueue_scripts', 'Baigiamasis_register_scripts');

// taip sukodinus gaunu logo kuris niekur nedings ir liks visuose puslapiuose

function tema_theme_support()
    {

        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'tema_theme_support');
    
    