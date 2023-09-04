<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form - Social Media Platform</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form id="registrationForm">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="tel" id="mobile_number" name="mobile_number" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <h2>Submitted Information</h2>
    <p id="submittedInfo"></p>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            
            const submittedInfo = {};
            formData.forEach((value, key) => {
                submittedInfo[key] = value;
            });

            
            const submittedInfoElement = document.getElementById('submittedInfo');
            submittedInfoElement.textContent = JSON.stringify(submittedInfo, null, 2);
        });
    </script>
</body>
</html>
