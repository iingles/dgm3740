<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css" />
    <title><?php wp_title(); ?></title>
</head>
    <body>
        <header class="main-header">
            <div class="container">
                <figure class="logo">
                    <img
                    class="main-logo"
                    src="<?php echo get_template_directory_uri(); ?>/img/logo3x.png"
                    srcset="
                    <?php echo get_template_directory_uri(); ?>/img/logo/logo1x.png 1x,
                    <?php echo get_template_directory_uri(); ?>/img/logo/logo2x.png 2x,
                    <?php echo get_template_directory_uri(); ?>/img/logo/logo3x.png 3x"
                    alt="Logo for Cabot Cruises"
                    />
                </figure> 
                <h1 class="header-phone"><a href="tel:1-800-555-1234">1-800-555-1234</a></h1>
            </div>
        </header>

        <nav class="main-nav" >
            <div class="container">

                <button id="mobileMenu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                    &nbsp;MENU
                </button>
                <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>

                <div class="main-search">
                    <form action="/" method="get" id="searchForm">
                        <input type="search" placeholder="search.." name="s">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

            </div>
        </nav>
