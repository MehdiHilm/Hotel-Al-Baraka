<?php require_once(__DIR__ . '/header.php'); ?>

<!-- CONTACT -->
<section class="section-padding bg-dark text-light" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="contact-title">Contactez l'Hôtel Dar Al Baraka</h1>
                    <div class="line bg-light"></div>
                    <p class="contact-description">Nous sommes ravis de répondre à toutes vos questions. Contactez-nous pour en savoir plus sur nos chambres, nos services ou pour toute autre demande.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
            <div class="col-lg-8">
                <form action="#" class="row g-3 p-lg-5 p-4 bg-light theme-shadow rounded" style="opacity: 0.9; border-radius: 10px;">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" placeholder="Entrez votre prénom" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" class="form-control" placeholder="Entrez votre adresse e-mail" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" placeholder="Objet de votre demande" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea name="message" rows="5" class="form-control" placeholder="Entrez votre message" required></textarea>
                    </div>
                    <div class="form-group col-lg-12 d-grid">
                        <button class="btn btn-brand">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<div class="container-map" style="position: relative;"  data-aos="fade-up" data-aos-delay="150">
    <h4 class="text-emplacement">Notre Emplacement</h4>
    <div class="embed-responsive">
      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.140632669603!2d-7.999811984416451!3d31.616967981331093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee6f06500001%3A0xe99b2047266a60f!2sLa%20Mamounia!5e0!3m2!1sen!2sma!4v1693930132715!5m2!1sen!2sma" allowfullscreen></iframe>
    </div>
</div>

<?php require_once(__DIR__ . '/footer.php'); ?>
