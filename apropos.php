<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/apropos.css" />
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- NavBar Start -->
        <?php include 'includes/navbar.html'; ?>
        <!-- NavBar End -->
    </header>
    <!-- Header End -->

    <section class="home" id="home">
        <div class="content">
            <h3>Espace des Professionnels du tourisme à Midelt !</h3>
            <p>Découvrez un espace conçu spécialement pour répondre à vos besoins et vous accompagner dans le développement de vos activités touristiques.</p>
            <a href="" class="btn">Discover more</a>
        </div>
        <div class="controls">
            <snap class="vid-btn active" data-src="Assets/Home pic.jpg"></snap>
            <snap class="vid-btn" data-src="Assets/img-1.jpg"></snap>
            <snap class="vid-btn" data-src="Assets/img-2.jpg"></snap>
            <snap class="vid-btn" data-src="Assets/img-3.jpg"></snap>
            <snap class="vid-btn" data-src="Assets/img-4.jpg"></snap>
        </div>
        <div class="video-container">
            <img src="Assets/Home pic.jpg" id="video-slider" loop autoplay muted></img>
        </div>
    </section>

    <section class="apropos ">
        <h1> CPTM a votre service</h1>
        <hr class="dt-divider-orange">
        <p class="aboutP">
            Le <span>C</span>onseil <span>P</span>rovinciale du <span>T</span>ourisme <span>M</span>idelt, dit <span>CPTM</span>, est une association professionnelle 
            administrée par son propre conseil d’administration. Ce dernier est composé 
            des membres de trois collèges : les représentants des professionnels, les instances
            provinciale élues, et les représentants des organismes publics. 
            Ils formant les membres actifs et disposent de tous les pouvoirs pour prendre ou 
            autoriser tous les actes incombant dans le cadre des objectifs qui ont été fixés au CPTM.
        </p>
        <img class="sideImg" src="Assets/conseil logo (BLACK TEXT).png" alt="CPTM logo">
    </section>
   <section class="corps-administrale">
    <h1>Notre administration:</h1>
    <P id="administration-menbers"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quibusdam qui dignissimos. Error aspernatur sapiente nemo cum accusamus provident, quasi natus vel dolores at blanditiis, ex corrupti consequatur tempore iusto. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatum rerum natus quasi, at deserunt earum reiciendis unde nam ad, deleniti amet ullam! Maxime voluptatum ullam commodi inventore deleniti Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci tempore, nam consequatur molestiae quo voluptatem. Veniam porro debitis modi eligendi at repellat a iure amet similique! Perspiciatis dolores enim non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit quae tenetur ut sint unde consequuntur odit, error porro ratione voluptate possimus consectetur praesentium, nulla fugiat doloremque exercitationem pariatur aperiam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur enim repellat fugiat laboriosam deserunt nostrum temporibus eligendi dolorem quas, non atque commodi placeat ullam, porro corporis saepe autem impedit optio.</P>

</section>
    <!-- Footer -->
    <?php include 'includes/footer.html'; ?>

</body>

</html>
