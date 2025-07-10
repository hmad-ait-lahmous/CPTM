<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Pratique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/infoPratique.css" />
    
</head>

<body>
    <!-- Inclusion de la navbar -->
    <?php include 'includes/navbar.html'; ?>

    <section class="home" id="home">
        <div class="content">
            <h1>INFORMATION PRATIQUE</h1>
        </div>
    
    
        <div class="video-container">
            <video src="Assets/videos/siteweb video.mp4" id="video-slider" loop autoplay muted></video>
            <div class="video-overlay"></div>
            <p class="missionP1">
                 Bienvenue sur notre site web! Ici, vous trouverez des informations pratiques pour découvrir la province, avec son climat subtropical idéal entre mai et octobre, ses options d'hébergement variées et abordables, un réseau de transport terrestre exceptionnel, et de nombreuses agences de voyages prêtes à organiser des aventures sur mesure. Profitez pleinement de votre séjour grâce à ces conseils utiles et vivez une expérience inoubliable!
            </p>
        </div>
    </section>
   
    <div class="our-mission-container">
        <h1 class="section-title">Informations Essentielles</h1>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-sun"></i> Climat
                </div>
                <div class="card-body">
                    <p>Découvrez la province et son climat subtropical chaud et humide toute l'année. Pour une expérience optimale, visitez entre mai et octobre, lorsque les températures sont idéales et invitent à l'exploration et à la détente. Ne manquez pas cette période parfaite pour découvrir tous les trésors de la région.</p>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-hotel"></i> Hôtellerie
                </div>
                <div class="card-body">
                    <p>La province vous accueille avec une variété d'options d'hébergement, allant des nads et auberges pittoresques aux hôtels confortables et aux charmantes maisons d'hôtes. En plus, les tarifs d'hébergement et de restauration sont abordables et conviennent à tous les budgets. Venez découvrir un séjour inoubliable sans vous ruiner!</p>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-bus"></i> Transport Terrestre
                </div>
                <div class="card-body">
                    <p>La province dispose d'un réseau remarquable de transport terrestre touristique, offrant diverses options pour tous, des 4x4 tout-terrain aux grands bus de 60 places. La Compagnie de Transport du Maroc (CTM) assure des trajets confortables et sécurisés entre les villes. Profitez de voyages sereins et découvrez les merveilles de la province!</p>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-map-marked-alt"></i> Agences de Voyages
                </div>
                <div class="card-body">
                    <p>Les voyageurs en quête d'expériences sur mesure ne seront pas déçus, car la province regorge d'agences de voyages proposant une multitude de programmes adaptés à tous les goûts. Que ce soit pour des circuits préétablis ou des voyages personnalisés, les agents de voyages s'occupent de tous les détails : conseils avisés, accueil chaleureux, réservations, déplacements et transferts.</p>
                </div>
            </div>
        </div>
        
        <div class="our-mission2">
            <h1><i class="fas fa-calendar-alt"></i> Meilleure Période de Visite</h1>
            <p class="cptm_objectif">
                La province bénéficie d'un climat subtropical avec des températures agréables toute l'année. Cependant, la période entre mai et octobre est idéale pour les visites touristiques. Pendant ces mois, vous profiterez de températures moyennes de 25-30°C, d'un ensoleillement généreux et de précipitations minimales. Cette période correspond également à la saison des festivals et événements culturels qui animent la région.
            </p>
        </div>
        
        <div class="our-mission2">
            <h1><i class="fas fa-concierge-bell"></i> Conseils pour votre Séjour</h1>
            <p class="cptm_action">
                Pour profiter pleinement de votre séjour dans notre province, nous vous recommandons de réserver votre hébergement à l'avance, surtout pendant la haute saison (juillet-août). Prévoyez des vêtements légers pour la journée et une veste pour les soirées plus fraîches. N'oubliez pas votre crème solaire, un chapeau et des lunettes de soleil. Pour les excursions, des chaussures confortables sont indispensables. Enfin, n'hésitez pas à consulter les agences locales pour organiser des expériences authentiques.
            </p>
        </div>
    </div>
 
    <!-- Inclusion du footer -->
    <?php include 'includes/footer.html'; ?>
    
 <script src="js/navbar.js"></script>
</body>
</html>