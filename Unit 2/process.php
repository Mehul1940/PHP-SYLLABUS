<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h2>Welcome, $name!</h2>";
    echo "<p>Your email ID is: $email</p>";


?>