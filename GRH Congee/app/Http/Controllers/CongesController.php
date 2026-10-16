<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conges;
use App\Models\Employee;


class CongesController extends Controller
{
    
    

    public function index()
{
    $conges = Conges::all();
    return view('conges.index', compact('conges'));
}


    public function create()
{
    $employees = Employee::all(); // Assuming Employee is the model for employees
    return view('conges.create', compact('employees'));
}

    
    
public function store(Request $request)
{
    $validatedData = $request->validate([
        'employee_name' => 'required|exists:employees,name',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
        'reason' => 'required|string',
    ]);

    // Get the employee name from the request
    $employeeName = $request->input('employee_name');

    // Create a new Conges instance and fill it with validated data
    $conges = new Conges();
    $conges->employee_name = $employeeName; // Assign the employee name
    $conges->fill($validatedData);
    $conges->save();

    // Optionally, you can redirect the user after creating the conges
    return redirect()->route('conges.index')->with('success', 'Congés enregistré avec succès.');
}




public function edit(Conges $conge)
{
    $employees = Employee::all(); // Assuming Employee is the model for employees
    return view('conges.edit', compact('conge', 'employees'));
}


   public function update(Request $request, Conges $conge)
{
    $validatedData = $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
        'reason' => 'required|string',
    ]);

    $conge->update($validatedData);

    return redirect()->route('conges.index')->with('success', 'Congé mis à jour avec succès.');
}

public function destroy(conges $conge)
{
    $conge->delete();

    return redirect()->route('conges.index')->with('success', 'Congé supprimé avec succès.');
}


}
