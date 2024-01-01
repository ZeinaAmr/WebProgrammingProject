<?php
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
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Age = $_POST['Age'];
        $Password = sha1($_POST['Password']);
        

        $sql = "INSERT INTO userinfo (Username, Email, Age, Password) VALUES ('$Username','$Email','$Age','$Password')";

        try {
            if (mysqli_query($conn,$select)) {
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
                echo "Signup failed!";
                exit();
            }
        }
       
    

    mysqli_close($conn);
}
}
?>
