<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacter Au CPTM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/contacter-nous.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
  

  
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
  <main>
    <section class="home" id="home">
      <div class="content">
        <h1 id="cpt">CPT-Midetl</h1>
        <h1>Nous contacter</h1>
        <a href="#form"><button id="contact-btn">Formulaire de contact</button></a>
        <h4>Conseille Provincial de tourisme Midelt</h4>
      </div>
    </section>

  <div class="container">
        <div class="row">
            <div class="col-sm">
            <section class="contact_page">
                <h3 id="row_separate">Espace Client</h3>
                <div class="row1">
                    <img id="img_d" src="https://shorturl.at/V48y6" alt="Directeur">
                    <p id="img_d_p">
                        <span  id="d">Mohamed MIDELT</span> Directeur <br />
                        Une trentaine d’années au sein de <span id="cptm">CPTM</span>, qualifications variées,
                        il assure la coordination entre toutes les instances de la 
                        conseil, 
                        ainsi qu’une étroite collaboration avec le Conseil regional. 
                        Il assure le relais auprès de toutes les parties prenantes, 
                        comme il participe à la gestion et au suivi des projets entrepris en relation avec les tiers.
                        <br>
                        gamil: gmai@gmail.com
                    </p>
                </div>
                <div class="row">
                    <p id="img_d_p2">
                        <span id="d">Mohamed MIDELT</span> Directeur Adjoint<br />
                        5ans d’années au sein de <span id="cptm">CPTM</span>, qualifications variées,
                        il assure la coordination entre toutes les instances administral de la 
                        conseil.
                        tele: 06xxxxxxxxxx
                        <br>
                        gamil: gmai@gmail.com
                    </p>
                    <img id="img_d2" src="https://shorturl.at/V48y6" alt="Directeur">
                </div>

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
                    conseil provincial de tourisme Midelt<br />
                    Rue xxxxxxxxxxx - Midelt
                </p>
                <p id="link_to_cptm">
                    <a href="https://maps.app.goo.gl/VPB7a4JyLnHpP67K9" target="_blank">Voir sur Google Maps</a>
                </p>
           </section>

          </section >
    <!-- <section class="logo-img">
      <img src="Assets\conseil logo (BLACK TEXT).png" alt="">
            </section> -->
        </div>
            <div class="col-sm">
         
           <div class="toTop" >
           <section class="pop" id="form">
            <form action="php/StoreAdherent.php" method="post" class="formC" id="inscriptionForm">
                <h2>Contactez-nous</h2>
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
                 </section>
           </div>
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