<!-- 7.Write a programto validate and Email ID using regular expression and by using DOM. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <script>
        // Simple email validation function
        function validateEmail() {
            // Get the email value
            var email = document.getElementById("email").value;

            // Check if the email is empty
            if (email === "") {
                alert("Email cannot be empty!");
                return false;
            }

            // Check if the email contains '@' and '.'
            if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
                alert("Please enter a valid email with '@' and '.'");
                return false;
            }

            // If everything is fine
            alert("Email is valid!");
            return true;
        }
    </script>
</head>
<body>

    <h2>Email Validation Example</h2>

    <form onsubmit="return validateEmail()">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
