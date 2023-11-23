<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(5);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient = [];
        $patient['name'] = $request->input('name');
        $patient['middleName'] = $request->input('middleName');
        $patient['lastName'] = $request->input('lastName');
        $patient['email'] = $request->input('email');

        $patients = new Patient($patient);
        $patients->saveOrFail();

        return redirect()->route('patients.index')->with('message', 'Paciente guardado correctamente.')->with('code','0');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->name = $request->input('name');
        $patient->middleName = $request->input('middleName');
        $patient->lastName = $request->input('lastName');
        $patient->email = $request->input('email');

        $patient->saveOrFail();

        return redirect()->route('patients.index')->with('message', 'Paciente guardado correctamente.')->with('code','0');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->deleteOrFail();
        return redirect()->route('patients.index')->with('message', 'Paciente borrado correctamente.')->with('code','0');
    }
}
