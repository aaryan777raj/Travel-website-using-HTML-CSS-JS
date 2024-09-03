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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Prepare an insert statement
    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guest, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guest, $arrivals, $leaving);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        header('Location: book.php');
        exit();
    } else {
        echo "Something went wrong. Please try again.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No data was sent.";
}

// Close connection
mysqli_close($connection);
?>
