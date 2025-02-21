<!-- 1.Create a form containing one input field (Name). When the user enters his/her name
and as any key is released , the form should display a welcome message for the user.
Implement using AJAX. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message</title>
</head>
<body>

    <h2>Enter your name:</h2>
    <input type="text" id="name" onkeyup="showWelcome()">
    <h3 id="message"></h3>

    <script>
        // Function to send AJAX request
        function showWelcome() {
            var name = document.getElementById("name").value;
            if (name != "") {
                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();
                
                // Configure the POST request
                xhr.open("POST", "welcome.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                
                // Send the name data
                xhr.send("name=" + name);
                
                // Handle the response when the server returns it
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        // Update the message element with the response
                        document.getElementById("message").innerHTML = xhr.responseText;
                    }
                };
            } else {
                document.getElementById("message").innerHTML = "";
            }
        }
    </script>

</body>
</html>
