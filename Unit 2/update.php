<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get Pro_id and QOH from the form
    $Pro_id = $_POST['Pro_id'];
    $QOH = $_POST['QOH'];

    // Create connection to MySQL
    $conn = new mysqli("localhost", "root", "", "db-1");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update the QOH for the given Pro_id
    $sql = "UPDATE products SET QOH = '$QOH' WHERE Pro_id = '$Pro_id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Product quantity updated successfully.";
    } else {
        echo "Error updating product: " . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>
