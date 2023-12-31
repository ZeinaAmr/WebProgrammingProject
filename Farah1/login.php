<?php 
$server = "localhost";
$user="root";
$pass="";
$dbname="forgot_pass_";
$conn=mysqli_connect($server,$user,$pass,$dbname);


if(!$conn)
{
    echo "Failed";
    die();
}

else{
    $Password=sha1($_POST['Password']);
    $Username=$_POST['Username'];
    $sql="SELECT * FROM userinfo WHERE Username='$Username' And Password='$Password';";

    if(mysqli_num_rows(mysqli_query($conn,$sql))==1){
        echo "Login Success";
        $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
        echo 'Welcome '. $row['Username'];

    }


    else {
        echo "Incorrect credentials";
        header("location.login-reg.html");
    }
}
?>