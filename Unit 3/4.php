<!-- 4.Create a form contaning a combobox with some product names as items. Whenever a
user selects a particular product from the combox, it shuold be sent to the server
asynchronously (i.e. without pressing submit button). Implement using AJAX. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Selection</title>
    <script>
        // Function to handle the selection of a product
        function sendProduct() {
            var product = document.getElementById("productComboBox").value;

            if (product != "") {
                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();
                
                // Configure the POST request
                xhr.open("POST", "product_selection.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                
                // Send the selected product to the PHP script
                xhr.send("product=" + product);
                
                // Handle the response from the server
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        // Display the response in the message div
                        document.getElementById("message").innerHTML = xhr.responseText;
                    }
                };
            }
        }
    </script>
</head>
<body>

    <h2>Select a product:</h2>
    <select id="productComboBox" onchange="sendProduct()">
        <option value="">--Select a Product--</option>
        <option value="Product 1">Product 1</option>
        <option value="Product 2">Product 2</option>
        <option value="Product 3">Product 3</option>
        <option value="Product 4">Product 4</option>
        <option value="Product 5">Product 5</option>
    </select>

    <h3 id="message"></h3>

</body>
</html>
