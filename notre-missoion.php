<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Mission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/notre-mission.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/navbar.css" />

</head>

<body>
    <!-- Header Start -->
  <header>
      <?php
  include './includes/navbar.html';
  require 'php/db_connect.php';
  ?>
  </header>
    <!-- Header End -->

    <section class="home" id="home">
        <div class="content">
            <h1>NOTRE MISSION</h1>
        </div>
    
        <!-- <div class="controls">
            <snap class="vid-btn active" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
            <snap class="vid-btn" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
            <snap class="vid-btn" data-src="Assets/videos/Sequence 02_1.mp4"></snap>
        </div> -->
    
        <div class="video-container">
            <video src="Assets/videos/siteweb video.mp4" id="video-slider" loop autoplay muted></video>
        </div>
        <p class="missionP">
            Le <span>C</span>onseil <span>P</span>rovinciale du <span>T</span>ourisme <span>M</span>idelt 
            <span>CPTM</span>
            joue un rôle clé dans l'élaboration et la mise
            en œuvre de la politique touristique de la région.
            En étroite collaboration avec les professionnels et les organismes 
            concernés par le tourisme, il se charge de créer et de promouvoir des
            produits touristiques. Cette mission s'effectue à la fois à l'échelle
            régionale et intercommunale,
            en coordination avec les structures locales établies à cet effet.
        </p>
    </section>

    
        <section class="mission">
            <h1> Notre mission</h1>
            
        </section>
        

    <div class="our-mission-container">
        <section class="our-mission1">
            <h1>Les objectifs de CPTM</h1>
            <ul class="cptm_objectif">
                <li>Encourager la découverte du patrimoine touristique régional à l'échelle nationale et internationale.</li>
                <li>Coordonner et superviser des projets collaboratifs en favorisant le financement partagé.</li>
                <li>Mettre en place des stratégies innovantes pour promouvoir, communiquer et commercialiser les attraits touristiques.</li>
                <li>Accompagner et soutenir activement les acteurs locaux du tourisme.</li>
                <li>Développer et enrichir l'offre d'écotourisme en se concentrant sur la qualité et la diversité des expériences proposées.</li>
                <li>Valoriser et mettre en avant les spécificités et les charmes de l'offre touristique régionale.</li>
                <li>Renforcer les partenariats publics-privés en vue de dynamiser le secteur touristique.</li>
                <li>Concevoir et déployer des campagnes de communication ciblées pour toucher de nouveaux publics.</li>
                <li>Assurer une médiation efficace entre les professionnels du tourisme et les instances décisionnelles pour favoriser la prise de décision stratégique.</li>
            </ul>
        </section>
        
        <section class="our-mission2">
            <h1>Les actions de CPTM</h1>
            <p>&emsp; Les membres de PCT travaillent en étroite collaboration afin d'assurer une visibilité optimale pour la destination touristique de la province. Les plans d'action coordonnés se traduisent par des initiatives promotionnelles visant à stimuler le développement du tourisme provincial. Ces initiatives comprennent notamment :</p>
            <ul class="cptm_action">
                <li>Le développement d'activités de divertissement et de loisirs.</li>
                <li>L'amélioration de l'offre d'hébergement.</li>
                <li>La rénovation et la restauration des sites touristiques et des infrastructures.</li>
                <li>La supervision des études et des enquêtes statistiques relatives au secteur touristique.</li>
                <li>L'analyse de la fréquentation touristique et de l'offre existante.</li>
                <li>La formation des professionnels et la promotion des compétences.</li>
                <li>L'augmentation de la capacité d'accueil et de l'attrait touristique.</li>
                <li>L'organisation d'événements culturels et sportifs.</li>
            </ul>
        </section>
    </div>
    
    <section class="our-mission">
        <h1>La relation entre le CPT et le conseil régional de tourisme</h1>
        <p class="cpt_relation">
            &emsp;&emsp; Chaque province de la région dispose d'un Conseil Provincial du Tourisme, connu sous le nom de CPT. Il est chargé de mettre en œuvre les plans d'action au niveau de la province et de ses communes sous la supervision du conseil régional du tourisme, tout en remontant les réclamations et les retours d'expérience au CRT. <br> &emsp;
            Dans le Drâa-Tafilalet, cela concerne les CPT d'Errachidia, d'Ouarzazate, de Tinghir, de Zagora et de Midelt. Le CPT joue à la fois le rôle d'intermédiaire et de contrôleur. <br> &emsp; Son implication est essentielle dans la mise en œuvre des plans d'action au niveau provincial, et donc dans la réussite des stratégies régionales.
        </p>
    </section>

    <!-- Footer -->
    <?php
    include 'includes/footer.html';
    ?>
    <script src="js/navbar.js"></script>
</body>

</html>
