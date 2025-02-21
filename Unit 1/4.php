<!-- 4. Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement. -->

<?php

$sub = [1, 2, 3, 4, 5];

// Using for loop
echo "Using for loop: ";
for ($i = 0; $i < count($sub); $i++) {
    echo $sub[$i] . " ";
}

echo "<br>";

// Using foreach loop
echo "Using foreach loop: ";
foreach ($sub as $s) {
    echo $s . " ";
}

?>
