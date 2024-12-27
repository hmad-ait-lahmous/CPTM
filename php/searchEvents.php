<?php
// Include database connection
include 'db_connect.php';

$searchBy = $_POST["searchBy"];
$search = $_POST["search"];

// Construct SQL query based on search criteria
$sql = "SELECT * FROM events WHERE $searchBy LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output table rows
    $id = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th scope='row'>" . $id++ . "</th>";
        echo "<td>" . $row['eventName'] . "</td>";
        echo "<td>" . $row['eventDate'] . "</td>";
        echo "<td>" . $row['eventLocation'] . "</td>";
        echo "<td>" . $row['eventMapLocation'] . "</td>";
        echo "<td style='width: 15%;'>";
        echo "<a href='?delete=" . $row['event_id'] . "' class='btn btn-danger btn-sm me-1'><i class='fas fa-user-slash'></i> Delete</a>";
        echo "<a href='?edit=" . $row['event_id'] . "' class='btn btn-primary btn-sm'><i class='fas fa-user-pen'></i> Edit</a>";

        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hotels found</td></tr>";
}

$conn->close();
