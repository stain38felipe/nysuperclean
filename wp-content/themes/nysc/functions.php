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
        'site_menu' => __('Menú Principal', 'nysc')
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
    $imagen_medium = wp_get_attachment_image_src($imagen_id, 'medium')[0]; //300
    $imagen_medium_large = wp_get_attachment_image_src($imagen_id, 'medium_large')[0];//768
    $imagen_large = wp_get_attachment_image_src($imagen_id, 'large')[0]; //1024
    $imagen_1536 = wp_get_attachment_image_src($imagen_id, '1536x1536')[0]; // 1536px width
    
    $imagen_id_logo = 56;
    $imagen_thumbnail_logo = wp_get_attachment_image_src($imagen_id_logo, 'thumbnail')[0];
    $imagen_medium_logo = wp_get_attachment_image_src($imagen_id_logo, 'medium')[0];
    $imagen_full_logo = wp_get_attachment_image_src($imagen_id_logo, 'full')[0];

    $imagen_id_au = 89;
    $imagen_thumbnail_au = wp_get_attachment_image_src($imagen_id_au, 'thumbnail')[0];// 150
    $imagen_full_au = wp_get_attachment_image_src($imagen_id_au, 'full')[0];
    $imagen_medium_au = wp_get_attachment_image_src($imagen_id_au, 'medium')[0]; //300
    $imagen_medium_large_au = wp_get_attachment_image_src($imagen_id_au, 'medium_large')[0];//768
    $imagen_large_au = wp_get_attachment_image_src($imagen_id_au, 'large')[0]; //1024
    $imagen_1536_au = wp_get_attachment_image_src($imagen_id_au, '1536x1536')[0]; // 1536px width

    $imagen_id_ser = 71;
    $imagen_thumbnail_ser = wp_get_attachment_image_src($imagen_id_ser, 'thumbnail')[0];// 150
    $imagen_full_ser = wp_get_attachment_image_src($imagen_id_ser, 'full')[0];
    $imagen_medium_ser = wp_get_attachment_image_src($imagen_id_ser, 'medium')[0]; //300
    $imagen_medium_large_ser = wp_get_attachment_image_src($imagen_id_ser, 'medium_large')[0];//768
    $imagen_large_ser = wp_get_attachment_image_src($imagen_id_ser, 'large')[0]; //1024
    $imagen_1536_ser = wp_get_attachment_image_src($imagen_id_ser, '1536x1536')[0]; // 1536px width

    $imagen_id_os = 94;
    $imagen_thumbnail_oºs = wp_get_attachment_image_src($imagen_id_os, 'thumbnail')[0];// 150
    $imagen_full_os = wp_get_attachment_image_src($imagen_id_os, 'full')[0];
    $imagen_medium_os = wp_get_attachment_image_src($imagen_id_os, 'medium')[0]; //300
    $imagen_medium_large_os = wp_get_attachment_image_src($imagen_id_os, 'medium_large')[0];//768
    $imagen_large_os = wp_get_attachment_image_src($imagen_id_os, 'large')[0]; //1024
    $imagen_1536_os = wp_get_attachment_image_src($imagen_id_os, '1536x1536')[0]; // 1536px width

    $imagen_id_lc = 120;
    $imagen_thumbnail_lc = wp_get_attachment_image_src($imagen_id_lc, 'thumbnail')[0];// 150
    $imagen_full_lc = wp_get_attachment_image_src($imagen_id_lc, 'full')[0];
    $imagen_medium_lc = wp_get_attachment_image_src($imagen_id_lc, 'medium')[0]; //300
    $imagen_medium_large_lc = wp_get_attachment_image_src($imagen_id_lc, 'medium_large')[0];//768
    $imagen_large_lc = wp_get_attachment_image_src($imagen_id_lc, 'large')[0]; //1024
    $imagen_1536_lc = wp_get_attachment_image_src($imagen_id_lc, '1536x1536')[0]; // 1536px width

    $css = "
        @media (max-width: 430px) {
            .hero-section {
                background-image: url('{$imagen_medium}');
            }
            .hero-logo, .page-logo {
                background-image: url('{$imagen_medium_logo}');
            }
            .about-us-section {
                background-image: url('{$imagen_medium_au}');
            }
            .service-section {
                background-image: url('{$imagen_medium_ser}');
            }
            .our-staff-section {
                background-image: url('{$imagen_medium_os}');
            }
            .lets-connect-section {
                background-image: url('{$imagen_medium_lc}');
            }
        }
        @media (min-width: 600px) {
            .hero-section {
                background-image: url('{$imagen_medium_large}');
            }
            .hero-logo, .page-logo {
                background-image: url('{$imagen_medium_logo}');
            }
            .about-us-section {
                background-image: url('{$imagen_medium_large_au}');
            }
            .service-section {
                background-image: url('{$imagen_medium_large_ser}');
            }
            .our-staff-section {
                background-image: url('{$imagen_medium_large_os}');
            }
            .lets-connect-section {
                background-image: url('{$imagen_medium_large_lc}');
            }
        }
        @media (min-width: 1024px) {
            .hero-section {
                background-image: url('{$imagen_large}'); 
            }
            .hero-logo, .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
            .about-us-section {
                background-image: url('{$imagen_large_au}');
            }
            .service-section {
                background-image: url('{$imagen_large_ser}');
            }
            .our-staff-section {
                background-image: url('{$imagen_large_os}');
            }
            .lets-connect-section {
                background-image: url('{$imagen_large_lc}');
            }
        }
        @media (min-width: 1440px) {
            .hero-section {
                background-image: url('{$imagen_1536}');
            }
            .hero-logo, .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
            .about-us-section {
                background-image: url('{$imagen_1536_au}');
            }
            .service-section {
                background-image: url('{$imagen_1536_ser}');
            }
            .our-staff-section {
                background-image: url('{$imagen_1536_os}');
            }
            .lets-connect-section {
                background-image: url('{$imagen_1536_lc}');
            }
        }
        @media (min-width: 1600px) {
            .seccion-fondo {
                height: 290px; 
            }
            .hero-section {
                background-image: url('{$imagen_full}');
            }
            .hero-logo, .page-logo {
                background-image: url('{$imagen_full_logo}');
            }
            .about-us-section {
                background-image: url('{$imagen_full_au}');
            }
            .service-section {
                background-image: url('{$imagen_full_ser}');
            }
            .our-staff-section {
                background-image: url('{$imagen_full_os}');
            }
            .lets-connect-section {
                background-image: url('{$imagen_full_lc}');
            }
        }
    ";
    
    wp_add_inline_style('home-estilos', $css);
}
add_action('wp_enqueue_scripts', 'agregar_estilos_dinamicos');