<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
|--------------------------------------------------------------------------
| PAGE SEO - SADHANA CLINIC
|--------------------------------------------------------------------------
*/

$seoData = [

    /* Home */
    "index.php" => [
        "title" => "Sadhana Clinic | Senior Consultant Physician in Gurugram",
        "description" => "Sadhana Clinic in Sector 65, Gurugram offers expert Internal Medicine, Diabetes Care, Hypertension Treatment, Cardiovascular, Respiratory, Endocrine, and Gastrointestinal care by Dr. M. K. Singh with 30+ years of experience.",
        "keywords" => "Sadhana Clinic Gurugram, Senior Consultant Physician Gurugram, Internal Medicine Doctor Sector 65",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* About */
    "about-us.php" => [
        "title" => "About Sadhana Clinic | 30+ Years of Trusted Medical Care",
        "description" => "Learn about Sadhana Clinic in Gurugram, led by Dr. M. K. Singh, providing personalized healthcare, accurate diagnosis, and compassionate medical care with over 30 years of experience.",
        "keywords" => "About Sadhana Clinic, Dr M K Singh, Gurugram Physician",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Blogs */
    "blogs.php" => [
        "title" => "Health Blogs | Medical Tips & Wellness | Sadhana Clinic",
        "description" => "Read expert health tips on diabetes, blood pressure, preventive healthcare, and healthy living from Sadhana Clinic in Gurugram.",
        "keywords" => "health blog Gurugram, diabetes tips, blood pressure guide",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Contact */
    "contact-us.php" => [
        "title" => "Contact Sadhana Clinic | Book an Appointment in Gurugram",
        "description" => "Contact Sadhana Clinic in Sector 65, Gurugram to book an appointment with Senior Consultant Physician Dr. M. K. Singh for expert medical consultation.",
        "keywords" => "contact Sadhana Clinic, appointment Gurugram, physician consultation",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Gallery */
    "gallery.php" => [
        "title" => "Clinic Gallery | Sadhana Clinic Gurugram",
        "description" => "Explore Sadhana Clinic's facilities, consultation rooms, and patient-friendly healthcare environment in Gurugram.",
        "keywords" => "Sadhana Clinic gallery, Gurugram clinic photos",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Internal Medicine */
    "internal-medicine.php" => [
        "title" => "Internal Medicine Specialist in Gurugram | Sadhana Clinic",
        "description" => "Expert Internal Medicine consultation in Gurugram for fever, infections, chronic diseases, preventive care, and comprehensive adult healthcare.",
        "keywords" => "Internal Medicine Gurugram, physician consultation, adult healthcare",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Diabetes */
    "diabetes-care.php" => [
        "title" => "Diabetes Care in Gurugram | Sadhana Clinic",
        "description" => "Comprehensive diabetes care with blood sugar management, lifestyle guidance, and personalized treatment plans by experienced physicians.",
        "keywords" => "Diabetes doctor Gurugram, blood sugar management, diabetes treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Endocrine */
    "endocrine-disorders.php" => [
        "title" => "Endocrine Disorders Treatment in Gurugram | Sadhana Clinic",
        "description" => "Expert diagnosis and treatment for thyroid, hormonal, and endocrine disorders with personalized long-term care.",
        "keywords" => "Endocrine specialist Gurugram, thyroid treatment, hormonal disorders",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Infectious Diseases */
    "infectious-diseases.php" => [
        "title" => "Infectious Diseases Treatment in Gurugram | Sadhana Clinic",
        "description" => "Timely diagnosis and evidence-based treatment for bacterial, viral, and infectious diseases with preventive healthcare guidance.",
        "keywords" => "Infectious disease doctor Gurugram, viral infection treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Hypertension */
    "hypertension.php" => [
        "title" => "Hypertension Treatment in Gurugram | Sadhana Clinic",
        "description" => "Professional blood pressure management with regular monitoring, medication guidance, and lifestyle recommendations.",
        "keywords" => "Hypertension doctor Gurugram, blood pressure treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Cardiovascular */
    "cardiovascular-medicines.php" => [
        "title" => "Cardiovascular Care in Gurugram | Sadhana Clinic",
        "description" => "Expert cardiovascular consultation for heart health, preventive cardiac care, and long-term heart disease management.",
        "keywords" => "Cardiovascular doctor Gurugram, heart specialist, cardiac care",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Respiratory */
    "respiratory-medicines.php" => [
        "title" => "Respiratory Medicine in Gurugram | Sadhana Clinic",
        "description" => "Specialized care for asthma, breathing problems, respiratory infections, and lung health with personalized treatment.",
        "keywords" => "Respiratory doctor Gurugram, asthma treatment, lung care",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Gastrointestinal */
    "gastrointestinal-diseases.php" => [
        "title" => "Gastrointestinal Diseases Treatment in Gurugram | Sadhana Clinic",
        "description" => "Comprehensive diagnosis and treatment for digestive disorders, acidity, gastric problems, and gastrointestinal diseases.",
        "keywords" => "Gastrointestinal doctor Gurugram, digestive disorders treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* General Medicine */
    "general-medicine.php" => [
        "title" => "General Medicine Doctor in Gurugram | Sadhana Clinic",
        "description" => "Trusted General Medicine services for fever, infections, preventive healthcare, routine check-ups, and adult medical care.",
        "keywords" => "General physician Gurugram, General Medicine doctor",
        "canonical" => "",
        "robots" => "index, follow"
    ],

];

/*
|--------------------------------------------------------------------------
| DEFAULT META
|--------------------------------------------------------------------------
*/

$defaultMeta = [
    "title" => "Sadhana Clinic | Trusted Healthcare in Gurugram",
    "description" => "Sadhana Clinic provides expert Internal Medicine consultation, personalized healthcare, and compassionate treatment in Sector 65, Gurugram.",
    "keywords" => "Sadhana Clinic Gurugram, physician consultation",
    "canonical" => "",
    "robots" => "index, follow"
];

/*
|--------------------------------------------------------------------------
| META SELECTOR
|--------------------------------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;
?>