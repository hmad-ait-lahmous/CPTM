<?php
// Database connection
include 'db_connect.php';

// Initialize the flag
$isUpdated = false;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all expected POST variables are set
    if (isset($_POST['hotel_id'], $_POST['hotelName'], $_POST['hotelOwnerName'], $_POST['hotelOwnerNumber'], $_POST['hotelEmail'], $_POST['hotelLocation'], $_POST['description'])) {
        // Variables to hold form data
        $hotel_id = $_POST['hotel_id'];
        $hotelName = $_POST['hotelName'];
        $hotelOwnerName = $_POST['hotelOwnerName'];
        $hotelOwnerNumber = $_POST['hotelOwnerNumber'];
        $hotelEmail = $_POST['hotelEmail'];
        $hotelLocation = $_POST['hotelLocation'];
        $description = $_POST['description'];
        $hotelImage = isset($_FILES['hotelImage']) ? $_FILES['hotelImage'] : null;

        // Check if file was uploaded
        if ($hotelImage && $hotelImage['size'] > 0) {
            // Directory where images will be saved
            $uploadDir = '../Assets/Hotels/';
            // Generate a unique name for the uploaded file
            $uploadFile = $uploadDir . basename($hotelName) . '_' . time() . '.' . pathinfo($hotelImage['name'], PATHINFO_EXTENSION);
            // Check if the upload directory exists, if not, create it
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Validate the file type
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $fileType = mime_content_type($hotelImage['tmp_name']);

            if (!in_array($fileType, $allowedTypes)) {
                echo "Unsupported file type. Only JPG, PNG, and GIF files are allowed.";
                exit();
            }

            // Check if file was uploaded successfully
            if ($hotelImage['error'] === UPLOAD_ERR_OK) {
                // Validate and move the uploaded file
                if (move_uploaded_file($hotelImage['tmp_name'], $uploadFile)) {
                    // Prepare SQL statement to update hotel details including the image
                    $stmt = $conn->prepare("UPDATE hotels SET hotelName=?, hotelOwnerName=?, hotelOwnerNumber=?, hotelEmail=?, hotelLocation=?, description=?, hotelImage=? WHERE hotel_id=?");
                    // Bind parameters
                    $uploadFile = substr($uploadFile, 3); // Adjusting file path to remove '../' prefix
                    $stmt->bind_param("sssssssi", $hotelName, $hotelOwnerName, $hotelOwnerNumber, $hotelEmail, $hotelLocation, $description, $uploadFile, $hotel_id);

                    // Execute the statement
                    if ($stmt->execute()) {
                        $isUpdated = true;
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
            // Prepare SQL statement to update hotel details excluding the image
            $stmt = $conn->prepare("UPDATE hotels SET hotelName=?, hotelOwnerName=?, hotelOwnerNumber=?, hotelEmail=?, hotelLocation=?, description=? WHERE hotel_id=?");
            // Bind parameters
            $stmt->bind_param("ssssssi", $hotelName, $hotelOwnerName, $hotelOwnerNumber, $hotelEmail, $hotelLocation, $description, $hotel_id);

            // Execute the statement
            if ($stmt->execute()) {
                $isUpdated = true;
            } else {
                echo "Error: " . $conn->error;
            }

            // Close statement
            $stmt->close();
        }
    } else {
        echo "All form fields are required.";
    }
} else {
    echo "Invalid request method.";
}

// Close connection
$conn->close();

// Redirect to the previous page with the update status
header("Location: ../Admin Pages/Hotels.php?isUpdatedHotel=" . ($isUpdated ? 'true' : 'false'));
exit();
