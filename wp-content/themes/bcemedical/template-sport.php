<?php
/* Template Name: Sport Scream */
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sport scream</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/default.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/responsive.css">
</head>
<body>

<!-- preloader -->
<!--<div id="preloader">-->
<!--    <div id="loading-center">-->
<!--        <div class="loader loader-two">-->
<!--            <div class="loader-outter"></div>-->
<!--            <div class="loader-inner"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- preloader-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-top-two scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->
<?php
    $options = get_option('sport_options');
?>
<!-- header-area -->
<header>
    <div id="sticky-header" class="menu-area transparent-header capsule-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="flaticon-menu"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="index.html"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="#home" class="section-link">Trang chủ</a></li>
                                    <li><a href="#features" class="section-link">Lợi ích</a></li>
                                    <li><a href="#ingredient" class="section-link">Tính năng</a></li>
                                    <li><a href="#products" class="section-link">Sản phẩm</a></li>
                                    <li><a href="#feedbacks" class="section-link">Khách hàng</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="far fa-times"></i></div>
                            <div class="nav-logo"><a href="#"><img src="assets/img/logo/w_capsule_logo.png" alt="" title=""></a></div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li class="facebook"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li class="pinterest"><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li class="youtube"><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>



</header>
<!-- header-area-end -->


