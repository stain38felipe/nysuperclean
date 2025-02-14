<?php
/*
Template Name: NYSC-About Us Template
*/
get_header();

// Obtener el contenido de la página con ID 22
$pagina_os = get_post(22); // Reemplaza 22 con el ID correcto de la página
print_r($pagina_os, true); //
$contenido_os = apply_filters('the_content', $pagina_os->post_content); // Aplica filtros para formatear el contenido correctamente

$pagina_mis = get_post(20); // Reemplaza 30 con el ID correcto de la página
$contenido_mis = apply_filters('the_content', $pagina_mis->post_content); // Aplica filtros para formatear el contenido correctamente

// Obtener la imagen destacada (thumbnail) de la página
$imagen_url_mis = get_the_post_thumbnail_url(20, 'full'); 

$pagina_vis = get_post(24); // Reemplaza 30 con el ID correcto de la página
$contenido_vis = apply_filters('the_content', $pagina_vis->post_content); // Aplica filtros para formatear el contenido correctamente

?>


<main class="content-area">
    <section class="about-us-section">
        <div class="page-logo"></div>
        <div class="page-title"><h2><?php the_title();  ?></h2></div>    
    </section>
    <section class="another-page-content1" id="os">
        <div class="centered-text" >
            <h3>
                <?php 
                    echo apply_filters('the_content', $pagina_os->post_title); 
                //print_r($pagina_os); //
                ?>
            </h3>
        </div>
        <div class="page-content2">
            <?php echo $contenido_os; ?>
        </div>
    </section>
    <section class="another-page-content3" id="miss">
        <div class="left-text" >
            <h3>
                <?php 
                    echo apply_filters('the_content', $pagina_mis->post_title); 
                //print_r($pagina_os); //
                ?>
            </h3>
        </div>
        <div class="page-container">
            <div class="page-image1">
                <?php
                    $imagen_id_mis = 90;
                    $imagen_thumbnail_mis = wp_get_attachment_image_src($imagen_id_mis, 'thumbnail')[0];
                    $imagen_medium_mis = wp_get_attachment_image_src($imagen_id_mis, 'medium')[0];
                    $imagen_medium_large_mis = wp_get_attachment_image_src($imagen_id_mis, 'medium-large')[0];
                    $imagen_large_mis = wp_get_attachment_image_src($imagen_id_mis, 'large')[0];
                    $imagen_full_mis = wp_get_attachment_image_src($imagen_id_mis, 'full')[0];
                ?>
                <img src="<?php echo $imagen_large_mis; ?>" ></img>
            </div>
            <div class="page-content3">
                <?php echo $contenido_mis; ?>
            </div>
        </div>
        
    </section>
    <section class="another-page-content4" id="miss">
        <div class="guest-retention">
            <div class="line"></div>
            <p class="guest-title">We clean, you take care of guest retention!</p>
            <div class="line"></div>
        </div>
        <div class="right-text" >
            <h3>
                <?php 
                    echo apply_filters('the_content', $pagina_vis->post_title); 
                //print_r($pagina_os); //
                ?>
            </h3>
        </div>
        <div class="page-container">
            <div class="page-content3">
                <?php echo $contenido_vis; ?>
            </div>
            <div class="page-image1">
                <?php
                    $imagen_id_vis = 91;
                    $imagen_thumbnail_vis = wp_get_attachment_image_src($imagen_id_vis, 'thumbnail')[0];
                    $imagen_medium_vis = wp_get_attachment_image_src($imagen_id_vis, 'medium')[0];
                    $imagen_medium_large_vis = wp_get_attachment_image_src($imagen_id_vis, 'medium-large')[0];
                    $imagen_large_vis = wp_get_attachment_image_src($imagen_id_vis, 'large')[0];
                    $imagen_full_vis = wp_get_attachment_image_src($imagen_id_vis, 'full')[0];
                ?>
                <img src="<?php echo $imagen_large_vis; ?>" ></img>
            </div>
            
        </div>    
    </section>
    
</main>

<?php
    get_footer(); 
?>