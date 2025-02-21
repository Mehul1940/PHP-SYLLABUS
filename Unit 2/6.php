<!-- 6. Create a form contaning two input fields (Pro_id, QOH) and Update button. When the
user clicks on the Update button the quantity of the Pro_id specified should get updated
using a PHP script.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Quantity</title>
</head>
<body>

    <h2>Update Product Quantity</h2>
    <form action="update.php" method="POST">
        <label for="Pro_id">Product ID:</label>
        <input type="text" name="Pro_id" required><br><br>

        <label for="QOH">Quantity on Hand (QOH):</label>
        <input type="text" name="QOH" required><br><br>

        <input type="submit" value="Update">
    </form>

</body>
</html>
