<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom CSS for even larger buttons */
        .btn-xl {
            padding: 1rem 2rem;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <?php
    function showAlert($message, $isSuccess)
    {
        $alertType = $isSuccess ? 'success' : 'danger';
        $alertMessage = $isSuccess ? "$message added successfully." : "Error adding $message.";

        return <<<HTML
    <div class="alert alert-$alertType alert-dismissible fade show" role="alert">
        $alertMessage
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    HTML;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['isAddedHotel'])) {
            $isAdded = $_GET['isAddedHotel'];
            echo showAlert('Hotel', $isAdded === 'true');
        } elseif (isset($_GET['isAddedEvent'])) {
            $isAdded = $_GET['isAddedEvent'];
            echo showAlert('Event', $isAdded === 'true');
        }
    }
    ?>



    <!-- Button trigger modal -->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <button style="width: 10rem;" type="button" class="btn btn-primary btn-lg mb-2 uniform-width" data-bs-toggle="modal" data-bs-target="#AddHotel">
            Add Hotel
        </button>
        <button style="width: 10rem;" type="button" class="btn btn-primary btn-lg mb-2 uniform-width" data-bs-toggle="modal" data-bs-target="#AddEvent">
            Add Event
        </button>
        <a style="width: 10rem;" href="Hotels.php" class="btn btn-primary btn-lg mb-2 uniform-width text-center">
            Hotels Page
        </a>
        <a style="width: 10rem;" href="Events.php" class="btn btn-primary btn-lg mb-2 uniform-width text-center">
            Events Page
        </a>
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

    <!-- Event Modal -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>