<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <!-- Ovde ovo ili logo. Vrv logo + eventualno description -->
        <!-- <h1><?php bloginfo('name'); ?></h1> -->
        <!-- <span><?php bloginfo('description'); ?></span> -->
    <!-- -->
    </header>
    <nav class="main-nav">
        <div class="nav-links-container">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
        <div class="search-container">
            <form action="">
                <input type="text" placeholder="Pretraga...">
            </form>
        </div>
    </nav>