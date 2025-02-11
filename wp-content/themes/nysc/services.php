<?php
/*
Template Name: NYSC-Service Template
*/
get_header();

// Obtener el contenido de la página con ID 30
$pagina_wwo = get_post(30); // Reemplaza 30 con el ID correcto de la página
print_r($pagina_wwo, true); //
$contenido_wwo = apply_filters('the_content', $pagina_wwo->post_content); // Aplica filtros para formatear el contenido correctamente

// Obtener la imagen destacada (thumbnail) de la página
$imagen_url_wwo = get_the_post_thumbnail_url(30, 'full'); 

$pagina_wyg = get_post(32); // Reemplaza 30 con el ID correcto de la página
$contenido_wyg = apply_filters('the_content', $pagina_wyg->post_content); // Aplica filtros para formatear el contenido correctamente

// Obtener la imagen destacada (thumbnail) de la página
$imagen_url_wyg = get_the_post_thumbnail_url(32, 'full'); 
?>


<main class="content-area">
    <section class="service-section">
        <div class="page-logo"></div>
        <div class="page-title"><h2><?php the_title();  ?></h2></div>    
    </section>
    <section class="another-page-content1" id="wwo">
        <div class="centered-text" >
            <h3>
                <?php 
                    echo apply_filters('the_content', $pagina_wwo->post_title); 
                //print_r($pagina_wwo); //
                ?>
            </h3>
        </div>
        <div class="page-container">
            <div class="page-image1">
                <?php
                    $imagen_id_wwo = 74;
                    $imagen_thumbnail_wwo = wp_get_attachment_image_src($imagen_id_wwo, 'thumbnail')[0];
                    $imagen_medium_wwo = wp_get_attachment_image_src($imagen_id_wwo, 'medium')[0];
                    $imagen_medium_large_wwo = wp_get_attachment_image_src($imagen_id_wwo, 'medium-large')[0];
                    $imagen_large_wwo = wp_get_attachment_image_src($imagen_id_wwo, 'large')[0];
                    $imagen_full_wwo = wp_get_attachment_image_src($imagen_id_wwo, 'full')[0];
                ?>
                <img src="<?php echo $imagen_large_wwo; ?>" ></img>
            </div>
            <div class="page-content1">
                <?php echo $contenido_wwo; ?>
            </div>
        </div>
        
    </section>
    <section class="another-page-content2" id="wyg">
        <div class="centered-text" >
            <h3>
                <?php 
                    echo apply_filters('the_content', $pagina_wyg->post_title); 
                //print_r($pagina_wwo); //
                ?>
            </h3>
        </div>
        <div class="page-content2">
            <?php echo $contenido_wyg; ?>
        </div>
        
    </section>
</main>

<?php
    get_footer(); 
?>