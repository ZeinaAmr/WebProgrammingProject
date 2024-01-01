<?php 
$server = "localhost";
$user="root";
$pass="";
$dbname="forgot_pass_";
$conn=mysqli_connect($server,$user,$pass,$dbname);
session_start();

if(!$conn)
{
    echo "Failed";
    die();
}
else{
    $Email=$_POST['Email'];
    $sql="SELECT * FROM userinfo WHERE Email='$Email';";


if(mysqli_num_rows(mysqli_query($conn,$sql))==1){
    $_SESSION['Email']=$Email;
    header("location:Confirm-pass.html");


}


else {
    echo "Email not found";
    header("location:login.html");
}
mysqli_close($conn);
}