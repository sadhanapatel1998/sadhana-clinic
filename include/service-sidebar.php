                <div class="service-details__sidebar">
                    <div class="service-details__services-box">
                        <h3 class="service-details__services-title">Our Services</h3>
                        <?php
                        $currentPage = basename($_SERVER['PHP_SELF']);

                        $services = [
                            "general-medicine.php" => "General Medicine",
                            "general-surgery.php" => "General Surgery",
                            "orthopaedics.php" => "Orthopaedics",
                            "obstetrics-gynaecology.php" => "Obstetrics & Gynaecology",
                            "laparoscopic-surgery.php" => "Laparoscopic Surgery",
                            "pathology.php" => "Pathology",
                            "physiotherapy.php" => "Physiotherapy",
                            "dental-care.php" => "Dental Care",
                        ];
                        ?>

                        <ul class="service-details__services-list list-unstyled">
                            <?php foreach ($services as $link => $name): ?>
                                <li class="<?= ($currentPage == $link) ? 'active' : ''; ?>">
                                    <a href="<?= $link; ?>">
                                        <?= $name; ?>
                                        <span class="fas fa-arrow-right"></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="service-details__get-started">
                        <h3 class="service-details__get-started-title">Connect with Our Specialists</h3>

                        <p class="service-details__get-started-text">
                            Get expert consultations and compassionate care for your healthcare needs.
                        </p>

                        <ul class="service-details__get-started-points list-unstyled">

                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <p><a href="tel:+919958170476">+91 99581 70476</a></p>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <p>
                                    <a href="mailto:poddarhospital@gmail.com">
                                        poddarhospital@gmail.com
                                    </a>
                                </p>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <p>
                                  <a href="https://maps.app.goo.gl/jTEHzxXpFrQZhbk76" target="_blank" rel="noopener noreferrer">  Poddar Nursing Home Pvt. Ltd. J-62 & 64, Patel Nagar-I, Ghaziabad – 201001, Uttar Pradesh, India</a>
                                </p>    
                            </li>

                        </ul>

                        <div class="service-details__get-started-btn-box">
                            <a href="contact-us.php" class="thm-btn">
                                <span class="fas fa-arrow-right"></span>
                                Book Appointment
                            </a>
                        </div>
                    </div>
                </div>