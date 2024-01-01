$(document).ready(function () {
    $('#signUp_btn').click(function (event) {
        event.preventDefault(); // Prevent the default form submission

        var passInput = $('#Password').val(); // Get the password input

        var flag = 0;
        var textList = ['numbers',
            'at least 8 characters',
            'special characters',
            'uppercase letters',
            'lowercase letters'];

        var conditions = [
            passInput.match(/[0-9]/), // Numbers
            passInput.length >= 8,
            passInput.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/), // Special characters
            passInput.match(/[A-Z]/), // Uppercase letters
            passInput.match(/[a-z]/), // Lowercase letters
        ];

        var errorList = '';

        for (var i = 0; i < textList.length; i++) {
            if (!conditions[i]) {
                errorList += textList[i] + '\n';
                flag = 1;
            }
        }

        if (flag == 1) {
            window.alert("Password must contain:\n" + errorList);
        } else {
            // Rest of your code for submitting the form
            var formData = {
                Username: $('#Username').val(),
                Email: $('#Email').val(),
                Age: $('#Age').val(),
                Password: $('#Password').val()
            };

            $.post('reg.php', formData)
                .done(function (response) {
                    // Trim the response before comparing
                    var trimmedResponse = response.trim();
                    // If the response equals 'success,' redirect the user
                    console.log(trimmedResponse);
                    if (trimmedResponse === 'success') {
                        alert("Sign up success");
                        //window.location.href = 'home.html';
                    } else {
                        alert("Sign up failed!");
                        console.log("My response: " + response);
                        //window.location.href = 'login-reg.html';
                    }
                })
                .fail(function (xhr, status, error) {
                    console.log("AJAX request failed with status: " + status + ", error: " + error);
                    alert("AJAX request failed. Please try again.");
                });
     }
});
});