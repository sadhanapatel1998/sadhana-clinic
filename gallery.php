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
            <h1>Gallery</h1>
            <div class="vs-breadcrumb__menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- <section class="my-5 py-5">
    <p class="text-center">Our gallery will be available soon.</p>
</section> -->

<!-- Gallery Section Start -->
<section class="vs-gallery space bg-img-color">
    <div class="container">

        <div class="vs-title text-center animation-style2 mb-50">
            <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt=""> Our Gallery
            </p>
            <h2 class="vs-title__main title-anime">
                A Glimpse Inside Sadhana Clinic
            </h2>
        </div>

        <div class="gallery-grid popup-gallery">

            <a href="assets/img/gallery/gallery-1.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpeg" alt="Gallery 1">
            </a>

            <a href="assets/img/gallery/gallery-2.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpeg" alt="Gallery 2">
            </a>

            <a href="assets/img/gallery/gallery-3.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpeg" alt="Gallery 3">
            </a>

            <a href="assets/img/gallery/gallery-4.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpeg" alt="Gallery 4">
            </a>

            <a href="assets/img/gallery/gallery-5.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpeg" alt="Gallery 5">
            </a>

            <a href="assets/img/gallery/gallery-6.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpeg" alt="Gallery 6">
            </a>

            <a href="assets/img/gallery/gallery-7.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpeg" alt="Gallery 7">
            </a>

            <a href="assets/img/gallery/gallery-8.jpeg" class="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpeg" alt="Gallery 8">
            </a>

        </div>

    </div>
</section>
<!-- Gallery Section End -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>