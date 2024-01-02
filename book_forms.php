<?php

    $connection = mysqli_connect('localhost','root','','forgot_pass_');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $city = $_POST['city'];
        $duration = $_POST['duration'];
        $date = $_POST['date'];

        $request = "insert into book(name, email, phone, address, location, city, duartaion, date) values('$name', '$email', '$phone', '$address', '$location', '$city', '$duration', '$date')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }


?>