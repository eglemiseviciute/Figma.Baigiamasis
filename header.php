<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Baigiamasis Projektas</title>
    <?php wp_head(); ?>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/wordpress">
                <!-- cia sukodinam logo kad niekur nedingtu -->

                <?php
                if (function_exists('the_custom_logo')) {
                    $logo = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($logo, 'full');
                    $image_url = $image[0]; ?>
                    <img src="<?php echo $image_url ?>">

                <?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">



                <?php


                // gaunam dinamini meniu sukoduota
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav ms-auto">%3$s</ul>'

                    )
                );


                ?>
            </div>
        </div>
    </nav>