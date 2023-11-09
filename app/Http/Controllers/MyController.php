<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index ($name, $surname) {
        return view('inicio', ['name' => $name, 'surname' => $surname]);
    }

    public function end() {
        return view ('fin');
    }
}
