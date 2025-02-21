<!-- 5.Create an array named $student, that sores 5 element bounded to a different keys and
access the same using the key element. -->

<?php

// Creating an associative array
$student = [
    "name" => "John Doe",
    "age" => 20,
    "grade" => "A",
    "email" => "john.doe@example.com",
    "course" => "Computer Science"
];

// Accessing values using keys
echo "Student Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Grade: " . $student["grade"] . "<br>";
echo "Email: " . $student["email"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
?>