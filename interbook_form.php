<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $destination = $_POST['destination'];
    $guests = $_POST['guests'];
    $arrival_date = $_POST['arrival_date'];
    $leaving_date = $_POST['leaving_date'];
    $package_type = $_POST['package_type'];
    $additional_info = $_POST['additional_info'];
    $passport_number = $_POST['passport_number'];
    $nationality = $_POST['nationality'];
    $date_of_birth = $_POST['date_of_birth'];
    $emergency_contact = $_POST['emergency_contact'];
    $payment_method = $_POST['payment_method'];

    // Prepare an insert statement
    $stmt = $connection->prepare("INSERT INTO international_bookings (name, email, phone,address, destination, guests, arrival_date, leaving_date, package_type, additional_info, passport_number, nationality, date_of_birth, emergency_contact, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param(
        "sssssssssssssss", 
        $name, 
        $email, 
        $phone, 
        $address, 
        $destination, 
        $guests, 
        $arrival_date, 
        $leaving_date, 
        $package_type, 
        $additional_info, 
        $passport_number, 
        $nationality, 
        $date_of_birth, 
        $emergency_contact, 
        $payment_method
    );

    // Execute the statement and check for success
    if ($stmt->execute()) {
        header('Location: inter-booking.php'); // Redirect to a success page
        exit();
    } else {
        echo "Something went wrong. Please try again. Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No data was sent.";
}

// Close connection
mysqli_close($connection);
?>
