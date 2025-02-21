<!-- 2.Repeat the above question to demonstrate the use of keydown and keypress events -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message with keydown/keypress</title>
</head>
<body>

    <h2>Enter your name:</h2>
    <input type="text" id="name" onkeydown="showWelcomeOnKeydown()" onkeypress="showWelcomeOnKeypress()">
    <h3 id="message"></h3>

    <script>
        // Function to handle keydown event
        function showWelcomeOnKeydown() {
            var name = document.getElementById("name").value;
            if (name != "") {
                // Create a new XMLHttpRequest object for keydown event
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "welcome.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("name=" + name);
                
                // Handle the response from the server
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        document.getElementById("message").innerHTML = xhr.responseText;
                    }
                };
            } else {
                document.getElementById("message").innerHTML = "";
            }
        }

        // Function to handle keypress event
        function showWelcomeOnKeypress() {
            var name = document.getElementById("name").value;
            if (name != "") {
                // Create a new XMLHttpRequest object for keypress event
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "welcome.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("name=" + name);
                
                // Handle the response from the server
                xhr.onload = function() {
                    if (xhr.status == 200) {
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
