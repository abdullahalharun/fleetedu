<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
    
</head>
<body>
    <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand pt-0 waves-effect" href="<?php echo get_home_url(); ?>">
                    <img height="48px" src="http://itqaan.org/wp-content/uploads/2020/12/ITQAN_logo.png" alt="Itqaan logo">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class'     => 'navbar-nav mr-auto waves-effect',
                        )
                    );
                    ?>

                
                    <!-- Right -->
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/itqaan" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.youtube.com/channel/UC-8UcK4vvZGCCY-XeUHLcvg" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="https://github.com/mdbootstrap/material-design-for-bootstrap" class="nav-link border border-light rounded waves-effect"
                                target="_blank">
                                <i class="fa fa-github mr-2"></i>MDB GitHub
                            </a>
                        </li> -->
                    </ul>
                </div>
                

            </div>
        </nav>
        <!-- Navbar -->