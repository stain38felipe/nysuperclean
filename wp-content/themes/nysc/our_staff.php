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
        <div class="page-container">
            <div class="centered-text" >
                <div><?php echo $parrafo_2; ?></div>
            
            </div>
            <div class="page-container">
                <div class="page-image1">
                    <img src="<?php 
                                $imagen_url = get_the_post_thumbnail_url(34, 'medium-large');
                                echo esc_url($imagen_url);
                    ?>" ></img>
                </div>
                <div class="page-content1">
                    <?php  echo $parrafo_3; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="another-page-content6" id="wyg">
        <div class="centered-text" >
            <h3>
                <?php 
                    echo $pagina_oc->post_title; 
                //print_r($pagina_wwo); //
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