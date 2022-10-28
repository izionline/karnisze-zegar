<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="canonical" href="<?php the_permalink(); ?>" />

    <!-- ICO -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <div class="plus-btn-pos">
    <div class="plus-btn">
        <div class="r1"></div>
        <div class="r2"></div>
    </div>
    </div>

    <div class="menu-container">
    <div class="menu-sliders"></div>
    <div class="menu-sliders"></div>
    <div class="menu-sliders"></div>
    <div class="menu-mobile">
        
        <?php wp_nav_menu(array('menu' => 'primary')); ?>

    </div>
    </div>

    <script>
        $('.plus-btn').click(function(){
        $('body').toggleClass('menu-open');
        })
    </script>

    <header>
        <div class="container">
            <div class="row">
                <p>Kontakt z nami! tel. 12 66 23 626, kom. 501 220 152, mail: <a href="mailto:karnisze@dywanywitek.pl">karnisze@dywanywitek.pl</a></p>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-2 logo-wrapper">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="col-sm-6 col-lg-8">
                    <?php wp_nav_menu(array('menu' => 'primary')); ?>
                </div>
                <div class="col-sm-3 col-lg-2 logo-wrapper">
                    <a href="https://awitek.pl" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/logo-awitek.png" alt="A.Witek" class="logo2"></a>
                </div>
            </div>
        </div>
    </nav>