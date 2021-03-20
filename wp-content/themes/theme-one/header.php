<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="top" class="s-wrap site-wrapper">

        <!-- site header
        ================================================== -->
        <header class="s-header">

            <div class="header__top">
                <div class="header__logo">
                    <?php the_custom_logo() ?>

                </div>

                <div class="header__search">
                <?php get_search_form() ?>   
                <a href="<?php home_url() ?>" title="Close Search" >Close</a>     
                </div>  <!-- end header__search -->
                             <!-- toggles -->
                <a href="#0" class="header__search-trigger"></a>
                <a href="#0" class="header__menu-toggle"><span>Menu</span></a>

            </div> <!-- end header__top -->
            <nav class="header__nav-wrap">
            <?php wp_nav_menu([
                'menu' => 'nav',
                'menu_class' => 'header__nav-wrap',
                'container' => 'ul',
                'container_class' => 'header__nav',
                'theme_location' => 'primary',
                //'container' => '',
                //'menu_class' => 'header__nav',
                'items_wrap' => '<ul class="header__nav">%3$s</ul>',
                'before' => '',
                'after' => '',

            ]);
            ?>
            <?php get_template_part('inc/widget') ?>
            </nav>
        </header> <!-- end s-header -->
