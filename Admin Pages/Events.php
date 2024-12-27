 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manage Events</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="../../fontawesome-free-6.5.1-web/css/all.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

     <style>
         body {
             background-color: #f8f9fa;
             /* Set the background color */
             /* Set the text color */
             font-family: Arial, sans-serif;
             /* Set the font family */
             margin: 0;
             /* Remove default margin */
             padding: 0;
             /* Remove default padding */
         }

         .container {
             padding: 20px;
             /* Add padding to the container */
         }

         /* Add additional styles as needed */
     </style>
 </head>


 <body>
     <?php
        include '../php/db_connect.php';

        if (isset($_GET['delete']) && !empty($_GET['delete'])) {
            $isUpdated = false;
            // Sanitize the input to prevent SQL injection
            $hotel_id = mysqli_real_escape_string($conn, $_GET['delete']);

            // Prepare SQL statement to delete the hotel from the database
            $sql = "DELETE FROM hotels WHERE hotel_id = $hotel_id";

            // Execute the SQL statement
            if (mysqli_query($conn, $sql)) {
                // Hotel deleted successfully
                $isUpdated = true;
                header("Location: ../Admin Pages/Hotels.php?isDeletedHotel=" . ($isUpdated ? 'true' : 'false'));
            } else {
                // Error deleting hotel
                header("Location: ../Admin Pages/Hotels.php?isDeletedHotel=" . ($isUpdated ? 'true' : 'false'));
                echo "Error: " . mysqli_error($conn);
            }
        }

        if (isset($_GET['isDeletedHotel'])) {
            $alertClass = ($_GET['isDeletedHotel'] == 'true') ? 'success' : 'danger';
            $alertMessage = ($_GET['isDeletedHotel'] == 'true') ? 'Event deleted successfully!' : 'Failed to delete the Event.';

            echo '<div class="alert alert-' . $alertClass . ' alert-dismissible fade show" role="alert">
        ' . $alertMessage . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }


        if (isset($_GET['isUpdatedEvent'])) {
            $alertClass = ($_GET['isUpdatedEvent'] == 'true') ? 'success' : 'danger';
            $alertMessage = ($_GET['isUpdatedEvent'] == 'true') ? 'Event Updated successfully!' : 'Failed to Updated the Event, Try With Another Image.';

            echo '<div class="alert alert-' . $alertClass . ' alert-dismissible fade show" role="alert">
        ' . $alertMessage . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }
        ?>


     <div class="container">
         <!-- Navigation Row -->
         <div class="row mb-3">
             <div class="col text-center">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddEvent">
                     Add Event
                 </button>
             </div>
             <div class="col text-center">
                 <a href="Hotels.php" class="btn btn-primary">
                     Hotels Page
                 </a>
             </div>
             <div class="col text-center">
                 <a href="Events.php" class="btn btn-primary">
                     Events Page
                 </a>
             </div>
         </div>

         <!-- Search Row -->
         <div class="row">
             <div class="col-9">
                 <div class="input-group mb-3">
                     <input id="search" type="text" class="form-control" placeholder="Search.." aria-describedby="basic-addon2">
                 </div>
             </div>
             <div class="col-3">
                 <select class="form-select" id="searchBy">
                     <option disabled selected value="1">Search By</option>
                     <option value="eventName">Name</option>
                     <option value="eventDate">Date</option>
                     <option value="eventLocation">Location</option>
                     <option value="eventMapLocation">Map Location</option>
                 </select>
             </div>
         </div>

         <!-- Table Row -->
         <div class="row">
             <div class="col">
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Name</th>
                             <th scope="col">Date</th>
                             <th scope="col">Location</th>
                             <th scope="col">Map Location</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>
                     <tbody id="TableCentent">
                         <?php

                            // Assuming you have a database connection $conn
                            $sql = "SELECT * FROM events"; // Change 'hotels' to your actual table name
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
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
                                echo "<tr><td colspan='7'>No Events found</td></tr>";
                            }

                            $conn->close();
                            ?>
                     </tbody>
                 </table>
             </div>
         </div>

         <!-- Modals -->
         <!-- Edit Hotel -->
         <div class="modal fade" id="EditEvent" tabindex="-1" aria-labelledby="EditEventLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="EditEventLabel">Edit Event</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form action="../php/EditEvent.php" method="post" enctype="multipart/form-data">
                         <div class="modal-body">
                             <?php
                                // Check if 'edit' variable is set via GET
                                if (isset($_GET['edit'])) {
                                    // Include database connection file
                                    include '../php/db_connect.php';

                                    // Sanitize the input to prevent SQL injection
                                    $edit_id = mysqli_real_escape_string($conn, $_GET['edit']);

                                    // Query to fetch data for the specified event ID
                                    $sql = "SELECT * FROM events WHERE event_id = $edit_id";
                                    $result = $conn->query($sql);

                                    // Check if data is found
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        // Output the fetched data into form fields
                                ?>
                                     <input type="hidden" name="event_id" value='<?php echo htmlspecialchars($row['event_id']); ?>'>
                                     <div class="mb-3">
                                         <label for="eventName" class="form-label">Event Name</label>
                                         <input type="text" class="form-control" id="eventName" value='<?php echo htmlspecialchars($row['eventName']); ?>' name="eventName" placeholder="Event Name" required>
                                     </div>

                                     <div class="mb-3">
                                         <label for="eventDate" class="form-label">Event Date</label>
                                         <input type="datetime-local" class="form-control" id="eventDate" value='<?php echo htmlspecialchars($row['eventDate']); ?>' name="eventDate" placeholder="Event Date" required>
                                     </div>

                                     <div class="mb-3">
                                         <label for="eventLocation" class="form-label">Event City</label>
                                         <input type="text" class="form-control" id="eventLocation" value='<?php echo htmlspecialchars($row['eventLocation']); ?>' name="eventLocation" placeholder="Event City" required>
                                     </div>

                                     <div class="mb-3">
                                         <label for="eventMapLocation" class="form-label">Event Location</label>
                                         <input type="text" class="form-control" id="eventMapLocation" value='<?php echo htmlspecialchars($row['eventMapLocation']); ?>' name="eventMapLocation" placeholder="Map Link" required>
                                     </div>

                                     <div class='mb-3'>
                                         <label for='eventDesc' class='form-label'>Description</label>
                                         <textarea class='form-control' id='eventDesc' name='eventDesc' rows='3' required><?php echo htmlspecialchars($row['eventDesc']); ?></textarea>
                                     </div>

                                     <div class="mb-3">
                                         <label for="imageURL" class="form-label">Event Image</label>
                                         <input type="file" class="form-control" id="imageURL" name="imageURL" accept="image/*">
                                         <small id='imageHelp' class='form-text text-muted'>Leave this field blank if you don't want to change the image.</small>
                                     </div>
                             <?php
                                    } else {
                                        echo "No event found with ID: $edit_id";
                                    }

                                    // Close database connection
                                    $conn->close();
                                }
                                ?>
                         </div>
                         <div class="modal-footer">
                             <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Update Event</button>
                         </div>
                     </form>

                 </div>
             </div>
         </div>

         <!-- ADD Hotel Modal-->
         <div class="modal fade" id="AddEvent" tabindex="-1" aria-labelledby="AddEventLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="AddEventLabel">Modal title</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form action="../php/addEvent.php" method="post" enctype="multipart/form-data">
                         <div class="modal-body">
                             <div class="mb-3">
                                 <label for="eventName" class="form-label">Event Name</label>
                                 <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Event Name" required>
                             </div>

                             <div class="mb-3">
                                 <label for="eventDate" class="form-label">Event Date</label>
                                 <input type="datetime-local" class="form-control" id="eventDate" name="eventDate" placeholder="Event Date" required>
                             </div>

                             <div class="mb-3">
                                 <label for="eventLocation" class="form-label">Event City</label>
                                 <input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="Event City" required>
                             </div>

                             <div class="mb-3">
                                 <label for="eventMapLocation" class="form-label">Event Location</label>
                                 <input type="text" class="form-control" id="eventMapLocation" name="eventMapLocation" placeholder="Map Link" required>
                             </div>

                             <div class="mb-3">
                                 <label for="eventDesc" class="form-label">Description</label>
                                 <textarea class="form-control" id="eventDesc" name="eventDesc" rows="3" required></textarea>
                             </div>

                             <div class="mb-3">
                                 <label for="imageURL" class="form-label">Event Image</label>
                                 <input type="file" class="form-control" id="imageURL" name="imageURL" accept="image/*" required>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Add Event</button>
                         </div>
                     </form>

                 </div>
             </div>
         </div>

         <!-- Bootstrap JS and dependencies (Popper.js and Bootstrap JS) -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>

         <script>
             document.addEventListener("DOMContentLoaded", function() {
                 const urlParams = new URLSearchParams(window.location.search);
                 const editParam = urlParams.get('edit');

                 if (editParam) {
                     const editModal = new bootstrap.Modal(document.getElementById('EditEvent'));
                     editModal.show();
                 }
             });
         </script>

         <script>
             document.getElementById('search').addEventListener('keyup', function(e) {
                 var searchBy = document.getElementById('searchBy').value;
                 var search = document.getElementById('search').value;

                 var xhr = new XMLHttpRequest();
                 xhr.open('POST', '../php/searchEvents.php', true);
                 xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                 xhr.onreadystatechange = function() {
                     if (xhr.readyState === 4 && xhr.status === 200) {
                         document.getElementById('TableCentent').innerHTML = xhr.responseText;
                     }
                 };

                 var data = 'searchBy=' + encodeURIComponent(searchBy) + '&search=' + encodeURIComponent(search);
                 xhr.send(data);
             });
         </script>



 </body>

 </html>