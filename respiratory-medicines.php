<?php
ob_start();
?>

<!-- Breadcrumb Start-->
<div class="vs-breadcrumb overflow-hidden">
    <div class="vs-breadcrumb__bg">
        <img src="assets/img/bg/breadcrumb-bg.jpg" alt="breadcrumb image">
    </div>
    <div class="container">
        <div class="vs-breadcrumb__content wow animate__fadeInUp" data-wow-delay="0.45s">
            <h1>Respiratory Medicines</h1>
            <div class="vs-breadcrumb__menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Respiratory Medicines</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Blog Part Start -->
<section class="vs-blog z-index-common space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="vs-blog__blogDpage">
                    <div class="blogDpage wow animate__fadeInUp" data-wow-delay="0.2s">

                        <div class="blog_img">
                            <img src="assets/img/service/respiratory.jpg" alt="Respiratory Medicine Consultation at Sadhana Clinic" loading="lazy">
                        </div>

                        <div class="blog_content">
                            <div class="blog-txt wow animate__fadeInUp" data-wow-delay="0.2s">

                                <h2>Expert Respiratory Care for Better Health & Wellness</h2>

                                <p>
                                    Respiratory Medicine at Sadhana Clinic focuses on comprehensive lung health care through
                                    accurate diagnosis, personalized treatment, and preventive care. Led by Senior Consultant
                                    Physician <strong>Dr. M. K. Singh</strong>, with over <strong>30 years of experience</strong>,
                                    we help patients manage asthma, chronic respiratory conditions, and long-term breathing
                                    concerns with confidence and compassionate medical support.
                                </p>

                                <p>
                                    Our patient-first approach combines evidence-based treatment with detailed health evaluations to
                                    ensure timely diagnosis and effective care. Whether you need routine lung function tests,
                                    preventive healthcare, or treatment for complex respiratory conditions, our goal is to help you
                                    achieve better health and lasting wellness.
                                </p>

                                <h3>Comprehensive Respiratory Care Services</h3>

                                <p>
                                    Our Respiratory Medicine services cover a wide range of lung health conditions, with a strong
                                    focus on early detection, personalized treatment plans, and long-term disease management for
                                    improved quality of life.
                                </p>

                                <ul>
                                    <li><i class="fa-solid fa-badge-check"></i> Comprehensive Lung Health Evaluations</li>
                                    <li><i class="fa-solid fa-badge-check"></i> Asthma & Bronchitis Management</li>
                                    <li><i class="fa-solid fa-badge-check"></i> COPD Diagnosis & Treatment</li>
                                    <li><i class="fa-solid fa-badge-check"></i> Cough & Breathlessness Care</li>
                                    <li><i class="fa-solid fa-badge-check"></i> Preventive Respiratory Check-ups</li>
                                </ul>

                                <h3>Conditions We Diagnose & Manage</h3>

                                <p>
                                    We provide expert care for a broad range of respiratory conditions using modern diagnostic
                                    methods, personalized consultations, and continuous follow-up to support long-term health and
                                    patient well-being.
                                </p>

                                <ul class="d-block">
                                    <li><i class="fa-solid fa-badge-check"></i> Diagnosis and management of asthma, COPD, and bronchitis with personalized treatment plans.</li>

                                    <li><i class="fa-solid fa-badge-check"></i> Expert care for chronic cough, breathlessness, and other lung health concerns.</li>

                                    <li><i class="fa-solid fa-badge-check"></i> Preventive healthcare, routine lung check-ups, and long-term wellness guidance for adults.</li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <?php include('include/service-sidebar.php');
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Blog Part End -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>
