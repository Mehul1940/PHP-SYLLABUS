<!-- 10.Write a program to count the total number of times a specific value appears in an
array. -->

<?php

$numbers = [2, 5, 8, 2, 3, 5, 2, 9, 5, 2]; // Array
$search_value = 2; // Value to count

// Count occurrences using array_count_values()
$count = array_count_values($numbers)[$search_value] ?? 0;

echo "The number $search_value appears $count times.";

?>
