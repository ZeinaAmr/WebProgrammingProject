<?php


$server = "localhost";
$user = "root";
$pass = "";
$dbname = "forgot_pass_";
$conn = mysqli_connect($server, $user, $pass, $dbname,3308);




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $city = $_POST['city'];
        $duration = $_POST['duration'];
        $date = $_POST['date'];
        

        $sql = "INSERT INTO book_form (name, email, phone, address, location, city, duration, date) VALUES ('$name', '$email', '$phone', '$address', '$location', '$city', '$duration', '$date')";

        try {
            if (mysqli_query($conn,$sql)) {
                echo "success";
                exit();
            } else {
                throw new Exception(mysqli_error($conn)); // Catch and throw the exception
            }
        } catch (Exception $e) {
            if ($conn->errno == 1062) {
                echo "Email or Username has been used before";
                exit();
            } else {
                echo "Insertion failed: " . $e->getMessage();
           
                exit();
            }
        }
       
    

    mysqli_close($conn);
}


?>