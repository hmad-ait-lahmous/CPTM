<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Événements - Province Explorer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/events.css" />
</head>
<body>
    <!-- Header -->
   <header>
      <?php
  include './includes/navbar.html';
//   require 'php/db_connect.php';
  ?>
  </header>

    <!-- Hero Section -->
    <section class="hero-slider">
        <div class="slides-container">
            <?php
            include 'php/db_connect.php';
            
            // Fetch events for hero slider
            $heroSql = "SELECT imageURL FROM events LIMIT 4";
            $heroResult = $conn->query($heroSql);
            $heroImages = [];
            
            if ($heroResult->num_rows > 0) {
                while ($row = $heroResult->fetch_assoc()) {
                    $heroImages[] = $row['imageURL'];
                }
            } else {
                // Default images if no events found
                $heroImages = [
                    "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                    "https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                    "https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80",
                    "https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                ];
            }
             
            foreach ($heroImages as $index => $image) {
                $activeClass = $index === 0 ? "active" : "";
                echo '<div class="slide ' . $activeClass . '">';
                echo '<img src="' . $image . '" alt="Event Image">';
                echo '</div>';
            }
            ?>
            <div class="slider-overlay"></div>
            <div class="slider-content">
                <h1>Découvrez les événements de la province de Midelt</h1>
            </div>
        </div>
        <div class="controls">
            <?php
            foreach ($heroImages as $index => $image) {
                $activeClass = $index === 0 ? "active" : "";
                echo '<div class="slider-dot ' . $activeClass . '" data-index="' . $index . '"></div>';
            }
            ?>
        </div>
    </section>
    
    <!-- Section Title -->
    <section id="title">
        <h1>Les Événements</h1>
    </section>

    <!-- Events Section -->
    <div class="events-container">
        <div class="events-grid">
            <?php
            // Fetch event records from the database
            $sql = "SELECT * FROM events";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="event-card">';
                    echo '<div class="image-container">';
                    echo '<img src="' . $row['imageURL'] . '" alt="' . $row['eventName'] . '" />';
                    echo '</div>';
                    echo '<div class="event-content">';
                    echo '<div class="event-header">';
                    echo '<h3><span>É</span>' . $row['eventName'] . '</h3>';
                    echo '<span class="event-date-badge">' . date('Y-m-d', strtotime($row['eventDate'])) . '</span>';
                    echo '</div>';
                    echo '<span class="event-location"><i class="fas fa-map-marker-alt event-icon"></i>' . $row['eventLocation'] . '</span>';
                    echo '<button class="show-more-btn">Voir plus</button>';
                    echo '</div>';
                    echo '<div class="event-info">';
                    echo '<h4>' . $row['eventName'] . '</h4>';
                    echo '<p>' . $row['eventDesc'] . '</p>';
                    echo '<a target="_blank" href="' . $row['eventMapLocation'] . '" class="event-direction">';
                    echo '<i class="fas fa-map-marker-alt"></i> Voir sur la carte';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="no-event-found" style="grid-column: 1 / -1;">';
                echo '<h4>Aucun événement trouvé!</h4>';
                echo '<p>Nous n\'avons trouvé aucun événement à venir. Veuillez réessayer plus tard.</p>';
                echo '</div>';
            }
            
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include 'includes/footer.html'; ?>
    </footer>

    <script src="./js/script.js"></script>
    <script src="./js/events.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>