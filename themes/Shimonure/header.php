<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="Sitio Personal de Rogelio Vargas">
        <meta name="author" content="Rogelio Vargas">

        <!--
        <link href="css/theme.css" rel="stylesheet" />
        <link href="css/extras.css" rel="stylesheet" />
        <link href="css/single-portafolio.css" rel="stylesheet" />
        -->


        <title>Rogelio Vargas Marquez | Full Stack Developer</title>

        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?> /favicon.png" />
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76301055-1', 'auto');
            ga('send', 'pageview');

        </script>

        <?php wp_head(); ?>
    </head>
    <body>


        <div class="navbar navbar-default navbar-fixed-top top-nav-collapse">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo get_home_url(); ?>" class="navbar-brand">Rogelio Vargas Marquez</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'navbar-collapse collapse',
                    'container_id' => 'navbar-main',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>

            </div>
        </div>


        <!--<div style="height: 50px;"></div>-->


