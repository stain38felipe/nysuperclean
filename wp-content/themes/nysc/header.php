<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="nav-bar">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'site_menu',
                'menu_class'     => 'menu-principal', // Clase CSS opcional para estilos
                'container'      => false,
                'container_class'=> 'nav-menu',
                'depth'          => 2 // Permite submenús
                
            ));
            ?>
        </nav>
    </header>