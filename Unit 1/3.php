<!-- 3.Create a program in PHP to demonstrate the use of If … Else and switch statements. -->

<?php

$age = 10;

// If-Else statement
if ($age > 18) {
    echo "You can vote";
} else {
    echo "You can't vote";
}

echo "<br>"; // Line break for better output formatting

$day = 7; // Changed to an integer

// Switch statement
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}

?>
