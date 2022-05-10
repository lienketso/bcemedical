<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcemedical
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

            <section class="breadcrumb-bg pt-100 pb-100" data-background="<?= get_template_directory_uri() ?>/front/img/blog/page-bg.jpg"
                     style="background-image: url('<?= get_template_directory_uri() ?>/front/img/blog/page-bg.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="page-title">
                                <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                            <div class="page-breadcumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb ">
                                        <li class="breadcrumb-item">
                                            <a href="<?= get_home_url() ?>">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="blog-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                            endwhile;

                            the_posts_navigation();

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                            ?>


                        </div>
                    </div>
                </div>
            </section>


	</main><!-- #main -->

<?php

get_footer();
