<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adherer Au CPTM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/formulaire.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
  
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
  <main>
    <section class="home" id="home">
      <div class="content">
        <h3>Nous contacter</h3>
      </div>
    
   
    
      <div class="video-container">
        <video src="Assets\videos\siteweb video.mp4" id="video-slider" loop autoplay muted></video>
      </div>
    </section>
  <div class="container">
  <div class="row">
    <div class="col-sm">
    <section class="contact_page">
      <h3>Espace Pro</h3>
      <p>
        Cher visiteur, <br />
        <br />
        N'hésitez pas à nous contacter pour toute question ou assistance dont
        vous pourriez avoir besoin. Que vous soyez un touriste, un membre de
        la presse ou un propriétaire d'hôtel, nous sommes là pour vous aider.
        Votre avis compte pour nous, et nous nous engageons à garantir votre
        satisfaction. Utilisez le formulaire ci-dessous pour partager vos
        préoccupations ou demandes. Nous avons hâte de vous entendre et de
        vous apporter notre soutien.
      </p>
      <section class="info_direct">
        <h3>Contacter nous directement sur:</h3>
        <ul>
          <li>Tél : +212 (0) 666 10 30 80</li>
          <li>Email : cptmidelt@gmail.com</li>
        </ul>
      </section>
      <section class="localisation">
        <h3>Notre localisation</h3>
        <p>
          conseil provincial de tourisme Midelt <br />
          Rue saada ait rebaa - Midelt
        </p>
        <img class="logo-img" src="Assets\conseil logo (BLACK TEXT).png" alt="LOGO">
      </section>
    </section >
    <!-- <section class="logo-img">
      <img src="Assets\conseil logo (BLACK TEXT).png" alt="">
    </section> -->
  </div>
    <div class="col-sm">
     
    <section class="pop" id="form">
      <form action="php/StoreAdherent.php" method="post" class="formC" id="inscriptionForm">
        <h2>Inscription</h2>
        <label for="nom">Nom complet:</label>
        <input type="text" name="nom" id="nom" placeholder="Enter your name" required /><br />

        <label for="email">Adresse email:</label>
        <input type="email" name="email" id="email" placeholder="Adresse email" required /><br />

        <label for="phone_number">Numero de téléphone:</label>
        <input type="tel" name="phone_number" id="phone_number" placeholder="Numero de téléphone" required /><br />

        <label for="type">Type:</label>
        <select name="type" id="type" required>
          <option value="" disabled selected>Select an option</option>
          <option value="Hotel Owner">Propriétaire de l'hôtel</option>
          <option value="investor">Investisseur</option>
          <option value="visitor">Visiteur</option>
          <option value="other">Other</option>
        </select>
        <br />

        <label for="sujet">Sujet:</label>
        <input type="text" name="sujet" id="sujet" placeholder="Sujet" required /><br />

        <label for="message">Message:</label>
        <textarea name="message" id="message" placeholder="Laisser votre message ici" cols="50" rows="7"></textarea>
        <input type="submit" value="Envoyer" />
      </form>

      <div class="summary" id="summary"></div>
      <div class="interaction" id="interaction"></div>
    </section>
    </div>
   
  </div>
</div>
  <!-- hhhhhhhhhhhhhhhhhh -->
 
   
  </main>

  <!-- Contact Us End -->
  <footer>
  <?php
  include 'includes/footer.html';
  ?>
  </footer>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="js/script.js"></script>
  <script src="js/formulaire.js"></script>
  <script src="js/alerts/adherentAdded.js"></script>
  <script src="js/navbar.js"></script>
</body>

</html>