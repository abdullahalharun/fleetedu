<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand pt-0 waves-effect" href="">
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
                            'menu_class'     => 'navbar-nav mr-auto',
                        )
                    );
                    ?>


                    <!-- Left -->
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Categories </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="">Marketing Automation</a>
                                <a class="dropdown-item" href="">Web Push Notifications</a>
                                <a class="dropdown-item" href="">Analytics & Tag Manager</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Link</a>
                        </li>
                    </ul> -->
                </div>
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
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
        </nav>
        <!-- Navbar -->