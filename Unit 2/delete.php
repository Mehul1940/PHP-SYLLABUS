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

    // SQL query to delete the product by Pro_id
    $sql = "DELETE FROM products WHERE Pro_id = '$Pro_id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>
