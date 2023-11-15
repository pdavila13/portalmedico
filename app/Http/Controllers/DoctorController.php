<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctors = [
            [1, 'Paolo', 'Davila', 'Neurólogo'],
            [2, 'Gabriel', 'Bazalar', 'Cardiólogo']
        ];
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
}