<!-- main-area -->
<main>

    <!-- banner-area -->
    <section id="home" class="banner-area capsule-banner">
        <div class="capsule-banner-bg" data-background="<?= get_template_directory_uri() ?>/assets/img/banner/capsule_banner_bg.png"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-11 order-0 order-lg-2">
                    <div class="banner-img wow fadeInRight" data-wow-delay=".4s">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/product-bg.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="capsule-banner-content wow fadeInUp" data-wow-delay=".2s">
                        <h6 class="sub-title">Kem massage thể thao kích thích nhiệt</h6>
                        <h2 class="title">Takjoa
                            <span class="capsule-info"><strong>100ML</strong> DXII</span>
                        </h2>
                        <h2 class="title">Sport </h2>
                        <div class="capsule-banner-btn">
                            <a href="#products" class="btn capsule-btn"><i class="fal fa-shopping-cart"></i>Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="capsule-banner-shape" data-parallax='{"x" : 200 , "y" : -200 }'></div>
    </section>
    <!-- banner-area-end -->

    <!-- features-area -->
    <section id="features" class="capsule-features-area pt-120">
        <div class="container">
            <div class="row">
                <?php
                    $listLoiich = $options['option-loiich'];
                ?>
                <?php foreach($listLoiich as $d): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="capsule-features-item mb-30">
                        <div class="cf-icon">
                            <img src="<?= $d['loiich-image']['url'] ?>" alt="<?= $d['loiich-title'] ?>">
                        </div>
                        <div class="cf-content">
                            <h5 class="title"><?= $d['loiich-title'] ?></h5>
                        </div>
                        <div class="cf-overlay-icon"><img src="<?= $d['loiich-image']['url'] ?>" alt="<?= $d['loiich-title'] ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ingredient-area -->
    <section id="ingredient" class="ingredient-area pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="capsule-section-title text-center mb-50">
                        <span class="sub-title"><?= $options['tinhnang-subtitle'] ?></span>
                        <h2 class="title"><?= $options['tinhnang-main-title'] ?></h2>
                    </div>

                    <div class="about-product">
                        <p><?= $options['tinhnang-desc'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row ingredients-wrapper align-items-center">
                <div class="col-lg-4 order-1 col-md-6">
                    <div class="ingredients-item wow fadeInLeft" data-wow-delay=".2s">
                        <div class="ingredients-icon">
                            <img src="<?= get_template_directory_uri(). '/assets/img/hot.png' ?>" alt="Nóng đúng nơi">
                        </div>

                        <div class="ingredients-content">
                            <h5 class="title">Nóng đúng nơi</h5>
                            <p>Ngay cả khi bạn xoa trên toàn bộ da, chỉ những vùng tổn thương được làm nóng bằng phương pháp sưởi ấm hồng ngoại xa.</p>
                        </div>
                    </div>
                    <div class="ingredients-item wow fadeInLeft" data-wow-delay=".3s">
                        <div class="ingredients-icon">
                            <img src="<?= get_template_directory_uri(). '/assets/img/absorption.png' ?>" alt="Hấp thụ nhanh chóng">
                        </div>
                        <div class="ingredients-content">
                            <h5 class="title">Hấp thụ nhanh chóng</h5>
                            <p>Nhanh chóng được hấp thụ vào da mà không gây bết dính với phương pháp ion hóa, sạch sẽ trên da</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-0 order-lg-2">
                    <div class="ingredients-img">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/product-2.png" alt="Sản phẩm kem massage takjoa">
                    </div>
                </div>
                <div class="col-lg-4 order-3 col-md-6">
                    <div class="ingredients-item wow fadeInRight" data-wow-delay=".2s">
                        <div class="ingredients-icon">
                            <img src="<?= get_template_directory_uri(). '/assets/img/snap.png' ?>" alt="Dễ dàng sử dụng ">
                        </div>
                        <div class="ingredients-content">
                            <h5 class="title">Dễ dàng sử dụng</h5>
                            <p>Một lượng nhất định có thể được sử dụng khi cần thiết bằng cách sử dụng bằng cách nhấn nhẹ trên lọ kem.</p>
                        </div>
                    </div>
                    <div class="ingredients-item wow fadeInRight" data-wow-delay=".3s">
                        <div class="ingredients-icon">
                            <img src="<?= get_template_directory_uri(). '/assets/img/palm.png' ?>" alt="Hương thơm thảo mộc">
                        </div>
                        <div class="ingredients-content">
                            <h5 class="title">Hương thơm thảo mộc</h5>
                            <p>Sử dụng sảng khoái với một mùi hương thảo mộc phương Đông nhẹ nhàng tươi mát, không mùi xộc khó chịu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ingredient-area-end -->

    <!-- capsule-video-area -->
    <section class="capsule-video-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cap-video-img">
                        <img src="<?= $options['video-sport-image-video']['url']; ?>" alt="<?= $options['video-sport-main-title']; ?>">
                        <a href="<?= $options['video-sport-link']; ?>" class="popup-video ripple-white"><i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cap-video-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="capsule-section-title text-center mb-15">
                            <span class="sub-title"><?= $options['video-sport-subtitle']; ?></span>
                            <h2 class="title"><?= $options['video-sport-main-title']; ?> </h2>
                        </div>
                        <div class="cap-video-btn">
                            <a href="#products" class="btn capsule-btn"><i class="fal fa-shopping-cart"></i> Mua ngay</a>
<!--                            <a href="contact.html" class="btn capsule-border-btn">Learn More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- capsule-video-area-end -->
    <!-- product-info-area -->
    <section class="product-info-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="product-info-img text-center">
                        <img src="<?= $options['sport-product-about-image']['url'] ?>" class="main-img" alt="<?= $options['sport-product-about-maintitle'] ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/images/product_info_shape.png" class="img-shape" alt="Shape takjoa cream">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info-content">
                        <div class="capsule-section-title mb-10">
                            <span class="sub-title"><?= $options['sport-product-about-subtitle'] ?></span>
                            <h2 class="title"><?= $options['sport-product-about-maintitle'] ?></h2>
                        </div>
                        <?= $options['sport-product-about-content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-info-area-end -->

    <!-- shop-area -->
    <section id="products" class="shop-area capsule-theme-bg pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="capsule-section-title text-center mb-50">
                        <span class="sub-title"><?= $options['sport-product-subtitle'] ?></span>
                        <h2 class="title"><?= $options['sport-product-main-title'] ?></h2>
                    </div>
                </div>
            </div>
            <?php
                $listProduct = $options['product-list'];
            ?>
            <div class="row justify-content-center">
                <?php foreach($listProduct as $d): ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <img src="<?= $d['item-product-img']['url'] ?>" alt="<?= $d['item-product-title'] ?>">
                        </div>
                        <div class="shop-content">
                            <h4 class="title"><a href="#" data-bs-toggle="modal" data-bs-target="#productQuickView" ><?= $d['item-product-title'] ?></a></h4>
                            <h3 class="price"><?= $d['item-product-price'] ?> đ</h3>
                            <div class="btn-shopping">
                                <button class="btn-add-shop" data-price="<?= $d['item-product-price'] ?>" data-qty="<?= $d['item-product-qty'] ?>"
                                        type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#productQuickView">
                                    <i class="fal fa-shopping-cart"></i> Mua hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="productQuickView" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fal fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="quickview-product-img">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/product-bg.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quickview-product-content">
                                    <span class="sub-title">Kem massage</span>
                                    <h3 class="title">Takjoa Sports Cream</h3>
                                    <h5 class="price"><span id="priceChange">280.000</span> / <span id="dungtichChange">5ml</span></h5>
                                    <div class="form-buy-product">
                                        <div class="form-dathang">
                                            <input type="text" class="form-control" id="spname" value="" placeholder="">
                                        </div>
                                        <div class="form-dathang">
                                            <input type="text" class="form-control" placeholder="Họ và tên *">
                                        </div>
                                        <div class="form-dathang">
                                            <input type="text" class="form-control" placeholder="Số điện thoại *">
                                        </div>
                                        <div class="form-dathang">
                                            <input type="text" class="form-control" placeholder="Địa chỉ nhận hàng *">
                                        </div>
                                        <div class="form-dathang">
                                            <textarea class="form-control" placeholder="Yêu cầu khác" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="product-quickview-quantity">

                                        <button class="cart-btn">Mua hàng</button>
                                    </div>
                                    <div class="products-quickview-info">
                                        <p>Ngày thoa 3-4 lần tùy theo triệu chứng của các vùng khó chịu như tay, chân, vai, lưng. Đắp trực tiếp lên vùng cơ thể khó chịu, tay chân vào vùng khó chịu và ngược lại.
                                            Khi bôi kem ở vị trí vùng kín, không nên bôi trực tiếp, bôi xung quanh vùng thắt lưng và các vùng lân cận.</p>
                                        <p>Không thoa lên mặt, ngoại trừ thái dương, và không dụi mắt bằng tay đã thoa kem. Nếu tiếp tục thoa, bạn có thể cảm
                                            nhận được năng lượng truyền sâu khi vùng khó chịu trở nên thoải mái với kích thích nhiệt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->

    <!-- faq-area -->
    <section class="faq-area fix pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="capsule-section-title mb-35">
                        <span class="sub-title"><?= $options['sport-guild-subtitle'] ?></span>
                        <h2 class="title"><?= $options['sport-guild-main-title'] ?></h2>
                    </div>
                    <?php
                        $listGuild = $options['list-guild'];
                    ?>
                    <div class="faq-wrapper faq-style-two">
                        <div class="accordion" id="accordionExample">
                           <?php foreach($listGuild as $k=>$d): ?>
                            <div class="card">
                                <div class="card-header" id="headingOne<?= $k ?>">
                                    <h2 class="mb-0">
                                        <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne<?= $k ?>" aria-expanded="<?= ($k==0) ? 'true' : 'false'; ?>" aria-controls="collapseOne<?= $k ?>">
                                            <?= $d['guild-title'] ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne<?= $k ?>" class="collapse <?= ($k==0) ? 'show' : ''; ?>" aria-labelledby="headingOne<?= $k ?>" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="faq-card-img">
                                            <img src=" <?= $d['guild-image']['url'] ?>" alt="<?= $d['guild-title'] ?>">
                                        </div>
                                        <div class="faq-card-content">
                                            <p><?= $d['guild-desc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cap-faq-img">
                        <img src="<?= $options['sport-guild-image']['url'] ?>" class="main-img" alt="<?= $options['sport-guild-main-title'] ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/images/faq_round_shape.png" alt="shape" class="faq-round-shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- custom-order-area -->
    <section class="custom-order-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="custom-order-title">
                        <span class="sub-title"><?= $options['sport-support-subtitle'] ?></span>
                        <h3 class="title"><?= $options['sport-support-main-title'] ?></h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="custom-order-btn">
                        <a href="tel:<?= str_replace(' ','',$options['sport-support-hotline']); ?>"
                           class="btn capsule-btn">Hotline <span><?= $options['sport-support-hotline'] ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- custom-order-area-end -->

    <!-- testimonial-area -->
    <section id="feedbacks" class="testimonial-area pt-120 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="capsule-section-title text-center mb-50">
                        <span class="sub-title"><?= $options['sport-comment-subtitle'] ?></span>
                        <h2 class="title"><?= $options['sport-comment-main-title'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row testimonial-active">
                <?php
                    $listComment = $options['list-sport-comment'];
                ?>
                <?php foreach($listComment as $d): ?>
                <div class="col-xl-6">
                    <div class="testimonial-item">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="testimonial-content">
                            <p><?= $d['comment-content'] ?></p>
                        </div>
                        <div class="testi-avatar-wrap">
                            <div class="testi-avatar-thumb">
                                <img src="<?= $d['comment-image']['url'] ?>" alt="<?= $d['comment-name'] ?>">
                            </div>
                            <div class="testi-avatar-info">
                                <h5><?= $d['comment-name'] ?></h5>
                                <span><?= $d['comment-desc'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->


</main>
<!-- main-area-end -->


<!-- footer-area -->
<footer class="footer-area footer-style-two">
    <div class="footer-top-wrap">
        <div class="container">
            <div class="info-company">
                <h3><?= $options['sport-footer-subtitle'] ?></h3>
                <H4><?= $options['sport-footer-main-title'] ?></H4>
                <ul>
                    <li><i class="fal fa-map-marker"></i> Địa chỉ : <?= $options['sport-footer-address'] ?></li>
                    <li><i class="fal fa-phone-plus"></i> Điện thoại : <?= $options['sport-footer-phone'] ?></li>
                    <li><i class="fal fa-envelope"></i> Email : <?= $options['sport-footer-email'] ?></li>
                    <li><i class="fal fa-globe"></i> Website : <?= $options['sport-footer-website'] ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text">
                        <p>Copyright By @ <a href="https://bcemedical.com">bcemedical.com</a> - 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->





<!-- JS here -->
<script src="<?= get_template_directory_uri() ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.easypiechart.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.mCustomScrollbar.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.inview.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.parallaxScroll.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.easing.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/validator.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/nav-tool.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/slick.min.js"></script>

<script src="<?= get_template_directory_uri() ?>/assets/js/wow.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".btn-add-shop").click(function (e) {
            e.preventDefault();
            let _this = $(e.currentTarget);
            let price = _this.attr('data-price');
            let qty = _this.attr('data-qty');
            $('#priceChange').html(price);
            $('#dungtichChange').html(qty);
            $('#spname').val('Kem Takjoa Sports loại '+qty);
        })
    });
</script>

</body>
</html>