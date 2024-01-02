<?php


$server = "localhost";
$user = "root";
$pass = "";
$dbname = "forgot_pass_";
$conn = mysqli_connect($server, $user, $pass, $dbname,3308);



if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $duration = $_POST['duration'];
    $date = $_POST['date'];

    // Check if there is an existing booking on the same date
    $checkQuery = "SELECT * FROM book WHERE date = '$date'";
    $result = mysqli_query($connection, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo json_encode(array('status' => 'error', 'message' => 'Booking on the same date already exists.'));
    } else {
        // Proceed with the booking insertion
        $request = "INSERT INTO book(name, email, phone, address, location, city, duration, date) 
                    VALUES('$name', '$email', '$phone', '$address', '$location', '$city', '$duration', '$date')";
        mysqli_query($connection, $request);

        echo json_encode(array('status' => 'success', 'message' => 'Booking successful.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request.'));
}
?>
