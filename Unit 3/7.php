<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <script>
        function validateEmail() {
            var email = document.getElementById("email").value;
            var message = document.getElementById("mes");

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "p1.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.send("email=" + email);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    message.innerHTML = xhr.responseText;
                } else {
                    message.innerHTML = "Error validating email.";
                }
            };
        }
    </script>
</head>
<body>

    <h2>Email Validation Example</h2>

    <form onsubmit="event.preventDefault(); validateEmail();">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p id="mes"></p>

</body>
</html>
