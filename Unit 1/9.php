<!-- 9.Write a program in PHP to sort the array of given 5 numbers in ascending and
descending order -->

<?php

$num = [1, 4, 3, 2, 5];

// Sort in ascending order
sort($num);
echo "Ascending Order: " . implode(", ", $num) . "<br>";

// Sort in descending order
rsort($num);
echo "Descending Order: " . implode(", ", $num) . "<br>";

?>
