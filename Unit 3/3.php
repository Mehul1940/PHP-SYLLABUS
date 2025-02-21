<!-- 3.Write a program for converting a string into uppercase using AJAX. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert to Uppercase</title>
    <script>
        // Function to send AJAX request
        function convertToUppercase() {
            var str = document.getElementById("inputString").value;

            if (str != "") {
                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();
                
                // Configure the POST request
                xhr.open("POST", "convert_to_uppercase.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                
                // Send the string data to the PHP script
                xhr.send("str=" + str);
                
                // Handle the response
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        // Display the result in the message div
                        document.getElementById("result").innerHTML = "Uppercase String: " + xhr.responseText;
                    }
                };
            } else {
                document.getElementById("result").innerHTML = "Please enter a string.";
            }
        }
    </script>
</head>
<body>

    <h2>Enter a string to convert to uppercase:</h2>
    <input type="text" id="inputString" placeholder="Type a string here">
    <button onclick="convertToUppercase()">Convert</button>

    <h3 id="result"></h3>

</body>
</html>
