<?php
if (isset($_POST['str'])) {
    $str = $_POST['str'];
    // Convert the string to uppercase
    echo strtoupper($str);
}
?>
