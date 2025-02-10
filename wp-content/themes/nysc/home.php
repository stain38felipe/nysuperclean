<?php
/*
Template Name: HomePage
*/
get_header(); 
?>

<main class="content-area">
    <section class="hero-section">
        <div class="hero-logo"></div>
        <div class="hero-content">
            Housekeeping Management
        </div>
    </section>
    <div class="container">
        <!-- Sección Hero (Imagen + Logo) -->
        <?php
            wp_enqueue_style('home-estilos', get_stylesheet_uri());
        ?>
        
    </div>
</main>
<!-- Bloque encima del footer -->
<section class="seccion-fondo">
    <div class="overlay">
        
    </div>
</section>

<?php
get_footer(); 
?>