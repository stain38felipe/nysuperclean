<?php
function cargar_estilos() {
    wp_enqueue_style('home-estilos', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css')); // Cambiado de 'main-style' a 'tema-estilos'
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'cargar_estilos' );

function my_theme_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

function registrar_menus() {
    register_nav_menus(array(
        'site_menu' => __('Menú Principal', 'tu-tema')
    ));
}
add_action('after_setup_theme', 'registrar_menus');

function agregar_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'agregar_bootstrap');

function agregar_estilos_dinamicos() {
    //$imagen_id = get_option('imagen_fondo_home'); // Supongamos que la imagen se guarda en Personalizar
    $imagen_id = 55;
    $imagen_full = wp_get_attachment_image_src($imagen_id, 'full')[0];
    $imagen_large = wp_get_attachment_image_src($imagen_id, 'medum_large')[0];
    $imagen_medium = wp_get_attachment_image_src($imagen_id, 'medium')[0];
    $imagen_id_logo = 56;
    $imagen_thumbnail_logo = wp_get_attachment_image_src($imagen_id_logo, 'thumbnail')[0];
    $imagen_medium_logo = wp_get_attachment_image_src($imagen_id_logo, 'medium')[0];
    $imagen_full_logo = wp_get_attachment_image_src($imagen_id_logo, 'full')[0];

    $css = "
        @media (max-width: 600px) {
            .hero-section {
                background-image: url('{$imagen_medium}');
            }
            .hero-logo page-logo {
                background-image: url('{$imagen_medium_logo}');
            }
        }
        @media (max-width: 1024px) {
            .hero-section {
                background-image: url('{$imagen_large}');
            }
            .hero-logo .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
        }
        @media (min-width: 1440px) {
            .hero-section {
                background-image: url('{$imagen_large}');
            }
            .hero-logo .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
        }
        @media (min-width: 1600px) {
            .seccion-fondo {
                height: 290px; 
            }
            .hero-section {
                background-image: url('{$imagen_full}');
            }
            .hero-logo .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
        }
    ";
    
    wp_add_inline_style('home-estilos', $css);
}
add_action('wp_enqueue_scripts', 'agregar_estilos_dinamicos');