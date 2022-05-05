<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body id="top">
    <header>

        <!-- NAVIGATION -->

        <nav>
            <!-- collapsed nav -->
            <section class="container collapsed-nav py-5 d-flex justify-content-between pe-auto">
                <!-- dinamiskas logo, veda i homepage -->
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>

                <!-- desktop screen nav-menu, pasislepia, jei < 1100px -->
                <div class="container text-center">
                    <!-- dinamiskas menu -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-location'
                    ));
                    ?>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\Open_menuIcon.png" alt="menu icon" class="menu-icon">
            </section>

            <!-- nav menu atsidarys (toggle) su click -->
            <section class="hidden expanded p-5" id="expanded-nav">
                <div class="d-flex justify-content-between container">

                    <!-- nav-burger, atsiranda nuo 1100px -->
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>\assets\images\OlumLogoWhite.png" alt="white company logo" class="expanded-logo"></a>

                    <i class="fa-solid fa-xmark"></i>
                </div>

                <div class="container">
                    <a href="/404.php" id="search">Or try Search</a>
                </div>

                <div class="container text-end">
                    <!-- dinamiskas wp menu -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-location'
                    ));
                    ?>
                </div>
            </section>
        </nav>
    </header>