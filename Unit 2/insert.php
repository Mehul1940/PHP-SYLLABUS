<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data from form
    $Pro_id = $_POST['Pro_id'];
    $Pro_name = $_POST['Pro_name'];
    $Pro_price = $_POST['Pro_price'];
    $QOH = $_POST['QOH'];

    // Create connection
    $conn = new mysqli("localhost", "root", "", "db-1");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the product table
    $sql = "INSERT INTO products (Pro_id, Pro_name, Pro_price, QOH) 
            VALUES ('$Pro_id', '$Pro_name', '$Pro_price', '$QOH')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Product record inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>