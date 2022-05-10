<?php
    $options = get_option('home_options');
    $itemService = $options['list-home-service'];
?>

<section class="servcies-area gray-bg pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="section-title text-center pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5><?= $options['home-service-subtitle'] ?></h5>
                        <h1><?= $options['home-service-main-title'] ?></h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($itemService as $d): ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="<?= $d['item-service-icon']['url'] ?>" alt="<?= $d['item-service-title'] ?>">
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= $d['item-service-btn-link'] ?>"><?= $d['item-service-title'] ?></a></h3>
                        <p><?= $d['item-service-desc'] ?></p>
                        <a class="service-link" href="<?= $d['item-service-btn-link'] ?>">Xem thêm</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>