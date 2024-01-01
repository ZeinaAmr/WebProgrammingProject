<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container1">
        <div class="form-container admin-sign-in-container">
        <form method="post">
            <h1>Sign In</h1>
            <input type="text"placeholder="Admin Username" name="AdminUsername" id="AdminUsername">
            <input type="password"placeholder="Admin Password"name="AdminPassword" id="AdminPassword">
            <a href="forgot-pass.html">Forgot Password?</a>
           <button class="SignIn_btn" id="SignIn">Sign In</button>

        </form>

    </div></div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
    $(document).ready(function(){
        $('#SignIn').click(function(e){
            e.preventDefault();


var formData = {
                AdminUsername: $('#AdminUsername').val(),
                AdminPassword: $('#AdminPassword').val()
            };

            $.post('admin.php', formData)
           
                .done(function (response) {
                    // alert(response);
                    // Trim the response before comparing
                    var trimmedResponse = response.trim();
                    // If the response equals 'success,' redirect the user
                    console.log(trimmedResponse);
                    if (trimmedResponse === 'success') {
                        alert("Login success");
                        //window.location.href = 'home.html';
                    } else {
                        alert("Login failed!");
                        console.log("My response: " + response);
                        //window.location.href = 'login-reg.html';
                    }
                })
                .fail(function (xhr, status, error) {
                    console.log("AJAX request failed with status: " + status + ", error: " + error);
                    alert("AJAX request failed. Please try again.");
                });
            });


});  
                </script>

</body>
</html>