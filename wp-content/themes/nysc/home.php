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
    <section class="services-section">
        <div class="container-home">
            <div class="row-home">
                <?php
                // Consulta las 3 páginas que corresponden a "What We Offer", "Mission" y "Vision"
                $args = array(
                    'post_type'      => 'page',
                    'post__in'       => array(30, 20, 24), // Reemplaza estos IDs con los de tus páginas
                    'orderby'        => 'post__in',
                    'posts_per_page' => 3
                );

                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4 service-box">
                        <h2><?php the_title(); ?></h2>
                        <div class="service-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more">read more</a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</main>
<!-- Bloque encima del footer -->
<section class="seccion-fondo">
    <div class="overlay">
        
    </div>
</section>

<?php
get_footer(); 
?>