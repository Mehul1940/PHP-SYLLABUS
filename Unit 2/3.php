<!-- 3.Write a PHP script for creating a product table in the specified database with fields
Pro_id, Pro_name, Pro_price, QOH. Also display an acknowledgement for the same.  -->
<?php

// Create connection to MySQL
$conn = new mysqli("localhost", "root", "", "db-1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the products table
$sql = "CREATE TABLE products (
    Pro_id INT AUTO_INCREMENT PRIMARY KEY,
    Pro_name VARCHAR(100),
    Pro_price DECIMAL(10, 2),
    QOH INT
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Product table created successfully.";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();

?>
