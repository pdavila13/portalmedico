<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function index() {
        /*
        $doctors = [
            [1, 'Paolo', 'Davila', 'Neurólogo'],
            [2, 'Gabriel', 'Bazalar', 'Cardiólogo']
        ];
        */

        $doctors = DB::table('doctors')->get();

        return view('doctors.index', ['doctors' => $doctors]);
    }

    public function show($id) {
        $doctors = [
            [1, 'Paolo', 'Davila', 'Neurólogo'],
            [2, 'Gabriel', 'Bazalar', 'Cardiólogo']
        ];

        $key = -1;
        $i = 0;
        while (($key < 0) && ($i < count ($doctors))) {
            if($doctors[$i][0] == $id) {
                $key = $i;
            }
            $i++;
        }

        return view('doctors.show', ['doctor' => $doctors[$key]]);
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(DoctorRequest $request) {
        /*
        // Método 1: Obtener datos de forma manual mediante array
        $doctor = [
            'name' => $request->name,
            'middleName' => $request->input('middleName'),

        ];
        */

        //Método 2: Devuelve los campos validados
        $doctor = $request->validated();
        $doctor['middleName'] = $request->input('middleName');
        $doctor['lastName'] = $request->input('lastName');
        $doctor['speciality'] = $request->input('speciality');
        $doctor['phone'] = $request->input('phone');
        $doctor['dni'] = $request->input('dni');
        $doctor['email'] = $request->input('email');

        DB::table('doctors')->insert($doctor);

        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente.')->with('code','0');
    }

    public function edit($id) {
        $doctors = [
            [1, 'Paolo', 'Davila', 'Neurólogo'],
            [2, 'Gabriel', 'Bazalar', 'Cardiólogo']
        ];

        $key = -1;
        $i = 0;
        while (($key < 0) && ($i < count ($doctors))) {
            if($doctors[$i][0] == $id) {
                $key = $i;
            }
            $i++;
        }

        return view('doctors.edit', ['doctor' => $doctors[$key]]);
    }

    public function update(DoctorRequest $request, $id) {
        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente.')->with('code','0');
    }
    
    public function destroy($id) {
        return redirect()->route('doctors.index')->with('message', 'Doctor borrado correctamente.')->with('code','0');
    }
}