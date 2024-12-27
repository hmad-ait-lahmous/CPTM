<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CPTM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />

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

  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="content">
      <h3>Espace des Professionnels du tourisme à Midelt !</h3>
      <p>Découvrez un espace conçu spécialement pour répondre à vos besoins et vous accompagner dans le développement de vos activités touristiques.</p>
      <a href="#ab" class="btn">Discover more</a>
    </div>

    <div class="controls">
      <snap class="vid-btn active" data-src="Assets/Slider/3.jpg"></snap>
      <snap class="vid-btn" data-src="Assets/Slider/4.jpg"></snap>
      <snap class="vid-btn" data-src="Assets/Slider/2.jpg"></snap>
      <snap class="vid-btn" data-src="Assets/Slider/1.jpg"></snap>
      <snap class="vid-btn" data-src="Assets/Slider/5.jpg"></snap>
      <snap class="vid-btn" data-src="Assets/Slider/6.jpg"></snap>
    </div>

    <div class="video-container">
      <img src="Assets/Slider/3.jpg" id="video-slider" loop autoplay muted></img>
    </div>
  </section>
  <!-- Home Section End -->

  <!-- PopOut Start -->
  <div class="onboarding-overlay"></div>

  <div class="onboarding-container">
    <div class="content container">
      <a class="skip-btn">Skip</a>

      <div class="row steps">
        <div class="col-md-4 step">
          <img src="Assets/Adherer.svg" alt="" class="img-fluid">
        </div>
        <div class="col-md-8 step">
          <h3>ADHÉRER AU CPTM</h3>
          <p>Vous pouvez maintenant adhérer au Conseil Provincial de Tourisme de tourisme.</p>
          <a target="_blank" href="formulaire.php">
            <button class="next-btn btn btn-success">ADHÉRER</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- PopOut End -->




  <!-- About us start -->
  <section class="aboutUs" id="quiSommeNous">
    <h1 class="heading">QUI SOMMES-NOUS</h1>
    <hr class="dt-divider-orange" style="display:block;">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <!-- logo -->
          <img src="Assets//Qui Somme Nous.png" alt="Conseil Provincial Tourisme Midelt Logo">
        </div>
        <div class="col-xl-6">
          <h1>Conseil Provincial Tourisme Midelt</h1>
          <p>
            Le Conseil Provincial du Tourisme Midelt , connu sous l'acronyme CPTM, constitue une association professionnelle sous la supervision de son propre conseil d'administration. Celui-ci est constitué de membres issus de trois catégories distinctes : les représentants des acteurs professionnels, les instances régionales élues, ainsi que les représentants des organismes publics. Ces entités forment les membres actifs et bénéficient de l'autorité nécessaire pour prendre ou approuver toutes les décisions pertinentes conformément aux objectifs définis par le CPT.
          </p>
        
        </div>
      </div>
    </div>
  </section>

  <!-- About us End -->

  <!-- gallery section start -->
  <section class="gallery" id="gallery">
    <h1 class="heading">GALLERY</h1>
    <hr class="dt-divider-orange" style="display:block;">

    <div class="box-container">
      <?php
      // Include the database connection file
      include 'php/db_connect.php';

      // Fetch rows from the 'gallery' table
      $sql = "SELECT imageName, imageURL FROM gallery";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          // Output HTML content for each row
          echo '<div class="box">';
          echo '<div class="image-container">';
          echo '<img src="' . $row['imageURL'] . '" alt="' . $row['imageName'] . '" />';
          echo '</div>';
          echo '<div class="content">';
          echo '<h3><span>' . substr($row['imageName'], 0, 1) . '</span>' . substr($row['imageName'], 1) . '</h3>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo "0 results";
      }

      // Close the database connection
      $conn->close();
      ?>
    </div>
  </section>
  <!-- gallery section end -->

  <!-- Contactez Hotel start -->
  <section class="contactezHotel">
    <h1 class="heading">CONTACTEZ HOTEL</h1>
    <hr class="dt-divider-orange" style="display:block;">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <h1>CONTACTEZ HOTEL</h1>
          <p>
            Dans le cadre de la stratégie du Conseil Régional du Tourisme de Midelt visant à présenter les établissements touristiques de la région, notre équipe s'emploie à fournir une infrastructure informationnelle exhaustive incluant les hôtels et autres infrastructures touristiques. L'objectif de cet effort est d'intégrer tous les acteurs dans le projet de numérisation des services touristiques dans la région, contribuant ainsi à améliorer l'expérience des visiteurs et à renforcer l'attrait touristique de Midelt.
          </p>
          <a href="#" class="btn">Lire Plus...</a>
        </div>
        <div class="col-xl-6">
          <!-- logo -->
          <img src="Assets/logo assets 3.png" alt="CONTACTEZ HOTEL">
        </div>

      </div>
    </div>
  </section>
  <!-- Contactez Hotel End -->

  <!-- Contactez Hotel start -->
  <section class="evenements">
    <h1 class="heading">EVENEMENTS</h1>
    <hr class="dt-divider-orange" style="display:block;">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <!-- Carousel -->
          <div id="eventCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#eventCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#eventCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <?php
              // Include the database connection file
              include 'php/db_connect.php';

              // Fetch hotel records from the database
              $sql = "SELECT * FROM events";
              $result = $conn->query($sql);

              // Check if there are any records
              $isFirst = true; // Initialize a flag to check the first item
              while ($row = $result->fetch_assoc()) {
                echo '
                <div class="carousel-item ' . ($isFirst ? 'active' : '') . '">
                <img src="' . $row['imageURL'] . '" class="d-block w-100" alt="Second slide">
                </div>
                ';
                $isFirst = false;
              }

              $conn->close();
              ?>
            </div>
            <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-xl-6">
          <h1>EVENEMENTS</h1>
          <p>
            La présentation des festivals et des événements organisés dans la région joue un rôle essentiel dans la création d'une dynamique touristique. C'est pourquoi le Conseil Régional du Tourisme s'engage activement à promouvoir ces événements à travers son site internet officiel. Découvrez la liste des festivals et des événements et profitez d'expériences uniques qui reflètent la culture et le patrimoine de la région.
          </p>
          <a href="#" class="btn">Lire Plus...</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contactez Hotel End -->


  <!-- Contact Us Start -->
  <!-- <div class="contact" id="contact">
    <h1 class="heading">VOTRE PROPOSITION</h1>
    <hr class="dt-divider-orange" style="display:block;">

    <div class="row">
      <div class="image">
        <img src="Assets/contact us.jpg" alt="" />
      </div>
      <form id="proposition" method="post" action="php/StoreProposition.php">
        <div class="inputBox">
          <input type="text" name="name" placeholder="name" required />
          <input type="email" name="email" placeholder="email" required />
        </div>
        <div class="inputBox">
          <input type="tel" name="number" placeholder="number" required />
          <input type="text" name="subject" placeholder="subject" required />
        </div>
        <textarea name="message" placeholder="message" cols="30" rows="10" required></textarea>
        <input type="submit" class="btn submit" value="send message" />
      </form>
    </div>
  </div> -->
  <!-- Contact Us End -->


  <?php
  include 'includes/footer.html';
  ?>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Js Script -->
  <script src="js/script.js"></script>
  <script src="js/PopOut.js"></script>
  <script src="js/alerts/propositionAdded.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>