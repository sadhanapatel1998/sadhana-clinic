<?php
ob_start();
include('include/data.php');
?>

<!-- Hero Slider -->
<div class="swiper heroSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/img/hero/banner-one.jpg" alt="Banner 1" class="desktop-banner">
            <img src="assets/img/hero/m-banner-one.jpg" alt="Banner 1" class="mobile-banner">
        </div>
        <div class="swiper-slide">
            <img src="assets/img/hero/banner-two.jpg" alt="Banner 1" class="desktop-banner">
            <img src="assets/img/hero/m-banner-two.jpg" alt="Banner 1" class="mobile-banner">
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
            <div class="col-xl-5 col-lg-12">
                <div class="abImg style2 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/about/about-img-h3.jpg" alt="image" loading="lazy">
                    <!-- <div class="vs-about__wrap">
                        <div class="ab-experience ">
                            <h1>25+</h1>
                            <p>Years of Experience</p>
                        </div>
                    </div> -->
                    <!-- <div class="circle">
                        <div class="circle-logo"><img src="assets/img/icons/Logo.png" alt="logo"></div>
                        <svg viewbox="0 0 100 100" class="rotating-svg">
                            <path id="circlePath" d="M 50,50 m -40,0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0" fill="transparent"></path>
                            <text>
                                <textpath href="#circlePath" startoffset="0%">
                                    we provide best services. since 2001.
                                </textpath>
                            </text>
                        </svg>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 ps-xl-5">
                <div class="vs-title home3 mb-25 mt-2 animation-style2">
                    <p class="vs-title__sub">
                        <img src="assets/img/icons/title-icon.svg" alt="Icon"> About Sadhana Clinic
                    </p>
                    <h2 class="vs-title__main title-anime">Expert Consultation for Better Health Every Day</h2>
                </div>

                <div class="vs-about__right wow animate__fadeInUp" data-wow-delay="0.2s">
                    <p>
                        Sadhana Clinic provides trusted and personalized medical care under the guidance of
                        <strong>Senior Consultant Physician Dr. M. K. Singh</strong>, with over
                        <strong>30 years of experience</strong>. We offer expert consultation, accurate diagnosis, and comprehensive treatment to help individuals and families achieve better health with confidence.
                    </p>

                    <div class="ab-Box">
                        <div class="question">
                            <h3>Need a Consultation?</h3>
                            <p>Get expert guidance for your health needs.</p>
                            <div class="d-inline-flex align-items-center">
                                <div class="call-icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 30C0 13.4315 13.4315 0 30 0H50C55.5228 0 60 4.47715 60 10V30C60 46.5685 46.5685 60 30 60C13.4315 60 0 46.5685 0 30Z" fill="url(#paint0_linear_27581_27)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_27581_27" x1="60" y1="30" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#159AAF" />
                                                <stop offset="1" stop-color="#5959EB" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <i class="fa-solid fa-headphones"></i>
                                </div>

                                <p class="e-call">
                                    <span>Call for Appointment</span> 9319953320
                                </p>
                            </div>
                        </div>

                        <div>
                            <ul>
                                <li><i class="fa-solid fa-badge-check"></i> Senior Consultant Physician Care</li>
                                <li><i class="fa-solid fa-badge-check"></i> Personalized Medical Consultation</li>
                                <li><i class="fa-solid fa-badge-check"></i> Accurate Diagnosis & Treatment</li>
                                <li><i class="fa-solid fa-badge-check"></i> Patient-Centered Healthcare</li>
                            </ul>

                            <a href="about-us.php" class="vsBtn">
                                Read More
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
<section class="vs-service z-index-common space bg" data-bg-src="assets/img/bg/case-h1-overlay.png">
    <div class="container">
        <div class="vs-title text-center animation-style2">
            <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1">
                Our Services
                <img src="assets/img/icons/title-icon.svg" alt="Icon" class="ps-1">
            </p>
            <h2 class="vs-title__main title-anime">
                Delivering Trusted Medical Care With Precision
            </h2>
        </div>
        <div class="swiper"
            data-swiper
            data-xl="3"
            data-gap-xl="30"
            data-nav-next="#style1_next"
            data-nav-prev="#style1_prev">
            <div class="swiper-wrapper">
                <?php foreach ($services as $service): ?>
                    <div class="swiper-slide vs-service--style5">
                        <div class="vs-service__wrap">
                            <div class="vs-service__img">
                                <img src="<?= $service['image']; ?>" alt="<?= $service['title']; ?>" class="serImg">
                                <div class="ser_icon">
                                    <i class="<?= $service['icon']; ?>"></i>
                                </div>
                            </div>
                            <div class="vs-service__txt">
                                <a href="<?= $service['link']; ?>">
                                    <h3><?= $service['title']; ?></h3>
                                </a>
                                <p><?= $service['desc']; ?></p>
                                <a href="<?= $service['link']; ?>" class="ser_btn">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="vs-navigation">
                <div id="style1_prev" class="swiper-prevBtn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div id="style1_next" class="swiper-nextBtn">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Part End -->

