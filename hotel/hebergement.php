<?php require_once(__DIR__ . '/header.php'); ?>

<main class="container-hebergement">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Hébergement</h1>
                    <div class="line"></div>
                    <p>Plongez dans une expérience de luxe ultime en choisissant l'une de nos chambres et suites luxueusement aménagées. Avec un design contemporain, des équipements haut de gamme et des vues à couper le souffle, nos chambres vous invitent dans un sanctuaire de détente où règnent repos et tranquillité.</p>
                </div>
            </div>
        </div>
       
       
       <?php
$rooms = [
    [
        'title' => 'Chambre Standard',
        'description' => 'Chambre avec lit double et vue sur le jardin. Wi-Fi, climatisation et salle de bain privée inclus.',
        'image' => 'assets/images/room1.jpg'
    ],
    [
        'title' => 'Chambre Deluxe',
        'description' => 'Chambre près de la piscine avec accès direct aux équipements. Idéale pour la détente.',
        'image' => 'assets/images/room2.jpg'
    ],
    [
        'title' => 'Suite Exécutive',
        'description' => 'Chambre spacieuse avec lit king-size et vue sur l\'océan. Minibar et télévision inclus.',
        'image' => 'assets/images/room3.jpg'
    ],
    [
        'title' => 'Suite Présidentielle',
        'description' => 'Suite avec balcon, deux lits queen et espace salon. Petit-déjeuner et Wi-Fi gratuits.',
        'image' => 'assets/images/room4.jpg'
    ],
    [
        'title' => 'Suite Ville',
        'description' => 'Suite pour les affaires avec espace de travail et vue sur la ville.',
        'image' => 'assets/images/room5.jpg'
    ],
    [
        'title' => 'Suite Jacuzzi',
        'description' => 'Suite avec jacuzzi privé et salon spacieux.',
        'image' => 'assets/images/room6.jpg'
    ]
];

?>



<div class="room-card-container" >
    <?php foreach ($rooms as $room): ?>
        <div class="room-card" data-aos="fade-up" data-aos-delay="350">
            <img src="<?php echo $room['image']; ?>" alt="<?php echo $room['title']; ?>">
            <div class="room-card-overlay">
                <h3><?php echo $room['title']; ?></h3>
                <p><?php echo $room['description']; ?></p>
                <button class="btn btn-brand ms-lg-3">Réserver Maintenant</button>    
            </div>
        </div>
    <?php endforeach; ?>
</div>
    </section>
</main>

<?php require_once(__DIR__ . '/footer.php'); ?>
