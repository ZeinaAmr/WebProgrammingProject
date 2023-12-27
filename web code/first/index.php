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
    $password=$_POST['Password'];
    $username=$_POST['Username'];
    $sql="SELECT * FROM user WHERE Username='$username' And Password='$passwrd';";

    if(mysqli_num_rows(mysqli_query($conn,$sql))==1){
        echo "Login Success";
        $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
        echo 'Welcome '. $row['Username'];

    }

    else {
        echo "Incorrect credentials";
        header("location.index.html");
    }
}
?>