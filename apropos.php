<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos - CPTM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/apropos.css">
   
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

    <section class="hero" id="home">
        <div class="hero-content">
            <!-- <h1>Espace des Professionnels du tourisme à Midelt</h1> -->
            <h1> A propos du conceil provincial du tourisme à Midelt</h1>
            <!-- <p>Découvrez un espace conçu spécialement pour répondre à vos besoins et vous accompagner dans le développement de vos activités touristiques.</p> -->
            <a href="#apropos" class="btn">En savoir plus</a>
        </div>
        <div class="controls">
              <span class="vid-btn " data-src="Assets/Slider/2.jpg"></span>
      <span class="vid-btn active" data-src="Assets/Slider/1.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/5.jpg"></span>
        </div>
    </section>

    <section class="apropos-section" id="apropos">
        <div class="apropos-container">
            <div class="apropos-text">
                <h1>CPTM à votre service</h1>
                <hr class="dt-divider-orange">
                <p class="aboutP">
                    Le <span>C</span>onseil <span>P</span>rovinciale du <span>T</span>ourisme <span>M</span>idelt, dit <span>CPTM</span>, est une association professionnelle 
                    administrée par son propre conseil d'administration. Ce dernier est composé 
                    des membres de trois collèges : les représentants des professionnels, les instances
                    provinciale élues, et les représentants des organismes publics. 
                    Ils formant les membres actifs et disposent de tous les pouvoirs pour prendre ou 
                    autoriser tous les actes incombant dans le cadre des objectifs qui ont été fixés au CPTM.
                </p>
                <div class="mission-values">
                    <div class="mission">
                        <h3><i class="fas fa-bullseye"></i> Notre Mission</h3>
                        <p>Promouvoir le développement touristique durable de la région de Midelt en créant des synergies entre les acteurs locaux et en valorisant les ressources naturelles et culturelles uniques de notre territoire.</p>
                    </div>
                    <div class="values">
                        <h3><i class="fas fa-star"></i> Nos Valeurs</h3>
                        <p>Engagement, Innovation, Collaboration, Développement durable, Excellence, Responsabilité</p>
                    </div>
                </div>
            </div>
            <div class="apropos-image">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Paysage de Midelt">
            </div>
        </div>
    </section>
    
    <section class="values-section">
        <div class="values-container">
            <h1>Nos valeurs fondamentales</h1>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Nous croyons en la force du travail collectif et des partenariats pour créer un écosystème touristique prospère.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Durabilité</h3>
                    <p>Nous nous engageons à promouvoir des pratiques touristiques respectueuses de l'environnement et des communautés locales.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Nous encourageons la créativité et l'innovation pour développer de nouvelles expériences touristiques uniques.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>Nous visons l'excellence dans tous nos services et soutenons nos membres pour offrir des expériences de qualité.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="timeline-section">
        <div class="timeline-container">
            <h1>Notre parcours</h1>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h3>Création du CPTM</h3>
                        <p>Fondation du Conseil Provincial du Tourisme de Midelt par un groupe de professionnels passionnés et d'acteurs locaux engagés.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-content">
                        <h3>Premier plan stratégique</h3>
                        <p>Lancement de notre premier plan stratégique quinquennal pour développer le tourisme durable dans la région de Midelt.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2016</div>
                    <div class="timeline-content">
                        <h3>Programme de certification</h3>
                        <p>Mise en place d'un programme de certification qualité pour les établissements touristiques locaux.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h3>Plateforme numérique</h3>
                        <p>Lancement de notre plateforme numérique pour connecter les professionnels et promouvoir la destination Midelt.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">
                        <h3>Nouveau siège social</h3>
                        <p>Inauguration de notre nouveau siège social moderne au cœur de Midelt, conçu comme un espace collaboratif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="administration-section">
        <div class="administration-container">
            <h1>Notre administration</h1>
            <div class="administration-content">
                <div class="administration-text">
                    <p>
                        Notre administration est composée d'experts passionnés par le développement touristique de la région de Midelt. 
                        Chaque membre apporte son expertise unique pour créer une dynamique positive et innovante dans notre secteur.
                    </p>
                    <p>
                        Nous croyons en une approche collaborative où chaque voix compte. Notre équipe travaille en étroite collaboration 
                        avec les acteurs locaux pour créer un écosystème touristique durable et bénéfique pour tous.
                    </p>
                    <p>
                        Notre conseil d'administration se réunit régulièrement pour discuter des stratégies, des projets en cours et des 
                        nouvelles opportunités de développement. Nous accordons une importance particulière à la formation continue de 
                        nos membres et à l'innovation dans nos approches.
                    </p>
                    <div class="stats">
                        <div class="stat-item">
                            <h3>15+</h3>
                            <p>Années d'expérience</p>
                        </div>
                        <div class="stat-item">
                            <h3>50+</h3>
                            <p>Membres actifs</p>
                        </div>
                        <div class="stat-item">
                            <h3>200+</h3>
                            <p>Projets réalisés</p>
                        </div>
                    </div>
                </div>
                <div class="administration-grid">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Président">
                        </div>
                        <div class="member-info">
                            <h3>Ahmed Benali</h3>
                            <p>Président</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Vice-Présidente">
                        </div>
                        <div class="member-info">
                            <h3>Fatima Zahra</h3>
                            <p>Vice-Présidente</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Directrice Marketing">
                        </div>
                        <div class="member-info">
                            <h3>Leila Amrani</h3>
                            <p>Directrice Marketing</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Responsable Projets">
                        </div>
                        <div class="member-info">
                            <h3>Karim Bouzidi</h3>
                            <p>Responsable Projets</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
  include 'includes/footer.html'; 
    $conn->close(); 
    ?>

     
  <script src="js/script.js"></script>
  <script src="js/navbar.js"></script>
</body>
</html>