<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>
    <ul>
        @foreach($employees as $employee)
            <li>
                {{ $employee->name }} - {{ $employee->department }}
                <a href="{{ route('employees.edit', $employee->employee_id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('employees.create') }}">Add Employee</a>
</body>
</html>
