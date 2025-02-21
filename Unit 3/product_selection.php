<?php
if (isset($_POST['product'])) {
    $product = $_POST['product'];
    // Process the selected product and send a response
    echo "You selected: " . $product;
}
?>
