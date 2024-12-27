<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact_hotel.css">
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

    <!-- Main Content -->
    <section class="main_back">
        <h1>Explorer les hotels de notre province de Midelt</h1>
    </section>
    <section id="title">
        <h1>Les hotels de notre province</h1>
    </section>

    <?php
    // Include the database connection file
    include 'php/db_connect.php';

    // Fetch hotel records from the database
    $sql = "SELECT * FROM hotels";
    $result = $conn->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Initialize counter
        $counter = 0;

        // Output each hotel record as HTML
        while ($row = $result->fetch_assoc()) {
            // Open a new row div every third hotel
            if ($counter % 3 == 0) {
                echo '<div class="row">';
            }

            // Output hotel HTML
            echo '<section class="hotels">';
            echo '<div class="hotel1-container">';
            echo '<div class="hotel1">';
            echo '<div class="image-container">';
            echo '<img src="' . $row['hotelImage'] . '" />';
            echo '</div>';
            echo '<div class="hotel1_content">';
            echo '<h3><span>H</span>otel ' . $row['hotelName'] . '</h3>';
            echo '<a href="mailto:' . $row['hotelEmail'] . '" style="text-transform: none;" class="hotel_email">';
            echo '<h4>' . $row['hotelEmail'] . '</h4>';
            echo '</a>';
            echo '<h4 style="font-size: 10px; font-weight: bold;">Tel: ' . $row['hotelOwnerNumber'] . '</h4>';
            echo '<button class="show-more-btn">show more</button>';
            echo '</div>';
            echo '<div class="more-info" style="display: none;">';
            echo '<h4>' . $row['hotelName'] . '</h4>' . $row['description'] . '<br>';
            echo '<a target="_blank" href="' . $row['hotelLocation'] . '" class="Localisation" style="text-decoration: none;">';
            echo '<h4>Direction</h4>';
            echo '</a>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</section>';

            // Close the row div every third hotel
            if (($counter + 1) % 3 == 0) {
                echo '</div>';
            }

            // Increment counter
            $counter++;
        }

        // Close the row div if the number of hotels is not a multiple of 3
        if ($counter % 3 != 0) {
            echo '</div>';
        }
    } else {
        echo '<div class="no-hotel-found">';
        echo '<h4>No Hotel Found!</h4>';
        echo '<p>We couldn\'t find any hotels. Please try again or check back later.</p>';
        echo '</div>';
    }

    // Close the database connection
    $conn->close();
    ?>



    <!-- Footer -->
    <?php
    include 'includes/footer.html';
    ?>

    <!-- JavaScript -->
    <script src="js\script.js"></script>
    <script src="js\contact-hotel.js"></script>
</body>

</html>