<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        // foreach ($employees as $employee) {
        //     echo $employee->nom . "<br>";
        // }
        return view('home', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $emplo = Employee::create(
        //     [
        //         "nom" => $request->nom,
        //         "prenom" => $request->prenom,
        //         "email" => $request->email,
        //         "poste" => $request->poste
        //     ]
        // );
        $emplo = new Employee ;
        $emplo->nom = $request->nom;
        $emplo->prenom = $request->prenom;
        $emplo->email = $request->email;
        $emplo->poste =  $request->poste ;
        $emplo->save();
         
        return redirect()->route('employees.index');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->only("nom","prenom","email","poste"));
        return redirect()->route('employees.show', $employee->id)->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
}
