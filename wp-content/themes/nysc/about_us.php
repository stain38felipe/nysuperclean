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
                    $imagen_id_mis = 90;// fotos para web
                    $imagen_thumbnail_mis = wp_get_attachment_image_src($imagen_id_mis, 'thumbnail')[0];
                    $imagen_medium_mis = wp_get_attachment_image_src($imagen_id_mis, 'medium')[0];
                    $imagen_medium_large_mis = wp_get_attachment_image_src($imagen_id_mis, 'medium-large')[0];
                    $imagen_large_mis = wp_get_attachment_image_src($imagen_id_mis, 'large')[0];
                    $imagen_full_mis = wp_get_attachment_image_src($imagen_id_mis, 'full')[0];

                    $imagen_id_mob = 130;//fotos para mobile
                    $imagen_thumbnail_mob = wp_get_attachment_image_src($imagen_id_mob, 'thumbnail')[0];
                    $imagen_medium_mob = wp_get_attachment_image_src($imagen_id_mob, 'medium')[0];
                    $imagen_medium_large_mob = wp_get_attachment_image_src($imagen_id_mob, 'medium-large')[0];
                    $imagen_large_mob = wp_get_attachment_image_src($imagen_id_mob, 'large')[0];
                    $imagen_full_mob = wp_get_attachment_image_src($imagen_id_mob, 'full')[0];

                    // Definir imagen por defecto
                    $imagen_por_defecto = esc_url($imagen_large_mis);
                ?>
                <!-- <img src="<?php //echo esc_url($imagen_medium_large_mob); ?>" 
                    srcset="
                        <?php //echo esc_url($imagen_full_mob); ?> 300w, 
                        <?php //echo esc_url($imagen_full_mob); ?> 768w,
                        <?php //echo esc_url($imagen_large_mis); ?> 1024w,
                        <?php //echo esc_url($imagen_full_mis); ?> 1440w"
                    sizes="(max-width: 430px) 100vw, 
                            (max-width: 768px) 90vw, 
                            (max-width: 1024px) 80vw,
                            (min-width: 1440px) 70vw"> -->
                <picture>
                    <!-- Imagen para pantallas menores a 430px -->
                    <source srcset="<?php echo esc_url($imagen_full_mob); ?>" media="(max-width: 430px)">
                    <!-- Imagen para pantallas menores a 768px -->
                    <source srcset="<?php echo esc_url($imagen_full_mob); ?>" media="(max-width: 768px)">
                    <!-- Imagen para pantallas mayores a 1024px -->
                    <source srcset="<?php echo esc_url($imagen_large_mis); ?>" media="(min-width: 1024px)">
                    <!-- Imagen por defecto (si `source` no funciona) -->
                    <img src="<?php echo esc_url($imagen_large_mis); ?>" alt="Descripción de la imagen">
                </picture>

            </div>
            <div class="page-content3">
                <?php echo $contenido_mis; ?>
            </div>
        </div>
        
    </section>
    <section class="another-page-content4" id="viss">
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

                    $imagen_id_vis_mob = 129;
                    $imagen_thum_vis_mob = wp_get_attachment_image_src($imagen_id_vis_mob, 'thumbnail')[0];
                    $imagen_medium_vis_mob = wp_get_attachment_image_src($imagen_id_vis_mob, 'medium')[0];
                    $imagen_full_vis_mob = wp_get_attachment_image_src($imagen_id_vis_mob, 'full')[0];

                ?>
                 <!-- <img src="<?php //echo esc_url($imagen_medium_large_vis); ?>" 
                    srcset="
                        <?php //echo esc_url($imagen_medium_vis_mob); ?> 300w, 
                        <?php //echo esc_url($imagen_medium_vis); ?> 768w,
                        <?php //echo esc_url($imagen_medium_large_vis); ?> 1024w,
                        <?php //echo esc_url($imagen_large_vis); ?> 1440w,
                        <?php //echo esc_url($imagen_1536_os); ?> 1536w,
                        <?php //echo esc_url($imagen_full_vis); ?> 2048w"
                    sizes="(max-width: 430px) 100vw, 
                            (max-width: 768px) 90vw, 
                            (min-width: 1024px) 80vw, 
                            (max-width: 1440px) 75vw,
                            (max-width: 1536px) 70vw,
                            (min-width: 1537px) 65vw"> -->

                <picture>
                    <!-- Imagen para pantallas menores a 430px -->
                    <source srcset="<?php echo esc_url($imagen_full_vis_mob); ?>" media="(max-width: 430px)">
                    <!-- Imagen para pantallas menores a 768px -->
                    <source srcset="<?php echo esc_url($imagen_full_vis_mob); ?>" media="(max-width: 768px)">
                    <!-- Imagen para pantallas mayores a 1024px -->
                    <source srcset="<?php echo esc_url($imagen_large_vis); ?>" media="(min-width: 1024px)">
                    <!-- Imagen por defecto (si `source` no funciona) -->
                    <img src="<?php echo esc_url($imagen_large_vis); ?>" alt="Descripción de la imagen">
                </picture>
            </div>
            
        </div>    
    </section>
    
</main>

<?php
    get_footer(); 
?>