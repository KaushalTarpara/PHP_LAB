<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Technical and Cultural Fair Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="#" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required><br><br>

        <label for="roll_number">Roll Number:</label>
        <input type="text" id="roll_number" name="roll_number" required><br><br>

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="tel" id="contact_number" name="contact_number" required><br><br>

        <label for="subject_of_interest">Subject of Interest:</label>
        <select id="subject_of_interest" name="subject_of_interest" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Cultural">Cultural</option>
            <option value="Web Publishing">Web Publishing</option>
            <option value="Technical">Technical</option>
            <option value="Finance">Finance</option>
            <option value="Publication">Publication</option>
            <option value="Reception and Hosting">Reception and Hosting</option>
        </select><br><br>

        <label for="past_experience">Past Experience (if any):</label><br>
        <textarea id="past_experience" name="past_experience" rows="4" cols="50"></textarea><br><br>

        <label for="signature">Signature:</label>
        <input type="text" id="signature" name="signature" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
