<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="department">Department:</label>
        <input type="text" name="department" required><br>
        <button type="submit">Add Employee</button>
    </form>
</body>
</html>
