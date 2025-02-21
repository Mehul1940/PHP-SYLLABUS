<?php
// Check if 'product' and 'features' are received via POST
if (isset($_POST['product'])) {
    $product = $_POST['product'];
    $features = isset($_POST['features']) ? $_POST['features'] : '';

    // Return a message with the selected product and features
    echo "You selected: <b>$product</b><br>";

    if (!empty($features)) {
        echo "Features: <b>$features</b>";
    } else {
        echo "No features selected.";
    }
} else {
    echo "No product selected.";
}
?>
