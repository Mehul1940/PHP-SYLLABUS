<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "db-1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the POST request
$stuId = $_POST['stuId'];
$stuName = $_POST['stuName'];
$mob = $_POST['mob'];
$country = $_POST['country'];

// Check if the student ID already exists in the table
$sql = "SELECT * FROM student WHERE stuId = '$stuId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If stuId exists, display message
    echo "User Already Exists. Try another stuId.";
} else {
    // If stuId does not exist, insert the data
    $insertSql = "INSERT INTO student (stuId, stu_name, mob, country) VALUES ('$stuId', '$stuName', '$mob', '$country')";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
