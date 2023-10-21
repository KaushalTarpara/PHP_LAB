<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->employee_id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}" required><br>
        <label for="department">Department:</label>
        <input type="text" name="department" value="{{ $employee->department }}" required><br>
        <button type="submit">Update Employee</button>
    </form>
</body>
</html>
