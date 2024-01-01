<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "forgot_pass_";
$conn = mysqli_connect($server, $user, $pass, $dbname,3308);

if (!$conn) {
    echo "Failed";
    die();
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST['AdminUsername'];
        $Password = $_POST['AdminPassword'];
        $sql="SELECT * FROM admin_accounts WHERE name='$Username' And pass='$Password';";

    if(mysqli_num_rows(mysqli_query($conn,$sql))==1){
         echo "success";
        // $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
        // echo 'Welcome '. $row['name'];
    
    }


    else {
        echo "Incorrect credentials";
        header("location.admin_page.php");
    }
}
mysqli_close($conn);
    
}
?>