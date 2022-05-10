<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcemedical
 */
get_header();
?>
<main>
    <!-- hero-area start -->
    <?php include('home/home-slider.php');   ?>
    <!-- hero-area end -->
    <!-- about-area start -->
    <?php include('home/home-about.php');   ?>
    <!-- about-area end -->
    <!-- services-area start -->
    <?php include('home/home-service.php');   ?>
    <!-- services-area end -->
    <!-- team-area start -->
    <?php include('home/home-doctor.php');   ?>
    <!-- team-area end -->
    <!-- fact-area start -->
    <?php include('home/home-support.php');   ?>
    <!-- fact-area end -->
    <!-- pricing-area start -->
    <?php include('home/home-pricing.php');   ?>
    <!-- pricing-area end -->
    <!-- cta-area start -->
    <?php include('home/home-slogan.php');   ?>
    <!-- cta-area end -->
    <!-- latest-news-area start -->
    <?php include('home/home-blog.php');   ?>
    <!-- latest-news-area end -->

<?php
get_footer();