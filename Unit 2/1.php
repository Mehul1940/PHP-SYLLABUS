<!-- 1.Create a form containing two input fields (Name, Email_ID) and a submit button.
When the user clicks on submit button, the form data should be sent for processing to
PHP file ,which should display the welcome message with the email_id on the PHP page.
Form data should be sent by HTTP GET/POST method.  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="process.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Email Id: <input type="email" name="email" required><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>

