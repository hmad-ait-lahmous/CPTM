<?php
// Include the database connection file

$isAdded = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO propositions (OwnerName, OwnerEmail, OwnerPhone, OwnerSubject, OwnerMessage) VALUES (?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind the parameters to the placeholders
        $stmt->bind_param("sssss", $name, $email, $number, $subject, $message);

        // Execute the statement
        if ($stmt->execute()) {
            $isAdded = true;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}

// Redirect to the home page with the status
header("Location: ../index.php?isAdded=" . ($isAdded ? 'true' : 'false'));
exit();
