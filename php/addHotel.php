<?php
// Database connection
include 'db_connect.php';

$isAdded = false;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables to hold form data
    $hotelName = $_POST['hotelName'];
    $hotelOwnerName = $_POST['hotelOwnerName'];
    $hotelOwnerNumber = $_POST['hotelOwnerNumber'];
    $hotelEmail = $_POST['hotelEmail'];
    $hotelLocation = $_POST['hotelLocation'];
    $description = $_POST['description'];
    $hotelImage = $_FILES['hotelImage'];


    // Directory where images will be saved
    $uploadDir = '../Assets/Hotels/';
    // Generate a unique name for the uploaded file
    $uploadFile = $uploadDir . basename($hotelName) . '_' . time() . '.' . pathinfo($hotelImage['name'], PATHINFO_EXTENSION);
    // Check if the upload directory exists, if not, create it
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Check if file was uploaded successfully
    if ($hotelImage['error'] === UPLOAD_ERR_OK) {
        // Validate and move the uploaded file
        if (move_uploaded_file($hotelImage['tmp_name'], $uploadFile)) {
            // Prepare SQL statement to insert data into the hotels table
            $stmt = $conn->prepare("INSERT INTO hotels (hotelName, hotelOwnerName, hotelOwnerNumber, hotelEmail, hotelLocation, description, hotelImage) VALUES (?, ?, ?, ?, ?, ?, ?)");
            // Bind parameters
            $uploadFile = substr($uploadFile, 3);
            $stmt->bind_param("sssssss", $hotelName, $hotelOwnerName, $hotelOwnerNumber, $hotelEmail, $hotelLocation, $description, $uploadFile);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Hotel added successfully.";
                $isAdded = true;
            } else {
                echo "Error: " . $conn->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File upload error: " . $hotelImage['error'];
    }
} else {
    echo "Invalid request method.";
}

// Close connection
$conn->close();

header("Location: ../Admin Pages/index.php?isAddedHotel=" . ($isAdded ? 'true' : 'false'));
exit();
