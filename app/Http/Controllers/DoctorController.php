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
}
