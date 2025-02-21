<!-- 5.Create a form contaning one input field(Pro_id) and a search button. When the user
clicks on the Search button a PHP script should get executed and should display the
details of the product for the Pro_id specified.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Product</title>
</head>
<body>

    <h2>Search Product by ID</h2>
    <form action="search.php" method="POST">
        <label for="Pro_id">Product ID:</label>
        <input type="text" name="Pro_id" required><br><br>
        <input type="submit" value="Search">
    </form>

</body>
</html>
