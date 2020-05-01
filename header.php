<!DOCTYPE html>
<html lang="En">
    <head>
        <meta charset="UTF-8">
        <title>OS 40</title>
        <?php  wp_head(); ?>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-md  mb-5 navbar-custom text-white">
            <a class="navbar-brand text-white" href="#">
                Personal Profile
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
       
        <?php
        wp_nav_menu(array(
            'theme-location' => "main-menu" , 
            'menu_class' => 'navbar-nav mr-auto' ,
            'menu_item' => 'navbar-item text-white',
            'container_class' => 'collapse navbar-collapse '
        ));

        ?>
        </nav>
        </header>