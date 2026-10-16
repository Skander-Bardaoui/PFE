<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
            $request->validate([
                'name' => 'required',
                'position' => 'required',
                'email' => 'required|email|unique:employees',
                'mobile'=> 'nullable|string'
                // Add validation rules for other fields here...
            ]);
    
            Employee::create($request->all());
    
            return redirect()->route('employees.index')
                ->with('success', 'Employee created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'mobile' => 'required',
            // Add validation rules for other fields here...
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }

   /* public function storeConge(Request $request)
    {
        // Validate the form data
        $request->validate([
            'employee_id' => 'required', // Add any other validation rules as needed
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            // Add validation rules for other form fields here...
        ]);

        // Create a new leave request instance
        $conge = new Conge();
        $conge->employee_id = $request->employee_id;
        $conge->start_date = $request->start_date;
        $conge->end_date = $request->end_date;
        // Assign other form fields to the Conge model properties here...

        // Save the leave request to the database
        $conge->save();

        // Redirect the user back to the index page with a success message
        return redirect()->route('conges.conges')->with('success', 'Leave request submitted successfully.');
    }
*/
}
