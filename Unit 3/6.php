<!-- 6.Write a program to validate a blank field and also validate the length of the data
entered(i.e. minimum lenght of 5). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script>
        // Function to validate the form
        function validateForm() {
            // Get the value of the input field
            var name = document.getElementById("name").value;

            // Check if the field is blank
            if (name == "") {
                alert("Name field cannot be blank.");
                return false; // Prevent form submission
            }

            // Check if the length of the entered data is less than 5 characters
            if (name.length < 5) {
                alert("Name must be at least 5 characters long.");
                return false; // Prevent form submission
            }

            // If validation passes
            alert("Form submitted successfully.");
            return true; // Allow form submission
        }
    </script>
</head>
<body>

    <h2>Form Validation Example</h2>

    <form onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>

