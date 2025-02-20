<?php
/*
Template Name: NYSC-Our Staff Template
*/
get_header();

// Obtener el contenido de la página con ID 32
$pagina_os = get_post(34); // Reemplaza 32 con el ID correcto de la página
$contenido_os = apply_filters('the_content', $pagina_os->post_content); // Aplica filtros para formatear el contenido correctamente

//Separar los parrafos de la página
$contenido = apply_filters('the_content', get_post(34)->post_content); 

// Separar los párrafos
$parrafos = preg_split('/<\/p>\s*/', $contenido, -1, PREG_SPLIT_NO_EMPTY);

// Crear variables dinámicas
foreach ($parrafos as $index => $p) {
    ${"parrafo_" . ($index + 1)} = trim($p) . '</p>'; // Mantiene el cierre de párrafo
}

$pagina_oc = get_post(36); // Reemplaza 32 con el ID correcto de la página
$contenido_oc = apply_filters('the_content', $pagina_oc->post_content); 
        
?>


<main class="content-area">
    <section class="our-staff-section">
        <div class="page-logo"></div>
        <div class="page-title"><h2><?php the_title();  ?></h2></div>    
    </section>
    <section class="another-page-content1" id="wwo">
        <div class="quote-text" >
            <?php echo the_excerpt(); ?>
        </div>
    </section>
    <section class="another-page-content5" id="wyg">
        <div class="centered-text" >
                <?php
                    $parrafo_2 = str_replace('</div>', '', $parrafo_2); 
                    echo $parrafo_2; 
                ?>
        </div>
        <div class="page-container">
            <div class="page-image1" id="we_keep">
                <?php 
                    $parrafo_2 = str_replace('</div>', '', $parrafo_2);
                    echo $parrafo_2;
                    $imagen_id_os = 93;
                    $imagen_thumbnail_os = wp_get_attachment_image_src($imagen_id_os, 'thumbnail')[0];
                    $imagen_medium_os = wp_get_attachment_image_src($imagen_id_os, 'medium')[0];
                    $imagen_medium_large_os = wp_get_attachment_image_src($imagen_id_os, 'medium-large')[0];
                    $imagen_large_os = wp_get_attachment_image_src($imagen_id_os, 'large')[0];

                    $imagen_id_os_mob = 126;
                    $imagen_medium_os_mob = wp_get_attachment_image_src($imagen_id_os_mob, 'medium')[0];
                ?>
                <img src="<?php echo esc_url($imagen_medium_large_os); ?>" 
                    srcset="
                        <?php echo esc_url($imagen_medium_os_mob); ?> 300w, 
                        <?php echo esc_url($imagen_medium_os); ?> 768w,
                        <?php echo esc_url($imagen_medium_os_mob); ?> 1024w"
                    sizes="(max-width: 430px) 100vw, 
                            (max-width: 768px) 90vw, 
                            (min-width: 1024px) 80vw">
            </div>
            <div class="page-content1" id="we_keep_txt">
                <?php  echo $parrafo_3; ?>
            </div>
        </div>
    </section>
    <section class="another-page-content6" id="oc">
        <div class="centered-text" >
            <h3>
                <?php 
                    echo $pagina_oc->post_title; 
                ?>
            </h3>
        </div>
        <div class="page-content4">
            <?php echo $contenido_oc; ?>
        </div>
        
    </section>
</main>

<?php
    get_footer(); 
?>