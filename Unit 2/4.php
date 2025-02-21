<!-- 4.Create a form contaning four input fields(Pro_id, Pro_name, Pro_price, QOH) and
Submit button. When the user clicks on the submit button an PHP script should be
executed which inserts the record in the product table.  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
</head>

<body>

    <h2>Insert Product Details</h2>
    <form action="insert.php" method="POST">
        <label for="Pro_id">Product ID:</label>
        <input type="text" name="Pro_id" required><br><br>

        <label for="Pro_name">Product Name:</label>
        <input type="text" name="Pro_name" required><br><br>

        <label for="Pro_price">Product Price:</label>
        <input type="text" name="Pro_price" required><br><br>

        <label for="QOH">Quantity on Hand (QOH):</label>
        <input type="text" name="QOH" required><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>