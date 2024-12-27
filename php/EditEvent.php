<?php
// Database connection
include 'db_connect.php';

$isUpdated = false;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables to hold form data
    $event_id = $_POST['event_id'] ?? null;
    $eventName = $_POST['eventName'] ?? '';
    $eventDate = $_POST['eventDate'] ?? '';
    $eventLocation = $_POST['eventLocation'] ?? '';
    $eventMapLocation = $_POST['eventMapLocation'] ?? '';
    $eventDesc = $_POST['eventDesc'] ?? '';
    $eventImage = $_FILES['imageURL'] ?? null;

    if (isset($event_id)) {
        // Check if file was uploaded
        if ($eventImage && $eventImage['size'] > 0) {
            // Directory where images will be saved
            $uploadDir = '../Assets/Events/';
            // Generate a unique name for the uploaded file
            $uploadFile = $uploadDir . basename($eventName) . '_' . time() . '.' . pathinfo($eventImage['name'], PATHINFO_EXTENSION);
            // Check if the upload directory exists, if not, create it
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Check if file was uploaded successfully
            if ($eventImage['error'] === UPLOAD_ERR_OK) {
                // Validate and move the uploaded file
                if (move_uploaded_file($eventImage['tmp_name'], $uploadFile)) {
                    // Prepare SQL statement to update event details including the image
                    $stmt = $conn->prepare("UPDATE events SET eventName=?, eventDate=?, eventLocation=?, eventMapLocation=?, eventDesc=?, imageURL=? WHERE event_id=?");
                    // Bind parameters
                    $uploadFile = substr($uploadFile, 3); // Adjusting file path to remove '../' prefix
                    $stmt->bind_param("ssssssi", $eventName, $eventDate, $eventLocation, $eventMapLocation, $eventDesc, $uploadFile, $event_id);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "Event updated successfully.";
                        $isUpdated = true;
                    } else {
                        echo "Error: " . $stmt->error;
                    }

                    // Close statement
                    $stmt->close();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "File upload error: " . $eventImage['error'];
            }
        } else {
            // Prepare SQL statement to update event details excluding the image
            $stmt = $conn->prepare("UPDATE events SET eventName=?, eventDate=?, eventLocation=?, eventMapLocation=?, eventDesc=? WHERE event_id=?");

            // Bind parameters
            $stmt->bind_param("sssssi", $eventName, $eventDate, $eventLocation, $eventMapLocation, $eventDesc, $event_id);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Event details updated successfully.";
                $isUpdated = true;
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        }
    } else {
        echo "Invalid event ID.";
    }
} else {
    echo "Invalid request method.";
}

// Close connection
$conn->close();

// Redirect after update
header("Location: ../Admin Pages/Events.php?isUpdatedEvent=" . ($isUpdated ? 'true' : 'false'));
exit();
