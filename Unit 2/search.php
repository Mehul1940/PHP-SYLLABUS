<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get Pro_id from the form
    $Pro_id = $_POST['Pro_id'];

    // Create connection to MySQL
    $conn = new mysqli("localhost", "root", "", "db-1");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to select the product by Pro_id
    $sql = "SELECT * FROM products WHERE Pro_id = '$Pro_id'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the product is found
    if ($result->num_rows > 0) {
        // Output the product details
        while ($row = $result->fetch_assoc()) {
            echo "<h3>Product Details:</h3>";
            echo "Product ID: " . $row["Pro_id"] . "<br>";
            echo "Product Name: " . $row["Pro_name"] . "<br>";
            echo "Product Price: " . $row["Pro_price"] . "<br>";
            echo "Quantity on Hand (QOH): " . $row["QOH"] . "<br>";
        }
    } else {
        echo "No product found with Pro_id: $Pro_id.";
    }

    // Close connection
    $conn->close();
}
