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
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventLocation = $_POST['eventLocation'];
    $eventMapLocation = $_POST['eventMapLocation'];
    $eventDesc = $_POST['eventDesc'];
    $EventImage = $_FILES['imageURL'];

    // Directory where images will be saved
    $uploadDir = '../Assets/Events/';
    // Generate a unique name for the uploaded file
    $uploadFile = $uploadDir . basename($eventName) . '_' . time() . '.' . pathinfo($EventImage['name'], PATHINFO_EXTENSION);
    // Check if the upload directory exists, if not, create it
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Check if file was uploaded successfully
    if ($EventImage['error'] === UPLOAD_ERR_OK) {
        // Validate and move the uploaded file
        if (move_uploaded_file($EventImage['tmp_name'], $uploadFile)) {
            // Prepare SQL statement to insert data into the events table
            $stmt = $conn->prepare("INSERT INTO events (eventName, eventDate, eventLocation, eventMapLocation, eventDesc, imageURL) VALUES (?, ?, ?, ?, ?, ?)");
            // Bind parameters
            $uploadFile = substr($uploadFile, 3);
            $stmt->bind_param("ssssss", $eventName, $eventDate, $eventLocation, $eventMapLocation, $eventDesc, $uploadFile);

            // Execute the statement
            if ($stmt->execute()) {
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
        echo "File upload error: " . $EventImage['error'];
    }
} else {
    echo "Invalid request method.";
}

// Close connection
$conn->close();

// Redirect with status
header("Location: ../Admin Pages/index.php?isAddedEvent=" . ($isAdded ? 'true' : 'false'));
exit();
