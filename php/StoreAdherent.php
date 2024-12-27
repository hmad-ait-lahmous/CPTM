<?php
// Include the database connection file
include 'db_connect.php';

$isAdded = false;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $adherentName = $_POST['nom'];
    $adherentEmail = $_POST['email'];
    $adherentPhone = $_POST['phone_number'];
    $adherentType = $_POST['type'];
    $adherentSubject = $_POST['sujet'];
    $adherentMessage = $_POST['message'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare(
        "INSERT INTO adherents (adherentName, adherentEmail, adherentPhone, adherentType, adherentSubject, adherentMessage) VALUES (?, ?, ?, ?, ?, ?)"
    );
    if ($adherentType == "other") {
        $adherentType = $_POST['OtherType'];
        $stmt->bind_param("ssssss", $adherentName, $adherentEmail, $adherentPhone, $adherentType, $adherentSubject, $adherentMessage);
    } else {
        $stmt->bind_param("ssssss", $adherentName, $adherentEmail, $adherentPhone, $adherentType, $adherentSubject, $adherentMessage);
    }
    // Execute the statement
    if ($stmt->execute()) {
        $isAdded = true;
    }
    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}

// Redirect to the home page with the status
header("Location: ../formulaire.php?isAdded=" . ($isAdded ? 'true' : 'false'));
exit();