<!-- Choose Part Start-->
<section class="vs-choose space-top bg-title" data-bg-src="assets/img/bg/chose-h1-overImg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="vs-title animation-style2">
                    <p class="vs-title__sub text-white">
                        <img src="assets/img/icons/title-icon.svg" alt="Icon"> Why Choose Sadhana Clinic
                    </p>

                    <h2 class="vs-title__main title-anime text-white">
                        Personalized Healthcare Guided by Experience & Trust
                    </h2>
                </div>

                <div class="vs-choose__wrap">
                    <p class="text-white mb-40">
                        At Sadhana Clinic, we combine experienced physician care with a patient-first approach,
                        ensuring accurate diagnosis, personalized treatment, and compassionate medical support for every patient.
                    </p>

                    <div class="choose-content">
                        <div class="choose-icon">
                            <img src="assets/img/icons/choose-h1-icon1.svg" alt="Icon">
                        </div>

                        <div class="choose-txt">
                            <h3>Experienced Physician Consultation</h3>
                            <p>
                                Receive trusted medical guidance from an experienced Senior Consultant Physician with
                                personalized care for every health concern.
                            </p>
                        </div>
                    </div>

                    <div class="choose-content">
                        <div class="choose-icon">
                            <img src="assets/img/icons/choose-h1-icon2.svg" alt="Icon">
                        </div>

                        <div class="choose-txt">
                            <h3>Accurate Diagnosis & Treatment</h3>
                            <p>
                                We focus on timely evaluation, reliable diagnosis, and personalized treatment plans to
                                support long-term health and wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="chooseImg">
                    <img src="assets/img/about/why-choose.jpg" alt="Sadhana Clinic Consultation" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="vs-counter">
        <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="counter-txt">
                <h2><span class="counter-number" data-counter="30">30</span>+</h2>
                <h3>Years of Experience</h3>
            </div>
        </div>

        <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.3s">
            <div class="counter-txt">
                <h2><span class="counter-number" data-counter="98">98</span>%</h2>
                <h3>Patient Satisfaction</h3>
            </div>
        </div>

        <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.4s">
            <div class="counter-txt">
                <h2><span class="counter-number" data-counter="5">5</span>k+</h2>
                <h3>Patients Consulted</h3>
            </div>
        </div>

        <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.5s">
            <div class="counter-txt">
                <h2><span class="counter-number" data-counter="9">9</span>+</h2>
                <h3>Specialized Services</h3>
            </div>
        </div>
    </div>
</section>
<!-- Choose Part End-->

