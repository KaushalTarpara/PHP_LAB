<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        Employee::create([
            'name' => $request->name,
            'department' => $request->department,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($employee_id)
    {
        $employee = Employee::find($employee_id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $employee_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $employee = Employee::find($employee_id);
        $employee->update([
            'name' => $request->name,
            'department' => $request->department,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($employee_id)
    {
        $employee = Employee::find($employee_id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
