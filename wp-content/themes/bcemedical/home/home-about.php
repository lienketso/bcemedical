<?php
    $options = get_option('home_options');
?>

<section class="about-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="medical-icon-brand-2">
                    <img src="<?= get_template_directory_uri() ?>/front/img/about/medical-brand-icon-border.png" alt="">
                </div>
                <div class="about-left-side pos-rel mb-30">
                    <div class="about-front-img">
                        <img src="<?= $options['home-about-image']['url'] ?>" alt="<?= $options['home-about-subtitle'] ?>">
                    </div>
                    <div class="about-shape">
                        <img src="<?= get_template_directory_uri() ?>/front/img/about/about-shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="about-right-side mb-30">
                    <div class="about-title mb-20">
                        <h5><?= $options['home-about-subtitle'] ?></h5>
                        <h1><?= $options['home-about-main-title'] ?></h1>
                    </div>
                    <div class="about-text">
                        <?= $options['home-about-content'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>