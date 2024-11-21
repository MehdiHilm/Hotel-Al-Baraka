<?php require_once(__DIR__ . '/header.php'); ?>

<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Hotel Al Baraka</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Découvrez la chaleur marocaine, un confort inégalé.</h5>
                </div>

                <!-- BOOKING FORM !-->         
<div class="container-booking" data-aos="zoom-in" data-aos-delay="150">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form class="d-flex booking-form align-items-center">
                
                        <!-- Check-In Field -->
                        <div class="input-container me-2">
                            <label for="checkin" class="form-label">Check In</label>
                            <input type="date" class="form-control booking-input" id="checkin" required>
                        </div>

                        <!-- Check-Out Field -->
                        <div class="input-container me-2">
                            <label for="checkout" class="form-label">Check Out</label>
                            <input type="date" class="form-control booking-input" id="checkout" required>
                        </div>

                        <!-- Number of Rooms Field -->
                        <div class="input-container me-2">
                            <label for="rooms" class="form-label">Nombre De Chambres</label>
                            <input type="number" class="form-control booking-input" id="rooms" placeholder="Nombre de Chambres" min="1" max="10" required>
                        </div>

                        <!-- Room Type Selection Field -->
                        <div class="input-container me-2">
                            <label for="roomType" class="form-label">Type De Chambre</label>
                            <select class="form-control booking-input" id="roomType" required>
                                <option value="" disabled selected>Type de Chambre</option>
                                <option value="standard">Chambre Standard</option>
                                <option value="deluxe">Chambre Deluxe</option>
                                <option value="suite">Suite Exécutive</option>
                                <option value="presidential">Suite Présidentielle</option>
                                <option value="presidential">Suite Ville</option>
                                <option value="presidential">Suite Jacuzzi</option>

                            </select>
                        </div>


                <!-- Book Now Button -->
                <button type="submit" class="btn btn-brand">Réserver Maintenant</button>
            </form>
        </div>
    </div>
</div>




            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Nos Services Premium</h1>
                    <div class="line"></div>
                    <p>Découvrez les services exceptionnels que nous proposons pour rendre votre séjour inoubliable.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <!-- Room Service -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150" >
                <div class="card service-card text-white">
                    <img src="assets\images\roomservice.jpg" class="card-img" alt="Room Service">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-room-service-fill fs-1 mb-3"></i>
                        <h5 class="card-title">Service en Chambre</h5>
                        <p class="card-text">Savourez de délicieux repas livrés directement dans votre chambre, à tout moment.</p>
                    </div>
                </div>
            </div>
            <!-- Spa and Wellness -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="250">
                <div class="card service-card text-white">
                    <img src="assets\images\spa.jpg" class="card-img" alt="Spa and Wellness">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-spa-fill fs-1 mb-3"></i>
                        <h5 class="card-title">Spa et Bien-être</h5>
                        <p class="card-text">Ressourcez-vous avec des soins de spa relaxants conçus pour apaiser votre corps et votre esprit.</p>
                    </div>
                </div>
            </div>
            <!-- Swimming Pool -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="350">
                <div class="card service-card text-white">
                    <img src="assets\images\pool.jpg" class="card-img" alt="Swimming Pool">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-swimming-fill fs-1 mb-3"></i>
                        <h5 class="card-title">Piscine</h5>
                        <p class="card-text">Détendez-vous et rafraîchissez-vous dans notre magnifique piscine extérieure.</p>
                    </div>
                </div>
            </div>
            <!-- Fitness Center -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="450">
                <div class="card service-card text-white">
                    <img src="assets\images\gym.jpg" class="card-img" alt="Fitness Center">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-fitness-fill fs-1 mb-3"></i>
                        <h5 class="card-title">Centre de Fitness</h5>
                        <p class="card-text">Restez actif grâce à nos installations de fitness modernes.</p>
                    </div>
                </div>
            </div>
            <!-- Concierge Service -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="550">
                <div class="card service-card text-white">
                    <img src="assets\images\concierge.jpg" class="card-img" alt="Concierge Service">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-concierge-bell-fill fs-1 mb-3"></i>
                        <h5 class="card-title">Service de Conciergerie</h5>
                        <p class="card-text">Notre équipe de conciergerie est prête à vous assister pour tous vos besoins de voyage.</p>
                    </div>
                </div>
            </div>
            <!-- Free WiFi -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="650">
                <div class="card service-card text-white">
                    <img src="assets\images\wifi.jpg" class="card-img" alt="Free WiFi">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <i class="ri-wifi-fill fs-1 mb-3"></i>
                        <h5 class="card-title">WiFi Haut Débit</h5>
                        <p class="card-text">Profitez d'une connexion WiFi haut débit gratuite dans tout l'hôtel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Rooms -->




    <!-- PORTFOLIO -->
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Aperçu des Chambres</h1>
                        <div class="line"></div>
                        <p>Découvrez nos chambres soigneusement conçues, chacune offrant un confort unique et un style raffiné pour votre séjour.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\one.jpg" alt="">
                        </div>
                        <a href="assets\images\one.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\two.jpg" alt="">
                        </div>
                        <a href="assets\images\two.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\three.jpg" alt="">
                        </div>
                        <a href="assets\images\three.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\four.jpg" alt="">
                        </div>
                        <a href="assets\images\four.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\five.jpg" alt="">
                        </div>
                        <a href="assets\images\five.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="portfolio-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="assets\images\six.jpg" alt="">
                        </div>
                        <a href="assets\images\six.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php require_once(__DIR__ . '/footer.php'); ?>