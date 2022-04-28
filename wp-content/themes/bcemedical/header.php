<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.png in the root directory -->
    <!-- CSS here -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- header begin -->
<header>
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-7 offset-md-1">
                    <div class="header-info">
                        <span><i class="fas fa-phone"></i> +1 800 833 9780</span>
                        <span><i class="fas fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                 data-cfemail="91f8fff7fed1f4e9f0fce1fdf4bff2fefc">[email&#160;protected]</a></span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-4">
                    <div class="header-top-right-btn f-right">
                        <a href="appoinment.html" class="btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="logo logo-circle pos-rel">
                        <a href="index.html"><img src="<?= get_template_directory_uri() ?>/front/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="header-right f-right">
<!--                        <div class="header-lang f-right pos-rel d-none d-lg-block">-->
<!--                            <div class="lang-icon">-->
<!--                                <img src="--><?//= get_template_directory_uri() ?><!--/front/img/icon/lang.png" alt="">-->
<!--                                <span>EN<i class="fas fa-angle-down"></i></span>-->
<!--                            </div>-->
<!--                            <ul class="header-lang-list">-->
<!--                                <li><a href="#">USA</a></li>-->
<!--                                <li><a href="#">UK</a></li>-->
<!--                                <li><a href="#">CA</a></li>-->
<!--                                <li><a href="#">AU</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="header-social-icons f-right d-none d-xl-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__menu f-right">
                        <nav id="mobile-menu">
                            <?php
                                $args = [
                                        'walker'=> new My_Walker_Nav_Menu()
                                ];
                                wp_nav_menu($args);
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