<!-- Process Part Start-->
<section class="vs-process bg-img-color" data-bg-src="assets/img/service/proces-bg-h2.png">
    <div class="container">

        <div class="d-flex align-items-center justify-content-lg-between">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon"> Working Process
                </p>

                <h2 class="vs-title__main title-anime">How We Care for Your Health</h2>
            </div>

            <p>Our simple consultation process ensures timely diagnosis, personalized treatment, and trusted care for every patient.</p>
        </div>

        <!-- Step Navigation -->
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

                <div class="swiper-nextBtn process-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <!-- Process Slider -->
        <div class="vs-process__wrap">
            <div class="swiper processSlider">
                <div class="swiper-wrapper">

                    <!-- Step 1 -->
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img"> <img src="assets/img/about/proces-1.jpg" alt="Icon"> </div>

                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">

                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><i class="fa-solid fa-calendar-check"></i></div>
                                        <span class="ser_number">01</span>
                                    </div>

                                    <div class="vs-service__txt">
                                        <a href="contact-us.php">
                                            <h3>Book Appointment</h3>
                                        </a>
                                        <p>Schedule your clinic visit online or by phone at a convenient time for a smooth start.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <div class="process-img"> <img src="assets/img/about/proces-2.jpg" alt="Icon"> </div>
                            </div>

                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">

                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><i class="fa-solid fa-user-doctor"></i></div>
                                        <span class="ser_number">02</span>
                                    </div>

                                    <div class="vs-service__txt">
                                        <a href="contact-us.php">
                                            <h3>Medical Consultation</h3>
                                        </a>
                                        <p>Our physician carefully evaluates your symptoms, reviews history, and understands your health concerns.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <div class="process-img"> <img src="assets/img/about/proces-3.jpg" alt="Icon"> </div>
                            </div>

                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">

                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><i class="fa-solid fa-stethoscope"></i></div>
                                        <span class="ser_number">03</span>
                                    </div>

                                    <div class="vs-service__txt">
                                        <a href="contact-us.php">
                                            <h3>Diagnosis & Evaluation</h3>
                                        </a>
                                        <p>Accurate assessment and required tests help identify your condition for better treatment decisions.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="process-img">
                                <div class="process-img"> <img src="assets/img/about/proces-4.jpg" alt="Icon"> </div>
                            </div>

                            <div class="vs-service">
                                <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">

                                    <div class="vs-service__icon">
                                        <div class="ser_icon"><i class="fa-solid fa-file-prescription"></i></div>
                                        <span class="ser_number">04</span>
                                    </div>

                                    <div class="vs-service__txt">
                                        <a href="contact-us.php">
                                            <h3>Treatment & Follow-Up</h3>
                                        </a>
                                        <p>Receive a personalized treatment plan with medications, lifestyle advice, and follow-up care.</p>
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
<section class="vs-appoint">
    <div class="container">
        <div class="vs-appoint--style2 bg-title" data-bg-src="assets/img/bg/appoint-overImg2-h1.svg">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="vs-appoint__wrap">
                        <div class="vs-title animation-style2">
                            <p class="vs-title__sub text-white">
                                <img src="assets/img/icons/title-icon.svg" alt="Icon"> Appointment
                            </p>
                            <h2 class="vs-title__main title-anime text-white">Make An Appointment For Consulting</h2>
                        </div>
                        <div class="vs-appoint__box wow animate__fadeInUp" data-wow-delay="0.3s">
                            <div class="appoint-content">
                                <div class="appoint-icon">
                                    <i class="fa-solid fa-headphones"></i>
                                </div>
                                <div class="appoint-txt">
                                    <p><span>Call Us 24/7</span><a href="tel:919910431665">+91 9910431665</a></p>
                                </div>
                            </div>
                            <div class="appoint-content">
                                <div class="appoint-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="appoint-txt">
                                    <p><span>Need Assistance?</span><a href="mailto:drmksingh2012@gmail.com">drmksingh2012@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="vs-appoint__form wow animate__fadeInUp" data-wow-delay="0.4s">
                        <form action="#">
                            <div class="appoint_form">
                                <input name="name" type="text" placeholder="your name">
                                <input name="email" type="text" placeholder="email address" required="">
                                <input name="phone" type="text" placeholder="phone number" required="">
                                <input name="subject" type="text" placeholder="Subject" required="">
                            </div>

                            <textarea name="message" placeholder="type your message"></textarea>

                            <div class="text-center mt-30">
                                <button class="appoint_btn">Make An Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appoint Part End-->

