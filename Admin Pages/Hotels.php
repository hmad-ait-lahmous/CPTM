 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manage Hotels</title>
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
            $alertMessage = ($_GET['isDeletedHotel'] == 'true') ? 'Hotel deleted successfully!' : 'Failed to delete hotel.';

            echo '<div class="alert alert-' . $alertClass . ' alert-dismissible fade show" role="alert">
        ' . $alertMessage . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }

        if (isset($_GET['isUpdatedHotel'])) {
            $alertClass = ($_GET['isUpdatedHotel'] == 'true') ? 'success' : 'danger';
            $alertMessage = ($_GET['isUpdatedHotel'] == 'true') ? 'Hotel Updated successfully!' : 'Failed to Updated hotel, Try With Other Image.';

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
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddHotel">
                     Add Hotel
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
                     <option value="hotelName">Hotel Name</option>
                     <option value="hotelOwnerName">Owner Name</option>
                     <option value="hotelOwnerNumber">Owner Number</option>
                     <option value="hotelEmail">Email</option>
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
                             <th scope="col">Owner</th>
                             <th scope="col">Owner Number</th>
                             <th scope="col">Email</th>
                             <th scope="col">Location</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>
                     <tbody id="TableCentent">
                         <?php

                            // Assuming you have a database connection $conn
                            $sql = "SELECT * FROM hotels"; // Change 'hotels' to your actual table name
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $id = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $id++ . "</th>";
                                    echo "<td>" . $row['hotelName'] . "</td>";
                                    echo "<td>" . $row['hotelOwnerName'] . "</td>";
                                    echo "<td>" . $row['hotelOwnerNumber'] . "</td>";
                                    echo "<td>" . $row['hotelEmail'] . "</td>";
                                    echo "<td>" . $row['hotelLocation'] . "</td>";
                                    echo "<td style='width: 15%;'>";
                                    echo "<a href='?delete=" . $row['hotel_id'] . "' class='btn btn-danger btn-sm me-1'><i class='fas fa-user-slash'></i> Delete</a>";
                                    echo "<a href='?edit=" . $row['hotel_id'] . "' class='btn btn-primary btn-sm'><i class='fas fa-user-pen'></i> Edit</a>";

                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>No hotels found</td></tr>";
                            }

                            $conn->close();
                            ?>
                     </tbody>
                 </table>
             </div>
         </div>

         <!-- Modals -->
         <!-- Edit Hotel -->
         <div class="modal fade" id="EditHotel" tabindex="-1" aria-labelledby="EditHotelLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="EditHotelLabel">Edit Hotel</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form action="../php/EditHotel.php" method="post" enctype="multipart/form-data">
                         <?php
                            // Check if 'edit' variable is set via GET
                            if (isset($_GET['edit'])) {
                                // Include database connection file
                                include '../php/db_connect.php';

                                // Sanitize the input to prevent SQL injection
                                $edit_id = mysqli_real_escape_string($conn, $_GET['edit']);

                                // Query to fetch data for the specified hotel ID
                                $sql = "SELECT * FROM hotels WHERE hotel_id = $edit_id";
                                $result = $conn->query($sql);

                                // Check if data is found
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                            ?>
                                 <div class='modal-body'>
                                     <input type="hidden" name="hotel_id" value='<?php echo $row['hotel_id']; ?>'>
                                     <div class='mb-3'>
                                         <label for='hotelName' class='form-label'>Hotel Name</label>
                                         <input type='text' class='form-control' id='hotelName' name='hotelName' placeholder='Hotel Name' value='<?php echo $row['hotelName']; ?>' required>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='hotelOwnerName' class='form-label'>Hotel Owner Name</label>
                                         <input type='text' class='form-control' id='hotelOwnerName' name='hotelOwnerName' placeholder='Hotel Owner Name' value='<?php echo $row['hotelOwnerName']; ?>' required>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='hotelOwnerNumber' class='form-label'>Hotel Phone Number</label>
                                         <input type='tel' class='form-control' id='hotelOwnerNumber' name='hotelOwnerNumber' placeholder='Hotel Phone Number' value='<?php echo $row['hotelOwnerNumber']; ?>' required>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='hotelEmail' class='form-label'>Hotel Email</label>
                                         <input type='email' class='form-control' id='hotelEmail' name='hotelEmail' placeholder='Hotel Email' value='<?php echo $row['hotelEmail']; ?>' required>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='hotelLocation' class='form-label'>Hotel Location</label>
                                         <input type='text' class='form-control' id='hotelLocation' name='hotelLocation' placeholder='Map Link' value='<?php echo $row['hotelLocation']; ?>' required>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='description' class='form-label'>Description</label>
                                         <textarea class='form-control' id='description' name='description' rows='3' required><?php echo $row['description']; ?></textarea>
                                     </div>
                                     <div class='mb-3'>
                                         <label for='hotelImage' class='form-label'>Hotel Image</label>
                                         <input type='file' class='form-control' id='hotelImage' name='hotelImage'>
                                         <small id='imageHelp' class='form-text text-muted'>Leave this field blank if you don't want to change the image.</small>
                                     </div>
                                 </div>
                         <?php
                                } else {
                                    echo "No hotel found with ID: $edit_id";
                                }

                                // Close database connection
                                $conn->close();
                            }
                            ?>
                         <div class="modal-footer">
                             <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Update Hotel</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>


         <!-- Modal Hotel-->
         <div class="modal fade" id="AddHotel" tabindex="-1" aria-labelledby="AddHotelLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="AddHotelLabel">Add Hotel</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form action="../php/addHotel.php" method="post" enctype="multipart/form-data">
                         <div class="modal-body">
                             <div class="mb-3">
                                 <label for="hotelName" class="form-label">Hotel Name</label>
                                 <input type="text" class="form-control" id="hotelName" name="hotelName" placeholder="Hotel Name" required>
                             </div>

                             <div class="mb-3">
                                 <label for="hotelOwnerName" class="form-label">Hotel Owner Name</label>
                                 <input type="text" class="form-control" id="hotelOwnerName" name="hotelOwnerName" placeholder="Hotel Owner Name" required>
                             </div>

                             <div class="mb-3">
                                 <label for="hotelOwnerNumber" class="form-label">Hotel Phone Number</label>
                                 <input type="tel" class="form-control" id="hotelOwnerNumber" name="hotelOwnerNumber" placeholder="Hotel Phone Number" required>
                             </div>

                             <div class="mb-3">
                                 <label for="hotelEmail" class="form-label">Hotel Email</label>
                                 <input type="email" class="form-control" id="hotelEmail" name="hotelEmail" placeholder="Hotel Email" required>
                             </div>

                             <div class="mb-3">
                                 <label for="hotelLocation" class="form-label">Hotel Location</label>
                                 <input type="text" class="form-control" id="hotelLocation" name="hotelLocation" placeholder="Map Link" required>
                             </div>

                             <div class="mb-3">
                                 <label for="description" class="form-label">Description</label>
                                 <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                             </div>

                             <div class="mb-3">
                                 <label for="hotelImage" class="form-label">Hotel Image</label>
                                 <input type="file" class="form-control" id="hotelImage" name="hotelImage" accept="image/*" required>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Add Hotel</button>
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
                     const editModal = new bootstrap.Modal(document.getElementById('EditHotel'));
                     editModal.show();
                 }
             });
         </script>

         <script>
             document.getElementById('search').addEventListener('keyup', function(e) {
                 var searchBy = document.getElementById('searchBy').value;
                 var search = document.getElementById('search').value;

                 var xhr = new XMLHttpRequest();
                 xhr.open('POST', '../php/searchHotels.php', true);
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