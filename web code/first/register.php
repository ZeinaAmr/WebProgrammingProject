<?php 
$server = "localhost";
$user="root";
$pass="";
$dbname="gallery";
$conn=mysqli_connect($server,$user,$pass,$dbname);

if(!$conn)
{
    echo "Failed";
    die();
}
else{

    $name = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password =$_POST['password'];

    $sql = "INSERT INTO user (Username,Email,Age,Password) VALUES ('$name','$email','$age','$password')";
    if(mysqli_query($conn,$sql))
    {
        echo "Success";
    }
    else
    {
        echo "Fail";
    }

    mysqli_close($conn);
    
}
?>