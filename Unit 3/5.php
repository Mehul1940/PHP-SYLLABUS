<!-- 5.Write a program to demostrate the example of sending items selected from radio and
checkbox to server asynchronously. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio and Checkbox Selection</title>
    <script>
        // Function to send selected values (radio buttons and checkboxes) via AJAX
        function sendSelection() {
            // Get the selected radio button value
            var radioValue = document.querySelector('input[name="product"]:checked');
            var radioSelection = radioValue ? radioValue.value : '';

            // Get the selected checkboxes values
            var checkboxes = document.querySelectorAll('input[name="feature"]:checked');
            var selectedFeatures = [];
            checkboxes.forEach(function(checkbox) {
                selectedFeatures.push(checkbox.value);
            });

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure the POST request
            xhr.open("POST", "process_selection.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Send the selected values to the PHP script
            xhr.send("product=" + radioSelection + "&features=" + selectedFeatures.join(","));

            // Handle the response from the server
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Display the server response
                    document.getElementById("response").innerHTML = xhr.responseText;
                }
            };
        }
    </script>
</head>

<body>

    <h2>Select a product and features:</h2>

    <h3>Choose a product:</h3>
    <label><input type="radio" name="product" value="Product A" onclick="sendSelection()"> Product A</label><br>
    <label><input type="radio" name="product" value="Product B" onclick="sendSelection()"> Product B</label><br>
    <label><input type="radio" name="product" value="Product C" onclick="sendSelection()"> Product C</label><br>

    <h3>Select additional features:</h3>
    <label><input type="checkbox" name="feature" value="Feature 1" onclick="sendSelection()"> Feature 1</label><br>
    <label><input type="checkbox" name="feature" value="Feature 2" onclick="sendSelection()"> Feature 2</label><br>
    <label><input type="checkbox" name="feature" value="Feature 3" onclick="sendSelection()"> Feature 3</label><br>

    <h3 id="response"></h3>

</body>

</html>