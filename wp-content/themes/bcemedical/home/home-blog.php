<?php query_posts( array(
    'post_type' => 'post',
    'posts_per_page' => 6,
)); ?>
<section class="latest-news-area pt-115 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon back-icon-left" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5>Tin tức nổi bật</h5>
                        <h1>Thông tin sức khỏe hữu ích </h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                <div class="section-button text-right pt-80">
                    <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="latest-news-box mb-30">
                    <div class="latest-news-thumb mb-35">
                        <?= the_post_thumbnail(); ?>
                    </div>
                    <div class="latest-news-content">
                        <h3><a href="<?= the_permalink(); ?>"><?= the_title() ?></a></h3>
                        <p><?= the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</section>