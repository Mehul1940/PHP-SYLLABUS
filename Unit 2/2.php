<!-- 2.Write a PHP script for that creates a database named "DB-1"in MySQL -->


<?php

// Create connection to MySQL
$conn = new mysqli("localhost", "root", "");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
if ($conn->query("CREATE DATABASE `DB-1`") === TRUE) {
    echo "Database 'DB-1' created successfully.";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
