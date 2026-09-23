<?php
ob_start();
include('include/data.php');
?>

<!-- Breadcrumb Start-->
<div class="vs-breadcrumb overflow-hidden">
    <div class="vs-breadcrumb__bg">
        <img src="assets/img/bg/breadcrumb-bg.jpg" alt="breadcrumb image">
    </div>
    <div class="container">
        <div class="vs-breadcrumb__content wow animate__fadeInUp" data-wow-delay="0.45s">
            <h1>Blogs</h1>
            <div class="vs-breadcrumb__menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Part Start -->
<section class="vs-blog style2 z-index-common space bg-img-color">
    <div class="container">

        <div class="d-flex align-items-center justify-content-lg-between">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1">
                    Health Blog
                </p>

                <h2 class="vs-title__main title-anime">
                    Latest Health Tips & Medical Insights
                </h2>
            </div>

            <div id="style6_prev" class="vs-navigation style2">
                <div class="swiper-prevBtn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>

                <div id="style6_next" class="swiper-nextBtn">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="swiper blogSlider" data-swiper data-xl="3" data-md="2" data-sm="1" data-nav-next="#style6_next"
            data-nav-prev="#style6_prev">

            <div class="swiper-wrapper">

                <!-- Blog 1 -->
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.2s">

                        <div class="blog_img">
                            <a href="blogs.php">
                                <img src="assets/img/blog/blog-1.jpg" alt="Blog Image">
                            </a>

                            <p class="bdate style2">
                                <span>12</span> Feb
                            </p>
                        </div>

                        <div class="blog_content">
                            <div class="blog-txt">
                                <a href="blogs.php">
                                    <h3>How to Keep Your Blood Pressure Under Control</h3>
                                </a>
                                <p class="mt-3">
                                    Learn practical ways to control high blood pressure through healthy habits, balanced nutrition, regular exercise, and timely medical check-ups for better long-term heart health.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.3s">

                        <div class="blog_img">
                            <a href="blogs.php">
                                <img src="assets/img/blog/blog-2.jpg" alt="Blog Image">
                            </a>

                            <p class="bdate style2">
                                <span>25</span> Mar
                            </p>
                        </div>

                        <div class="blog_content">
                            <div class="blog-txt">
                                <a href="blogs.php">
                                    <h3>Everyday Habits That Help Manage Diabetes Better</h3>
                                </a>
                                <p class="mt-3">
                                    Discover simple daily habits that help manage diabetes, maintain healthy blood sugar levels, and support long-term wellness through lifestyle changes and regular medical guidance.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.4s">

                        <div class="blog_img">
                            <a href="blogs.php">
                                <img src="assets/img/blog/blog-3.jpg" alt="Blog Image">
                            </a>

                            <p class="bdate style2">
                                <span>08</span> Apr
                            </p>
                        </div>

                        <div class="blog_content">
                            <div class="blog-txt">
                                <a href="blogs.php">
                                    <h3>Simple Daily Habits for a Healthier Life</h3>
                                </a>

                                <p class="mt-3">
                                    Explore easy everyday habits that improve overall health, strengthen immunity, boost energy, and help you maintain a healthier lifestyle with preventive medical care.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- Blog Part End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>