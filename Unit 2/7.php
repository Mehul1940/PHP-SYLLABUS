<!-- 7.Create a form contaning one input field(Pro_id) and a Delete button. When the user
clicks on the Delete button a PHP script should get executed and should delete the
record of the product for the Pro_id specified.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>

    <h2>Delete Product</h2>
    <form action="delete.php" method="POST">
        <label for="Pro_id">Product ID:</label>
        <input type="text" name="Pro_id" required><br><br>

        <input type="submit" value="Delete">
    </form>

</body>
</html>
