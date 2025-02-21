<!-- 8.Write a program that checks a particular stuId already exits in the
student(stuId,stu_name,mob,country) table or not. If stuId exists then display a message
"User Already Exit. Try another stuId". If it does not exits then add the data in the
student table.Implement using AJAX. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student ID Check</title>
    <script>
        // Function to check if stuId exists and insert data
        function checkStuId() {
            var stuId = document.getElementById("stuId").value;
            var stuName = document.getElementById("stuName").value;
            var mob = document.getElementById("mob").value;
            var country = document.getElementById("country").value;

            // Create AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "checkStuId.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Sending data to the PHP script
            xhr.send("stuId=" + stuId + "&stuName=" + stuName + "&mob=" + mob + "&country=" + country);

            // Handle the response from PHP
            xhr.onload = function() {
                if (xhr.status == 200) {
                    var response = xhr.responseText;
                    document.getElementById("message").innerHTML = response;
                }
            };
        }
    </script>
</head>
<body>

    <h2>Check if Student ID Exists</h2>

    <form onsubmit="event.preventDefault(); checkStuId();">
        <label for="stuId">Student ID:</label>
        <input type="text" id="stuId" name="stuId"><br><br>
        <label for="stuName">Student Name:</label>
        <input type="text" id="stuName" name="stuName"><br><br>
        <label for="mob">Mobile Number:</label>
        <input type="text" id="mob" name="mob"><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br><br>
        <input type="submit" value="Submit">
    </form>

    <div id="message"></div>

</body>
</html>
