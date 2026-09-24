<?php include 'seo.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($pageMeta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageMeta['keywords']); ?>">
    <!-- Author -->
    <meta name="author" content="GoVacanzaDmc Travel & Tours">
    <!-- Robots -->
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">
    <!-- Canonical URL (Optional) -->
    <?php if (!empty($pageMeta['canonical'])): ?>
        <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
    <?php endif; ?>
    <!-- Page Title -->
    <title><?php echo htmlspecialchars($pageMeta['title']); ?></title>

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/site.webmanifest">

    <meta name="theme-color" content="#ffffff">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	  Google Fonts
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	    All CSS File
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--********************************
   		Code Start From Here 
	******************************** -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	    Preloader
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="preloader d-none">
        <button class="vsBtn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="content">
                <div class="pill">
                    <div class="medicine">
                        <i></i><i></i><i></i><i></i><i></i><i></i>
                        <i></i><i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="side top"></div>
                    <div class="side bottom"></div>
                </div>
            </div>
        </div>
    </div>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~
		Mobile Menu
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <div class="vs-header__right pt-4">
                <button class="vs-menu-toggle">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="mobile-logo">
                    <img src="assets/img/logo.png" alt="Sadhana Clinic Logo" class="logo">
                </div>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li><a href="about-us.php"> about Us</a> </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)"> service </a>
                        <ul class="sub-menu">
                            <li><a href="internal-medicine.php">Internal Medicine</a></li>
                            <li><a href="diabetes-care.php">Diabetes Care</a></li>
                            <li><a href="endocrine-disorders.php">Endocrine Disorders</a></li>
                            <li><a href="infectious-diseases.php">Infectious Diseases</a></li>
                            <li><a href="hypertension.php">Hypertension</a></li>
                            <li><a href="cardiovascular-medicines.php">Cardiovascular Medicines</a></li>
                            <li><a href="respiratory-medicines.php">Respiratory Medicines</a></li>
                            <li><a href="gastrointestinal-diseases.php">Gastrointestinal Diseases</a></li>
                            <li><a href="general-medicine.php">General Medicine</a></li>
                        </ul>
                    </li>

                    <!-- <li>
                      <a href="doctor.php"> Doctor </a>
                    </li> -->

                    <li>
                        <a href="gallery.php"> Gallery </a>
                    </li>
                    <li>
                        <a href="blogs.php"> Blogs </a>
                    </li>
                    <li>
                        <a href="contact-us.php">
                            contact Us
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>


    <?php require_once("include/header.php"); ?>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Main layout
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <main class="vs-main">
        <?= $content ?? ''; ?>
    </main>

    <?php require_once('include/footer.php') ?>
    <!--********************************
			Back To Top  
	******************************** -->
    <button class="back-to-top" id="backToTop" aria-label="Back to Top">
        <span class="progress-circle">
            <svg viewbox="0 0 100 100">
                <circle class="bg" cx="50" cy="50" r="40"></circle>
                <circle class="progress" cx="50" cy="50" r="40"></circle>
            </svg>
            <span class="progress-percentage" id="progressPercentage">0%</span>
        </span>
    </button>

    <!-- Floating Contact Buttons -->
    <!-- Floating Contact Dock -->
    <div class="contact-dock">
        <a href="tel:+919319953320" class="dock-item call" aria-label="Call Sadhana Clinic">
            <i class="fa-solid fa-phone-volume"></i>
            <span>Call Now</span>
        </a>

        <a href="https://wa.me/919319953320?text=Hello%20Sadhana%20Clinic,%20I%20would%20like%20to%20book%20an%20appointment."
            target="_blank"
            class="dock-item whatsapp"
            aria-label="WhatsApp Sadhana Clinic">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>
    <!--********************************
			Code End  Here 
	******************************** -->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        All Js File
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- WOW.js Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- GSAP -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper-bundle.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

    <script>
        document.querySelectorAll(".whatsapp-form").forEach(form => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const getValue = (name) => {
                    const field = form.querySelector(`[name="${name}"]`);
                    return field ? field.value.trim() : "";
                };

                // Detect both form structures
                const fullName = getValue("name") || `${getValue("fname")} ${getValue("lname")}`.trim();
                const email = getValue("email");
                const phone = getValue("phone");
                const subject = getValue("subject");
                const service = getValue("service");
                const message = getValue("message");

                const text =
                    `Hello Sadhana Clinic,

                     I would like to book an appointment.
                     
                     *Name:* ${fullName || "N/A"}
                     *Phone:* ${phone || "N/A"}
                     *Email:* ${email || "N/A"}
                     ${service ? `*Service:* ${service}\n` : ""}${subject ? `*Subject:* ${subject}\n` : ""}*Message:* ${message || "N/A"}`;

                window.open(
                    `https://wa.me/919319953320?text=${encodeURIComponent(text)}`,
                    "_blank"
                );
            });
        });
    </script>
    <script>
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },

            image: {
                titleSrc: 'alt'
            },

            removalDelay: 300,
            mainClass: 'mfp-fade'
        });
    </script>
</body>

</html>