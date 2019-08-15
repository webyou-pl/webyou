<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
    <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset') ?>">

        <!-- zapobieganie duplikowaych wartosci seo -->
        <?php if(is_search()): ?>
            <meta name="robots" content="noindex, nofollw" />
        <?php endif; ?>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tytuł strony - webyou</title>

        <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/favicon/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/favicon/favicon.ico">

        <!-- style dla szablonu -->
            <!-- link do głownego katalogu -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/build/main.css" />


        <!-- style właściciela (podstawowe)-->
        <!-- // sprawdzić czy mozna dać if od tego czy jest w nim kod -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />


        <!-- js szablonu -->
        <script scr="<?= WEBYOU_THEME_URL ?>js/main.js"></script>

        <!--// co to jest pingback? -cos ze zgłaszaniem nowych postów -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

        <!-- ustawienia użytkownika na wp -->
        <?php wp_head() ?>

    </head>
    <body <?php body_class() ?>>

        <header>
            <h1><a href="<?= esc_url(home_url('/')); ?>">Nazwa/logo szablonu</a></h1>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu( array(
                        'menu'              => 'main_nav',
                        'theme_location'    => 'main_nav',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>

                </nav>

        </header>