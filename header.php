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
        <a href="<?php echo site_url(); ?>" class="logo">
            <img src="<?php echo get_theme_file_uri('/images/logo-lilo-mali.png') ?>" alt="Ordinacija Lolo logo" class="logo-lilo">
        </a>

        <div class="hamburger-box">
            <div class="hamburger not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    
        <?php
            $args = array(
                'theme_location' => 'primary'
            );
        ?>
        <?php wp_nav_menu($args); ?>
    </header>