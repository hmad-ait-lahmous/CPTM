<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CPTM - Conseil Provincial Tourisme Midelt</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>
 
<body>
  
  <header>
      <?php
  include 'navbar.php';
  require 'php/db_connect.php';
  ?>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-content">
      <h1>Espace des Professionnels du tourisme à Midelt</h1>
      <p>Découvrez un espace conçu spécialement pour répondre à vos besoins et vous accompagner dans le développement de vos activités touristiques.</p>
      <a href="#about" class="btn">Découvrir plus <i class="fas fa-arrow-right"></i></a>
    </div>
    
    <div class="controls">
      <span class="vid-btn active" data-src="Assets/Slider/3.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/4.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/2.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/1.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/5.jpg"></span>
      <span class="vid-btn" data-src="Assets/Slider/6.jpg"></span>
    </div>
  </section>

  <!-- About Section -->
  <section class="about section-padding" id="quisomenous">
    <div class="container">
      <h2 class="heading">QUI SOMMES-NOUS</h2>
      
      <div class="about-content">
        <div class="about-img">
          <img src="./Assets/Qui Somme Nous.png" alt="Équipe CPTM">
        </div>
        
        <div class="about-text">
          <h2>Conseil Provincial Tourisme Midelt</h2>
          <p>Le Conseil Provincial du Tourisme Midelt, connu sous l'acronyme CPTM, constitue une association professionnelle sous la supervision de son propre conseil d'administration. Celui-ci est constitué de membres issus de trois catégories distinctes : les représentants des acteurs professionnels, les instances provincials élues, ainsi que les représentants des organismes publics.</p>
          <p>Ces entités forment les membres actifs et bénéficient de l'autorité nécessaire pour prendre ou approuver toutes les décisions pertinentes conformément aux objectifs définis par le CPT.</p>
          <a href="#" class="btn">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
<!-- Gallery Section -->
<section class="gallery section-padding" id="gallery">
    <div class="container">
        <h2 class="heading">GALERIE</h2>
        <p class="text-center" style="max-width: 800px; margin: 0 auto 4rem; font-size: 2rem;">
            Découvrez les plus beaux endroits de la province de Midelt
        </p>
        
        <?php
        // Include database connection
        
        
        // Fetch gallery items from database
        $sql = "SELECT * FROM gallery";
        $result = $conn->query($sql);
        ?>
        
        <div class="gallery-container">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="gallery-item">
                        <img src="<?= htmlspecialchars($row['imageURL']) ?>" alt="<?= htmlspecialchars($row['imageName']) ?>">
                        <div class="gallery-item-overlay">
                            <h3><?= htmlspecialchars($row['imageName']) ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <!-- Fallback content if no gallery items found -->
                <p class="text-center w-100">Aucune image disponible dans la galerie</p>
            <?php endif; ?>
        </div>
    </div>
    
 
</section>

  <!-- Hotels Section -->
  <?php
  // Fetch hotel records from the database
  $sql = "SELECT hotelImage FROM hotels";
  $result = $conn->query($sql);
  ?>
  <section class="hotels section-padding" id="hotels">
    <div class="container">
      <h2 class="heading">CONTACTEZ HÔTEL</h2>
      
      <div class="hotels-content">
        <div class="hotels-text">
          <p>Dans le cadre de la stratégie du Conseil Provincial du Tourisme de Midelt (cptm ) visant à présenter les établissements touristiques de la province, notre équipe s'emploie à fournir une infrastructure informationnelle exhaustive incluant les hôtels et autres infrastructures touristiques.</p>
          <p>L'objectif de cet effort est d'intégrer tous les acteurs dans le projet de numérisation des services touristiques dans la province, contribuant ainsi à améliorer l'expérience des visiteurs et à renforcer l'attrait touristique de Midelt.</p>
          <a href="contact_hotel.php" class="btn">Lire Plus <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <div class="hotels-img">
          <?php if ($result->num_rows > 0): ?>
          <div id="hotelsCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <?php 
              $first = true;
              while ($row = $result->fetch_assoc()): 
              ?>
              <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                <img src="<?php echo $row['hotelImage']; ?>" alt="Hôtel à Midelt">
              </div>
              <?php 
              $first = false;
              endwhile; 
              ?>
            </div>
            <a class="carousel-control-prev" href="#hotelsCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#hotelsCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <?php else: ?>
          <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Hôtel à Midelt">
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Events Section -->
  <?php
  
  // Fetch event records from the database
  $sql = "SELECT imageURL, eventName FROM events";
  $result = $conn->query($sql);
  ?>
  <section class="events section-padding" id="events">
    <div class="container">
      <h2 class="heading">ÉVÉNEMENTS</h2>
      
      <div class="events-content">
        <div class="events-carousel">
          <div id="eventsCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <?php 
              $first = true;
              if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()): 
              ?>
              <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                <img src="<?php echo $row['imageURL']; ?>" alt="<?php echo htmlspecialchars($row['eventName']); ?>">
              </div>
              <?php 
                $first = false;
                endwhile;
              else:
              ?>
              <div class="carousel-item active">
                <img src="./Assets/Events/Le Forum national de la pomme_1717546800.jpg" alt="Festival culturel">
              </div>
              <div class="carousel-item">
                <img src="./Assets/Events/FESTIVAL DES MUSIQUES DES CIMES D’IMILCHIL_1717546701.jpg" alt="Concert traditionnel">
              </div>
              <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#eventsCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#eventsCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <div class="events-text">
          <p>La présentation des festivals et des événements organisés dans la province joue un rôle essentiel dans la création d'une dynamique touristique. C'est pourquoi le Conseil Provincial du Tourisme s'engage activement à promouvoir ces événements à travers son site internet officiel.</p>
          <p>Découvrez la liste des festivals et des événements et profitez d'expériences uniques qui reflètent la culture et le patrimoine de la province.</p>
          <a href="events.php" class="btn">Voir les événements <i class="fas fa-calendar-alt"></i></a>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Footer -->
  <footer>
    <?php 
  include 'includes/footer.html'; 
    $conn->close(); 
    ?>
  </footer>

  <!-- PopOut -->
  <div class="onboarding-overlay"></div>
    <div class="onboarding-container">
      <div class="content">
        <a class="skip-btn">Passer</a>
        <div class="row steps">
          <div class="col-md-4 step">
            <img src="./Assets/Adherer.svg" alt="Adhérer" class="img-fluid">
          </div>
          <div class="col-md-8 step">
            <h3>ADHÉRER AU CPTM</h3>
            <p>Vous pouvez maintenant adhérer au Conseil Provincial de Tourisme de tourisme.</p>
            <a target="_blank" href="formulaire.php">
              <button class="next-btn btn">ADHÉRER</button>
            </a>
          </div>
      </div>
    </div>
  </div>
 
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="js/script.js"></script>
  <script src="js/PopOut.js"></script>
  <script src="js/navbar.js"></script>

</body>
</html>