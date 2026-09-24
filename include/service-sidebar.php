                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);

                $services = [
                    ["title" => "Internal Medicine", "link" => "internal-medicine.php"],
                    ["title" => "Diabetes Care", "link" => "diabetes-care.php"],
                    ["title" => "Endocrine Disorders", "link" => "endocrine-disorders.php"],
                    ["title" => "Infectious Diseases", "link" => "infectious-diseases.php"],
                    ["title" => "Hypertension", "link" => "hypertension.php"],
                    ["title" => "Cardiovascular Medicines", "link" => "cardiovascular-medicines.php"],
                    ["title" => "Respiratory Medicines", "link" => "respiratory-medicines.php"],
                    ["title" => "Gastrointestinal Diseases", "link" => "gastrointestinal-diseases.php"],
                    ["title" => "General Medicine", "link" => "general-medicine.php"],
                ];
                ?>

                <div class="widget service-widget mt-4 mt-md-0">
                    <h3 class="wp-block-heading">Our Services</h3>

                    <nav class="services-nav wow animate__fadeInUp" data-wow-delay="0.2s">
                        <?php foreach ($services as $service): ?>
                            <a href="<?= $service['link']; ?>"
                                class="<?= $currentPage === $service['link'] ? 'active' : ''; ?>">
                                <i class="fa-solid fa-angles-right"></i>
                                <?= $service['title']; ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>