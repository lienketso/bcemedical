<?php
    $options = get_option('home_options');
    $slider = $options['list-home-slider'];
?>

<section class="hero-area">
    <div class="hero-slider">
        <div class="slider-active">
            <?php foreach($slider as $d): ?>
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="<?= $d['home-slider-image']['url'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="hero-text">
                                <div class="hero-slider-caption ">
                                    <h1 data-animation="fadeInUp" data-delay=".4s"><?= $d['home-slider-title'] ?></h1>
                                    <p data-animation="fadeInUp" data-delay=".6s"><?= $d['home-slider-desc'] ?></p>
                                </div>
                                <div class="hero-slider-btn">
                                    <a data-animation="fadeInLeft" data-delay=".6s" href="<?= $d['home-slider-btn-link'] ?>" class="btn btn-icon ml-0">
                                        <span>+</span><?= $d['home-slider-btn-title'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>