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
    <section class="hero-area">
        <div class="hero-slider">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= get_template_directory_uri() ?>/front/img/slider/slider-bg-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="hero-text">
                                    <div class="hero-slider-caption ">
                                        <h5 data-animation="fadeInUp" data-delay=".2s">We are here for your care.</h5>
                                        <h1 data-animation="fadeInUp" data-delay=".4s">Best Care & Better Doctor.</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="hero-slider-btn">
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html" class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                                        <a data-animation="fadeInRight" data-delay="1.0s" href="https://www.youtube.com/watch?v=eXQgPCsd83c" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= get_template_directory_uri() ?>/front/img/slider/slider-bg-2in1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="hero-text">
                                    <div class="hero-slider-caption ">
                                        <h5 data-animation="fadeInUp" data-delay=".2s">We are here for your care.</h5>
                                        <h1 data-animation="fadeInUp" data-delay=".4s">Best Care & Better Doctor.</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="hero-slider-btn">
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html" class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                                        <a data-animation="fadeInRight" data-delay="1.0s" href="https://www.youtube.com/watch?v=eXQgPCsd83c" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->
    <!-- about-area start -->
    <section class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="medical-icon-brand-2">
                        <img src="<?= get_template_directory_uri() ?>/front/img/about/medical-brand-icon-border.png" alt="">
                    </div>
                    <div class="about-left-side pos-rel mb-30">
                        <div class="about-front-img">
                            <img src="<?= get_template_directory_uri() ?>/front/img/about/about-img.jpg" alt="">
                        </div>
                        <div class="about-shape">
                            <img src="<?= get_template_directory_uri() ?>/front/img/about/about-shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-right-side mb-30">
                        <div class="about-title mb-20">
                            <h5>Về chúng tôi</h5>
                            <h1>Đôi điều về Bce Medical</h1>
                        </div>
                        <div class="about-text">
                            <p>Với đội ngũ cán bộ giàu kinh nghiệm cùng với cách thức tổ chức hiệu quả, phương châm chất lượng, tiến độ và tận tình chu đáo với khách hàng,
                                BCE Việt Nam là nhà phân phối các sản phẩm Công nghệ Sinh học hàng đầu thế giới, cung cấp các giải pháp tổng thể về sinh học phân tử và tế
                                bào cho các dự án lớn, vừa và nhỏ tại các trường Đại học, Viện nghiên cứu, Bệnh viện… ở Hà Nội, TP HCM và các tỉnh, thành khác trên toàn quốc.</p>

                            <p>Song song đó, chúng tôi cung cấp dịch vụ kiểm tra và hiệu chuẩn pipet, máy ly tâm, PCR, máy quang phổ,…; thực hiện sửa chữa, bảo trì, bảo dưỡng
                                các thiết bị trong phòng thí nghiệm; tổ chức các khóa đào tạo trong và ngoài nước về các kỹ thuật tách tế bào bằng công nghệ hạt từ, nuôi cấy &
                                tăng sinh tế bào, nghiên cứu và tinh sạch protein, các kỹ thuật trong sinh học phân tử như: PCR, Realtime PCR, Western Blot,…</p>

                            <p>BCE Việt Nam cam kết mang lại những lợi ích tối đa cho khách hàng, lấy sự hài lòng thỏa mãn đến từ phía khách hàng đặt lên hàng đầu Cùng với
                                việc luôn luôn lắng nghe, thấu hiểu mọi phản hồi từ phía khách hàng để xây dựng nền móng vững chắc cho các hoạt động của công ty đảm bảo lợi
                                ích hài hoà giữa BCE Việt Nam, đối tác và khách hàng.</p>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->
    <!-- services-area start -->
    <section class="servcies-area gray-bg pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>Departments</h5>
                            <h1>Managed Your Heathcare Services</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service1.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Body Surgery</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service2.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Dental Care</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service3.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Eye Care</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service4.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Blood Cancer</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service5.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Neurology Sargery</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box text-center mb-30">
                        <div class="service-thumb">
                            <img src="<?= get_template_directory_uri() ?>/front/img/services/service6.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Allergic Issue</a></h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a class="service-link" href="services-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area end -->
    <!-- team-area start -->
    <section class="team-area pt-115 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>Our Team</h5>
                            <h1>A Professional & Care Provider</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="section-button text-right d-none d-lg-block pt-80">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html" class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member1.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Rosalina D. Williamson</h3>
                            <h6>Founder</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member2.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Diconda PIran Will</h3>
                            <h6>dentist</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member3.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Hulk M. Kenbon</h3>
                            <h6>neurologist</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member4.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Haliam Z. Dicolaz</h3>
                            <h6>Consultant</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member5.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Nicolas D. Case</h3>
                            <h6>dentist</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/team/member6.png" alt="">
                            <a class="team-link" href="doctor-details.html">+</a>
                        </div>
                        <div class="team-content">
                            <h3>Phumdon H. Norman</h3>
                            <h6>neurologist</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->
    <!-- fact-area start -->
    <section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="section-title pos-rel mb-45">
                        <div class="section-text section-text-white pos-rel">
                            <h5>We are available 24/7</h5>
                            <h1 class="white-color">We Always Ready For A Challenge.</h1>
                        </div>
                    </div>
                    <div class="section-button section-button-left mb-30">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html" class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-md-8">
                    <div class="cta-satisfied">
                        <div class="single-satisfied mb-50">
                            <h1>1M+</h1>
                            <h5> <i class="fas fa-user"></i> Satisfied Patients</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.</p>
                        </div>
                        <div class="single-satisfied mb-50">
                            <h1>100+</h1>
                            <h5><i class="far fa-thumbs-up"></i> World Awards</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-area end -->
    <!-- pricing-area start -->
    <section class="pricing-area gray-bg pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>Our Plans</h5>
                            <h1>Pricing &amp; Plans</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="pricing-menu f-right">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                   aria-selected="true">monthly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                   aria-selected="false">yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-1.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Professional</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-2.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Advanced</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-3.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Advantage</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-1.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Professional</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-2.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Advanced</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="pricing-box mb-30">
                                        <div class="pricing-thumb mb-45">
                                            <img src="<?= get_template_directory_uri() ?>/front/img/pricing/pricing-thumb-3.png" alt="">
                                        </div>
                                        <div class="pricing-content">
                                            <h1>Advantage</h1>
                                            <p>Ut enim ad minim veniam, quis istomw nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo.</p>
                                            <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>Price:
                                                $489.00</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area end -->
    <!-- cta-area start -->
    <section class="cta-area pos-rel pt-115 pb-120" data-background="<?= get_template_directory_uri() ?>/front/img/slider/slider-bg-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="cta-text text-center">
                        <div class="section-title pos-rel mb-50">
                            <div class="section-text section-text-white pos-rel">
                                <h5>Stay healthy & strong to enjoy life</h5>
                                <h1 class="white-color">Trust Us To Be There To Help All & Make Things Well Again.</h1>
                            </div>
                        </div>
                        <div class="section-button section-button-left">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html" class="btn btn-icon btn-icon-green ml-0"><span>+</span>get a consultant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area end -->
    <!-- latest-news-area start -->
    <section class="latest-news-area pt-115 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="<?= get_template_directory_uri() ?>/front/img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>News</h5>
                            <h1>Get Every Single Updates Here.</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="<?= get_template_directory_uri() ?>/front/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                    <div class="section-button text-right pt-80">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="blog.html" class="btn btn-icon ml-0"><span>+</span>our blog</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news-box mb-30">
                        <div class="latest-news-thumb mb-35">
                            <img src="<?= get_template_directory_uri() ?>/front/img/blog/blog-thumb-1.jpg" alt="">
                        </div>
                        <div class="latest-news-content">
                            <div class="news-meta mb-10">
                                <span><a href="#" class="news-tag">Medical,</a></span>
                                <span><a href="#" class="news-tag">Medicine</a></span>
                            </div>
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, cons ectetur adidis dicolo wiran.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna
                                aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news-box mb-30">
                        <div class="latest-news-thumb mb-35">
                            <img src="<?= get_template_directory_uri() ?>/front/img/blog/blog-thumb-2.jpg" alt="">
                        </div>
                        <div class="latest-news-content">
                            <div class="news-meta mb-10">
                                <span><a href="#" class="news-tag">Medical,</a></span>
                                <span><a href="#" class="news-tag">Medicine</a></span>
                            </div>
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, cons ectetur adidis dicolo wiran.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna
                                aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="recent-news-list mb-120">
                        <div class="latest-news-content singl-news news-border-bottom">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                        <div class="latest-news-content singl-news news-border-bottom">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                        <div class="latest-news-content singl-news ">
                            <h3><a href="news-details.html">Lorem ipsum dolor sit amet, consectetur adidis.</a></h3>
                            <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                            <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33 Comments</a></span>
                        </div>
                    </div>
                    <div class="mk-call-btn f-right mb-30">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="contact.html" class="btn btn-icon btn-icon-green ml-0">
                            <span><i class="fas fa-phone"></i></span>make call</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-news-area end -->

<?php
get_footer();