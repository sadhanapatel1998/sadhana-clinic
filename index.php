<?php
ob_start();
include('include/data.php');
?>

<!-- Hero Slider -->
<div class="swiper heroSlider">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <img src="assets/img/hero/banner-one.jpg" alt="Banner 1">
        </div>

        <div class="swiper-slide">
            <img src="assets/img/hero/banner-two.jpg" alt="Banner 1">
        </div>
    </div>

    <!-- Navigation -->
    <div class="hero-prev">
        <i class="fa-solid fa-chevron-left"></i>
    </div>

    <div class="hero-next">
        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <!-- Pagination -->
    <div class="hero-pagination"></div>
</div>



<!-- About Part Start-->
<section class="vs-about style2 space">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="abImg style2 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/about/about-img-h3.jpg" alt="image" loading="lazy">
                    <div class="vs-about__wrap">
                        <div class="ab-experience ">
                            <h1>25+</h1>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="circle">
                        <div class="circle-logo"><img src="assets/img/icons/Logo.png" alt="logo"></div>
                        <svg viewbox="0 0 100 100" class="rotating-svg">
                            <path id="circlePath" d="M 50,50 m -40,0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0" fill="transparent"></path>
                            <text>
                                <textpath href="#circlePath" startoffset="0%">
                                    we provide best services. since 2001.
                                </textpath>
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 ps-xl-5">
                <div class="vs-title home3 mb-35 mt-5 animation-style2">
                    <p class="vs-title__sub">
                        <img src="assets/img/icons/title-icon.svg" alt="Icon"> About Kliniko
                    </p>
                    <h2 class="vs-title__main title-anime">We Are Delivering Trusted Healthcare Anywhere</h2>
                </div>
                <div class="vs-about__right wow animate__fadeInUp" data-wow-delay="0.2s">
                    <p>Ambulant Home delivers reliable home-based medical care with skilled doctors, trained nurses, and
                        essential diagnostic support. Our services ensure comfort, convenience, and trustworthy treatment right
                        where patients feel safest.</p>
                    <div class="ab-Box">
                        <div class="question">
                            <h3>Have Any Question?</h3>
                            <p>ast, friendly, and reliable call support for any medical help you need.</p>
                            <div class="d-inline-flex align-items-center">
                                <div class="call-icon">
                                    <svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 30C0 13.4315 13.4315 0 30 0H50C55.5228 0 60 4.47715 60 10V30C60 46.5685 46.5685 60 30 60C13.4315 60 0 46.5685 0 30Z" fill="url(#paint0_linear_27581_27)"></path>
                                        <defs>
                                            <lineargradient id="paint0_linear_27581_27" x1="60" y1="30" x2="0" y2="30" gradientunits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#159AAF"></stop>
                                                <stop offset="1" stop-color="#5959EB"></stop>
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                    <i class="fa-solid fa-headphones"></i>
                                </div>
                                <p class="e-call"><span>Emergency Call</span> (000) 920-448-963</p>
                            </div>
                        </div>
                        <div>
                            <ul>
                                <li><i class="fa-solid fa-badge-check"></i> Trusted Healthcare Team</li>
                                <li><i class="fa-solid fa-badge-check"></i> Home-Based Medical Services</li>
                                <li><i class="fa-solid fa-badge-check"></i> Patient-Focused Approach</li>
                                <li><i class="fa-solid fa-badge-check"></i> Emergency & On-Call Assistance</li>
                            </ul>
                            <a href="about.html" class="vsBtn">Read More
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Part End-->

<!-- Service Part Start -->
<section class="vs-service style3 z-index-common space-top bg-img-color">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between d-sm-block">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> service <img src="assets/img/icons/title-icon.svg" alt="Icon" class="ps-1">
                </p>
                <h2 class="vs-title__main title-anime">Delivering Trusted Medical Care With Precision</h2>
            </div>
            <div class="vs-navigation style2">
                <div id="style5_prev" class="swiper-prevBtn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div id="style5_next" class="swiper-nextBtn">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="swiper" data-swiper="" data-xl="3" data-gap-xl="30" data-lg="2" data-nav-next="#style5_next" data-nav-prev="#style5_prev">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-service__img">
                            <img src="assets/img/service/ser-img-h3.jpg" alt="Image" class="serImg">
                            <div class="ser_icon">
                                <img src="assets/img/service/ser-h3-icon1.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="vs-service__txt">
                            <a href="service.html">
                                <h3>General Dental Checkup Services</h3>
                            </a>
                            <a href="service.html" class="ser_btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-service__img">
                            <img src="assets/img/service/ser-img1-h3.jpg" alt="Image" class="serImg">
                            <div class="ser_icon">
                                <img src="assets/img/service/ser-h3-icon2.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="vs-service__txt">
                            <a href="service.html">
                                <h3>Teeth Cleaning & Scaling Services</h3>
                            </a>
                            <a href="service.html" class="ser_btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-service__img">
                            <img src="assets/img/service/ser-img2-h3.jpg" alt="Image" class="serImg">
                            <div class="ser_icon">
                                <img src="assets/img/service/ser-h3-icon3.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="vs-service__txt">
                            <a href="service.html">
                                <h3>Dental Fillings And Restorations</h3>
                            </a>
                            <a href="service.html" class="ser_btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-service__img">
                            <img src="assets/img/service/ser-img1-h3.jpg" alt="Image" class="serImg">
                            <div class="ser_icon">
                                <img src="assets/img/service/ser-h3-icon1.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="vs-service__txt">
                            <a href="service.html">
                                <h3>General Dental Checkup Services</h3>
                            </a>
                            <a href="service.html" class="ser_btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Part End -->

<!-- Video Part Start-->
<div class="vs-video space bg-fixed" data-bg-src="assets/img/bg/video-h3-bg.jpg">
    <div class="container">
        <div class="video_btn text-center">
            <a href="https://www.youtube.com/watch?v=o8OgzQdA70c" class="play-btn popup-video">
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</div>
<!-- Video Part End-->

<!-- Process Part Start-->
<section class="vs-process space bg-img-color" data-bg-src="assets/img/service/proces-bg-h2.png">
    <div class="container">
        <div class="d-flex align-items-center justify-content-lg-between">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon"> Working Process
                </p>
                <h2 class="vs-title__main title-anime">How We Care for Your Smile Process</h2>
            </div>
            <p>Our step-by-step dental process is designed to deliver accurate diagnosis, effective treatment, and
                long-lasting oral health.</p>

        </div>
        <div class="vs-process_navigation">
            <div class="swiper processNav">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Step 1.</div>
                    <div class="swiper-slide">Step 2.</div>
                    <div class="swiper-slide">Step 3.</div>
                    <div class="swiper-slide">Step 4.</div>
                </div>
            </div>

            <div class="vs-navigation style2">
                <div class="swiper-prevBtn process-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="swiper-nextBtn process-next ">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="vs-process__wrap ">
            <div class="swiper processSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <img src="assets/img/service/proces-h3-img1.jpg" alt="Icon">
                            </div>
                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><img src="assets/img/service/pro-h3-icon1.svg" alt="Icon"></div>
                                        <span class="ser_number">01</span>
                                    </div>
                                    <div class="vs-service__txt">
                                        <a href="service.html">
                                            <h3>Book Appointment</h3>
                                        </a>
                                        <p>Easily schedule your dental visit online or by phone at a convenient time that fits your
                                            schedule
                                            perfectly, ensuring a smooth, stress-free, and comfortable start to your care.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <img src="assets/img/service/proces-h3-img2.jpg" alt="Image">
                            </div>
                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><img src="assets/img/service/pro-h3-icon2.svg" alt="Icon"></div>
                                        <span class="ser_number">02</span>
                                    </div>
                                    <div class="vs-service__txt">
                                        <a href="service.html">
                                            <h3>Dental Consultation</h3>
                                        </a>
                                        <p>Easily schedule your dental visit online or by phone at a convenient time that fits your
                                            schedule
                                            perfectly, ensuring a smooth, stress-free, and comfortable start to your care.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <img src="assets/img/service/proces-h3-img1.jpg" alt="Icon">
                            </div>
                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><img src="assets/img/service/pro-h3-icon1.svg" alt="Icon"></div>
                                        <span class="ser_number">03</span>
                                    </div>
                                    <div class="vs-service__txt">
                                        <a href="service.html">
                                            <h3>Book Appointment</h3>
                                        </a>
                                        <p>Easily schedule your dental visit online or by phone at a convenient time that fits your
                                            schedule
                                            perfectly, ensuring a smooth, stress-free, and comfortable start to your care.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <img src="assets/img/service/proces-h3-img2.jpg" alt="Image">
                            </div>
                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><img src="assets/img/service/pro-h3-icon2.svg" alt="Icon"></div>
                                        <span class="ser_number">04</span>
                                    </div>
                                    <div class="vs-service__txt">
                                        <a href="service.html">
                                            <h3>Dental Consultation</h3>
                                        </a>
                                        <p>Easily schedule your dental visit online or by phone at a convenient time that fits your
                                            schedule
                                            perfectly, ensuring a smooth, stress-free, and comfortable start to your care.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">

                                <img src="assets/img/service/proces-h3-img1.jpg" alt="Image">
                            </div>
                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><img src="assets/img/service/pro-h3-icon2.svg" alt="Icon"></div>
                                        <span class="ser_number">05</span>
                                    </div>
                                    <div class="vs-service__txt">
                                        <a href="service.html">
                                            <h3>Dental Consultation</h3>
                                        </a>
                                        <p>Easily schedule your dental visit online or by phone at a convenient time that fits your
                                            schedule
                                            perfectly, ensuring a smooth, stress-free, and comfortable start to your care.</p>
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
<!-- Process Part End-->

<!-- Appoint Part Start-->
<section class="vs-appoint style3 space" data-bg-src="assets/img/bg/appoint-bg-h3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="d-flex align-items-center justify-content-lg-between">
                    <div class="vs-title mb-0 animation-style2">
                        <p class="vs-title__sub text-white">
                            <img src="assets/img/icons/title-icon.svg" alt="Icon"> Appointment
                        </p>
                        <h2 class="vs-title__main title-anime text-white">Make An Appointment For Consulting</h2>
                    </div>
                    <div class="vs-appoint__box">
                        <div class="appoint-content">
                            <div class="appoint-icon">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                            <div class="appoint-txt">
                                <p><span>Call Us 24/7</span>(000) 920-448-963</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vs-appoint__form wow animate__fadeInUp" data-wow-delay="0.4s">
                    <form action="#">
                        <div class="appoint_form">
                            <input name="name" type="text" placeholder="your name">
                            <input name="email" type="text" placeholder="email address" required="">
                            <select>
                                <option>Select Department</option>
                                <option>Dental</option>
                                <option>Cardiology</option>
                                <option>Neurology</option>
                            </select>

                            <select>
                                <option>Select Doctor</option>
                                <option>Doctor One</option>
                                <option>Doctor Two</option>
                            </select>

                            <input type="date">

                            <div class="text-center">
                                <button class="appoint_btn">Make An Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appoint Part End-->

<!-- Doctors Part Start -->
<section class="vs-doctors style3 space">
    <div class="container">
        <div class="vs-title text-center animation-style2">
            <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> Our Expert Doctors <img src="assets/img/icons/title-icon.svg" alt="Icon" class="ps-1">
            </p>
            <h2 class="vs-title__main title-anime">Trusted Doctors Committed to Your Well-Being</h2>
        </div>

        <div class="vs-doctors__wrap">
            <div class="vs-doctors__wrap-content wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="doctor_img">
                    <div class="shape-circle"></div>
                    <div class="imgBox">
                        <a href="doctors.html"><img src="assets/img/doctors/dr-h3-img1.jpg" alt="Image" loading="lazy"></a>
                    </div>
                    <div class="social">
                        <button class="share"><i class="fa-solid fa-share-nodes"></i></button>
                        <ul>
                            <li> <a href="#"><i class="fa-brands fa-facebook-f"></i> </a></li>
                            <li> <a href="#"><i class="fa-brands fa-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="doctor_txt">
                    <a href="doctors.html">
                        <h3>Dr. Arman Hossain</h3>
                    </a>
                    <div class="dr-txt">
                        <p>Internal Medicine</p>
                    </div>
                </div>
            </div>
            <div class="vs-doctors__wrap-content wow animate__fadeInUp" data-wow-delay="0.3s">
                <div class="doctor_img">
                    <div class="shape-circle"></div>
                    <div class="imgBox">
                        <a href="doctors.html"><img src="assets/img/doctors/dr-h3-img2.jpg" alt="Image" loading="lazy"></a>
                    </div>
                    <div class="social">
                        <button class="share"><i class="fa-solid fa-share-nodes"></i></button>
                        <ul>
                            <li> <a href="#"><i class="fa-brands fa-facebook-f"></i> </a></li>
                            <li> <a href="#"><i class="fa-brands fa-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="doctor_txt">
                    <a href="doctors.html">
                        <h3>Dr. Sofia Rahman</h3>
                    </a>
                    <div class="dr-txt">
                        <p>Specialist – Cardiology</p>
                    </div>
                </div>
            </div>
            <div class="vs-doctors__wrap-content wow animate__fadeInUp" data-wow-delay="0.4s">
                <div class="doctor_img">
                    <div class="shape-circle"></div>
                    <div class="imgBox">
                        <a href="doctors.html"><img src="assets/img/doctors/dr-h3-img3.jpg" alt="Image" loading="lazy"></a>
                    </div>
                    <div class="social">
                        <button class="share"><i class="fa-solid fa-share-nodes"></i></button>
                        <ul>
                            <li> <a href="#"><i class="fa-brands fa-facebook-f"></i> </a></li>
                            <li> <a href="#"><i class="fa-brands fa-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="doctor_txt">
                    <a href="doctors.html">
                        <h3>Dr. Neil Chowdhury</h3>
                    </a>
                    <div class="dr-txt">
                        <p>Orthopedic & Trauma</p>
                    </div>
                </div>
            </div>
            <div class="vs-doctors__wrap-content wow animate__fadeInUp" data-wow-delay="0.5s">
                <div class="doctor_img">
                    <div class="shape-circle"></div>
                    <div class="imgBox">
                        <a href="doctors.html"><img src="assets/img/doctors/dr-h3-img4.jpg" alt="Image" loading="lazy"></a>
                    </div>
                    <div class="social">
                        <button class="share"><i class="fa-solid fa-share-nodes"></i></button>
                        <ul>
                            <li> <a href="#"><i class="fa-brands fa-facebook-f"></i> </a></li>
                            <li> <a href="#"><i class="fa-brands fa-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="doctor_txt">
                    <a href="doctors.html">
                        <h3>Dr. Farhana Zayed</h3>
                    </a>
                    <div class="dr-txt">
                        <p>Neurology Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Doctors Part End -->

<!-- Case Part Start -->
<section class="vs-case style3 z-index-common space-top bg-img-color" data-bg-src="assets/img/doctors/case-h3-overlay.svg">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-lg-between d-sm-block">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> case study
                </p>
                <h2 class="vs-title__main title-anime">Showcasing Our Medical Excellence</h2>
            </div>

            <a href="case.html" class="vsBtn">View More Projects
                <span></span>
            </a>
        </div>

        <div class="scroll-case">
            <div class="slide layer-1">
                <div class="vs-case__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="vs-case__img">
                        <div class="case_img">
                            <a href="case.html"><img src="assets/img/doctors/case-h3-img1.jpg" alt="Image"></a>
                        </div>
                    </div>
                    <div class="case_txt">
                        <span class="label">Pediatric</span>
                        <a href="case.html">
                            <h3>Smiles We’ve Transformed</h3>
                        </a>
                        <p>See how our dental expertise and advanced treatments have helped patients achieve healthier, more
                            confident smiles.</p>
                        <div class="readMore"><a href="case-details.html">read more</a></div>
                    </div>
                </div>
            </div>
            <div class="slide layer-2">
                <div class="vs-case__wrap wow animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="vs-case__img">
                        <div class="case_img">
                            <a href="case.html"><img src="assets/img/doctors/case-h3-img2.jpg" alt="Image"></a>
                        </div>
                    </div>
                    <div class="case_txt">
                        <span class="label">Dental</span>
                        <a href="case.html">
                            <h3>Smiles We’ve Transformed</h3>
                        </a>
                        <p>See how our dental expertise and advanced treatments have helped patients achieve healthier, more
                            confident smiles.</p>
                        <div class="readMore"><a href="case-details.html">read more</a></div>
                    </div>
                </div>
            </div>
            <div class="slide layer-3">
                <div class="vs-case__wrap wow animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="vs-case__img">
                        <div class="case_img">
                            <a href="case.html"><img src="assets/img/doctors/case-h3-img3.jpg" alt="Image"></a>
                        </div>
                    </div>
                    <div class="case_txt">
                        <span class="label">Pediatric</span>
                        <a href="case.html">
                            <h3>Smiles We’ve Transformed</h3>
                        </a>
                        <p>See how our dental expertise and advanced treatments have helped patients achieve healthier, more
                            confident smiles.</p>
                        <div class="readMore"><a href="case-details.html">read more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Part End -->

<!-- Testimoni Part Start -->
<section class="vs-testimoni z-index-common space space-extra-bottom">
    <div class="container">
        <div class="vs-title text-center animation-style2">
            <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> Testimonials
            </p>
            <h2 class="vs-title__main title-anime m-auto">Feedback & Review From Our Patient</h2>
        </div>

        <div class="vs-testimoni--style3">
            <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="vs-testimoni__img">
                    <div class="test_img">
                        <img src="assets/img/testimoni/testi-h3-img1.jpg" alt="Image">
                    </div>
                </div>
                <div class="test_txt">
                    <span class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </span>
                    <p>"Signs include unexplained increases in water bills, damp or moldy kind spots on walls or ceilings,
                        and the sound of running.”</p>
                    <div class="test-admin">
                        <h3>Sarah Johnson</h3>
                        <p>VecuroSoft</p>
                    </div>

                    <div class="test-icon">
                        <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                        <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                    </div>
                </div>
            </div>
            <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="vs-testimoni__img">
                    <div class="test_img">
                        <img src="assets/img/testimoni/testi-h3-img2.jpg" alt="Image">
                    </div>
                </div>
                <div class="test_txt">
                    <span class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </span>
                    <p>"Signs include unexplained increases in water bills, damp or moldy kind spots on walls or ceilings,
                        and the sound of running.”</p>
                    <div class="test-admin">
                        <h3>Sarah Johnson</h3>
                        <p>VecuroSoft</p>
                    </div>
                    <div class="test-icon">
                        <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                        <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimoni Part End -->

<!-- Blog Part Start -->
<section class="vs-blog style2 z-index-common space bg-img-color">
    <div class="container">

        <div class="d-flex align-items-center justify-content-lg-between">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> Blog & News
                </p>
                <h2 class="vs-title__main title-anime">Our Most Latest Health News & Articles</h2>
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

        <div class="swiper blogSlider" data-swiper="" data-xl="3" data-md="2" data-sm="1" data-nav-next="#style6_next" data-nav-prev="#style6_prev">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="blog_img">
                            <a href="blog.html"><img src="assets/img/blog/blog-h1-img1.jpg" alt="Image" loading="lazy"></a>
                            <p class="bdate style2"><span>16</span> Jan</p>
                        </div>
                        <div class="blog_content">
                            <div class="blog-meta">
                                <a href="#">
                                    <i class="fa-solid fa-user"></i> admin
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-comments"></i> (03) comments
                                </a>
                            </div>
                            <div class="blog-txt">
                                <a href="blog.html">
                                    <h3>Why Preventive Care Matters Most</h3>
                                </a>
                                <div class="blog-btn">
                                    <a class="readMore" href="blog.html">read more</a>
                                    <a class="blog-share" href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="blog_img">
                            <a href="blog.html"><img src="assets/img/blog/blog-h1-img2.jpg" alt="Image" loading="lazy"></a>
                            <p class="bdate style2"><span>16</span> Jan</p>
                        </div>
                        <div class="blog_content">
                            <div class="blog-meta">
                                <a href="#">
                                    <i class="fa-solid fa-user"></i> admin
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-comments"></i> (03) comments
                                </a>
                            </div>
                            <div class="blog-txt">
                                <a href="blog.html">
                                    <h3>Simple Tips for Daily Wellness</h3>
                                </a>
                                <div class="blog-btn">
                                    <a class="readMore" href="blog.html">read more</a>
                                    <a class="blog-share" href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vs-blog__wrap wow animate__fadeInUp" data-wow-delay="0.3s">
                        <div class="blog_img">
                            <a href="blog.html"><img src="assets/img/blog/blog-h1-img3.jpg" alt="Image" loading="lazy"></a>
                            <p class="bdate style2"><span>16</span> Jan</p>
                        </div>
                        <div class="blog_content">
                            <div class="blog-meta">
                                <a href="#">
                                    <i class="fa-solid fa-user"></i> admin
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-comments"></i> (03) comments
                                </a>
                            </div>
                            <div class="blog-txt">
                                <a href="blog.html">
                                    <h3>Understanding Common Health Risks</h3>
                                </a>
                                <div class="blog-btn">
                                    <a class="readMore" href="blog.html">read more</a>
                                    <a class="blog-share" href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                </div>
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