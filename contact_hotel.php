<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez Hôtel - Province Explorer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/conctact-hotel.css" />
  
</head>

<body>
    <!-- Header -->
   <header>
      <?php
  include 'navbar.php';
  ?>
</header>
    <!-- Hero Section avec Slider -->
    <section class="hero-slider">
        <div class="slides-container">
            <?php
            // Simuler des données d'hôtels pour le slider
            $hotelImages = [
                "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                "https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
            ];
             
            foreach ($hotelImages as $index => $image) {
                $activeClass = $index === 0 ? "active" : "";
                echo '<div class="slide ' . $activeClass . '">';
                echo '<img src="' . $image . '" alt="Hotel Image">';
                echo '</div>';
            }
            ?>
            <div class="slider-overlay"></div>
            <div class="slider-content">
                <h1>Explorer les hôtels de notre province de Midelt</h1>
            </div>
        </div>
        <div class="slider-controls">
            <?php
            foreach ($hotelImages as $index => $image) {
                $activeClass = $index === 0 ? "active" : "";
                echo '<div class="slider-dot ' . $activeClass . '" data-index="' . $index . '"></div>';
            }
            ?>
        </div>
    </section>
    
    <!-- Section Title -->
    <section id="title">
        <h1>Les hôtels de notre province</h1>
    </section>

    <!-- Section des Hôtels -->
    <div class="hotels-container">
        <div class="hotels-grid">
            <?php
            // Simuler des données d'hôtels pour la démo
            $hotels = [
                [
                    'hotelName' => 'Kasbah Midelt',
                    'hotelEmail' => 'contact@kasbahmidelt.com',
                    'hotelOwnerNumber' => '+212 6 12 34 56 78',
                    'hotelImage' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'Situé au cœur de Midelt, l\'hôtel Kasbah offre un cadre exceptionnel avec vue sur les montagnes de l\'Atlas. Avec ses chambres spacieuses et son service de qualité, c\'est l\'endroit idéal pour un séjour mémorable.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ],
                [
                    'hotelName' => 'Riad des Cèdres',
                    'hotelEmail' => 'reservation@riaddescedres.com',
                    'hotelOwnerNumber' => '+212 6 23 45 67 89',
                    'hotelImage' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'Le Riad des Cèdres est un havre de paix niché dans un écrin de verdure. Son architecture traditionnelle et son jardin luxuriant vous transporteront dans une ambiance sereine et authentique.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ],
                [
                    'hotelName' => 'Atlas Panorama',
                    'hotelEmail' => 'info@atlaspanorama.ma',
                    'hotelOwnerNumber' => '+212 6 34 56 78 90',
                    'hotelImage' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'Profitez d\'une vue imprenable sur les montagnes de l\'Atlas depuis l\'hôtel Atlas Panorama. Avec sa piscine chauffée, son spa et son restaurant gastronomique, votre séjour sera inoubliable.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ],
                [
                    'hotelName' => 'Oasis Midelt',
                    'hotelEmail' => 'contact@oasismidelt.com',
                    'hotelOwnerNumber' => '+212 6 45 67 89 01',
                    'hotelImage' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'L\'hôtel Oasis vous accueille dans un cadre verdoyant avec piscine et jardin tropical. Ses chambres modernes et confortables en font un choix idéal pour les voyageurs exigeants.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ],
                [
                    'hotelName' => 'Palais du Ziz',
                    'hotelEmail' => 'reservation@palaisduziz.com',
                    'hotelOwnerNumber' => '+212 6 56 78 90 12',
                    'hotelImage' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'Le Palais du Ziz combine luxe et tradition dans un cadre exceptionnel. Avec son architecture marocaine authentique et son service raffiné, il offre une expérience unique à ses hôtes.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ],
                [
                    'hotelName' => 'Résidence des Pommiers',
                    'hotelEmail' => 'info@residencepommiers.ma',
                    'hotelOwnerNumber' => '+212 6 67 89 01 23',
                    'hotelImage' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80',
                    'description' => 'Située au milieu des vergers de pommiers, cette résidence offre calme et sérénité. Ses appartements spacieux et équipés sont parfaits pour des séjours en famille ou entre amis.',
                    'hotelLocation' => 'https://goo.gl/maps/example'
                ]
            ];
            
            foreach ($hotels as $index => $hotel) {
                echo '<div class="hotel-card">';
                echo '<div class="image-container">';
                echo '<img src="' . $hotel['hotelImage'] . '" alt="' . $hotel['hotelName'] . '" />';
                echo '</div>';
                echo '<div class="hotel-content">';
                echo '<h3><span>H</span>otel ' . $hotel['hotelName'] . '</h3>';
                echo '<a href="mailto:' . $hotel['hotelEmail'] . '" class="hotel-email">';
                echo $hotel['hotelEmail'];
                echo '</a>';
                echo '<span class="hotel-phone">Tel: ' . $hotel['hotelOwnerNumber'] . '</span>';
                echo '<button class="show-more-btn">Voir plus</button>';
                echo '</div>';
                echo '<div class="more-info">';
                echo '<h4>' . $hotel['hotelName'] . '</h4>';
                echo '<p>' . $hotel['description'] . '</p>';
                echo '<a target="_blank" href="' . $hotel['hotelLocation'] . '" class="localisation-link">';
                echo '<i class="fas fa-map-marker-alt"></i> Voir sur la carte';
                echo '</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
     <footer>
        <?php 
            include 'includes/footer.html'; 
                $conn->close(); 
        ?>
  </footer>

  
    <script src="js/navbar.js"></script>
    <script src="js/contact_hotel.js"></script>
</body>
</html>