<!-- Testimoni Part Start -->
<section class="vs-testimoni z-index-common space">
    <div class="container">

        <div class="d-flex align-items-center justify-content-lg-between">
            <div class="vs-title animation-style2">
                <p class="vs-title__sub">
                    <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1">
                    Testimonials
                </p>
                <h2 class="vs-title__main title-anime">What Our Patients Say About Us</h2>
            </div>

            <div id="style3_prev" class="vs-navigation style2">
                <div class="swiper-prevBtn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div id="style3_next" class="swiper-nextBtn">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="swiper" data-swiper="" data-xl="3" data-gap-xl="30" data-nav-next="#style3_next" data-nav-prev="#style3_prev">
            <div class="swiper-wrapper">

                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-testimoni__img">
                            <div class="test_img">
                                <img src="assets/img/about/user-icon.png" alt="User Icon">
                            </div>
                            <div class="test-icon">
                                <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                                <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
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

                            <p>"The consultation was thorough and reassuring. The doctor explained everything clearly and suggested a treatment plan that truly helped me recover comfortably."</p>

                            <div class="test-admin">
                                <h3>Priya Sharma</h3>
                                <p>Gurugram</p>
                            </div>
                        </div>

                        <div class="gradient-border-corner"></div>
                        <div class="gradient-border-corner style2"></div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.3s">
                        <div class="vs-testimoni__img">
                            <div class="test_img">
                                <img src="assets/img/about/user-icon.png" alt="User Icon">
                            </div>
                            <div class="test-icon">
                                <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                                <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
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

                            <p>"I appreciated the patient-first approach and the detailed guidance I received during my visit. The clinic made me feel comfortable throughout the consultation."</p>

                            <div class="test-admin">
                                <h3>Rahul Verma</h3>
                                <p>Gurugram</p>
                            </div>
                        </div>

                        <div class="gradient-border-corner"></div>
                        <div class="gradient-border-corner style2"></div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="vs-testimoni__img">
                            <div class="test_img">
                                <img src="assets/img/about/user-icon.png" alt="User Icon">
                            </div>
                            <div class="test-icon">
                                <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                                <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
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

                            <p>"From booking the appointment to receiving treatment, the entire experience was smooth. The staff was polite, supportive, and always ready to help."</p>

                            <div class="test-admin">
                                <h3>Sunita Mehra</h3>
                                <p>Sector 65, Gurugram</p>
                            </div>
                        </div>

                        <div class="gradient-border-corner"></div>
                        <div class="gradient-border-corner style2"></div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="vs-testimoni__img">
                            <div class="test_img">
                                <img src="assets/img/about/user-icon.png" alt="User Icon">
                            </div>
                            <div class="test-icon">
                                <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                                <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
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

                            <p>"The clinic maintained excellent cleanliness and professionalism throughout my visit. I left feeling confident about my diagnosis and follow-up care."</p>

                            <div class="test-admin">
                                <h3>Amit Kapoor</h3>
                                <p>Gurugram</p>
                            </div>
                        </div>

                        <div class="gradient-border-corner"></div>
                        <div class="gradient-border-corner style2"></div>
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

        <div class="swiper blogSlider" data-swiper data-xl="3" data-md="2" data-sm="1" data-nav-next="#style6_next" data-nav-prev="#style6_prev">

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

                                <div class="blog-btn">
                                    <a class="readMore" href="blogs.php">Read More</a>
                                </div>
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

                                <div class="blog-btn">
                                    <a class="readMore" href="blogs.php">Read More</a>
                                </div>
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

                                <div class="blog-btn">
                                    <a class="readMore" href="blogs.php">Read More</a>
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