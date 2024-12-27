<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Mission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/notre-mission.css" />
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- NavBar Start -->
        <?php
        include 'includes/navbar.html';
        ?>
        <!-- NavBar End -->
    </header>
    <!-- Header End -->

    <section class="home" id="home">
        <div class="content">
            <h1>INFORMATION PRATIQUE</h1>
        </div>
    
        <div class="controls">
            <snap class="vid-btn active" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
            <snap class="vid-btn" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
            <snap class="vid-btn" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
        </div>
    
        <div class="video-container">
            <video src="Assets/videos/siteweb video.mp4" id="video-slider" loop autoplay muted></video>
            <p class="missionP1">
                 sur notre site web! Ici, vous trouverez des informations pratiques pour découvrir la province, avec son climat subtropical idéal entre mai et octobre, ses options d'hébergement variées et abordables, un réseau de transport terrestre exceptionnel, et de nombreuses agences de voyages prêtes à organiser des aventures sur mesure. Profitez pleinement de votre séjour grâce à ces conseils utiles et vivez une expérience inoubliable!
            </p>
        </div>
    </section>
   


    <div class="our-mission-container">
        <section class="our-mission2">
            <h1> 1- climat</h1>
            <p class="cptm_objectif">
                Découvrez la province et son climat subtropical chaud et humide toute l'année. Pour une expérience optimale, visitez entre mai et octobre, lorsque les températures sont idéales et invitent à l'exploration et à la détente. Ne manquez pas cette période parfaite pour découvrir tous les trésors de la région.
            </p>
            
            <h1>2- Hôtellerie</h1>
            <p class="cptm_objectif">
                La province vous accueille avec une variété d'options d'hébergement, allant des nads et auberges pittoresques aux hôtels confortables et aux charmantes maisons d'hôtes. En plus, les tarifs d'hébergement et de restauration sont abordables et conviennent à tous les budgets. Venez découvrir un séjour inoubliable sans vous ruiner!
            </p>
        </section>
        
        <section class="our-mission2">
            <h1>3- Transport Terrestre</h1>
            <p>&emsp; La province dispose d'un réseau remarquable de transport terrestre touristique, offrant diverses options pour tous, des 4x4 tout-terrain aux grands bus de 60 places. La Compagnie de Transport du Maroc (CTM) assure des trajets confortables et sécurisés entre les villes. Profitez de voyages sereins et découvrez les merveilles de la province!</p>
            <h1> 4- Agences de Voyages</h1>
            <p class="cptm_action">
            Les voyageurs en quête d'expériences sur mesure ne seront pas déçus, car la province regorge d'agences de voyages proposant une multitude de programmes adaptés à tous les goûts. Que ce soit pour des circuits préétablis ou des voyages personnalisés, les agents de voyages s'occupent de tous les détails : conseils avisés, accueil chaleureux, réservations, déplacements et transferts. Profitez de l'expertise des professionnels pour vivre des aventures uniques en leur genre.
</p>
        </section>
    </div>
 

    <!-- Footer -->
    <?php
    include 'includes/footer.html';
    ?>
</body>

</html>
