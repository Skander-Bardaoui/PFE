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
            // Add validation rules for other fields here...
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
   /**
 * Remove the specified resource from storage.
 */
public function destroy(Employee $employee)
{
    $employee->delete();

    return redirect()->route('employees.index')
        ->with('success', 'Employee deleted successfully.');
}

}
