<?php
/*
Template Name: NYSC-Lets Connect Template
*/
get_header();

// Obtener el contenido de la página con ID 32
$pagina_lc = get_post(38); // Reemplaza 32 con el ID correcto de la página
$contenido_lc = apply_filters('the_content', $pagina_lc->post_content); // Aplica filtros para formatear el contenido correctamente

       
?>


<main class="content-area">
    <section class="lets-connect-section">
        <div class="page-logo"></div>
        <div class="page-title2"><h2><?php the_title();  ?></h2></div>    
    </section>
    <section class="another-page-content1" id="wwo">
        <div class="form-text" >
            <?php echo $contenido_lc;?>
        </div>
    </section>

</main>

<?php
    get_footer(); 
?>