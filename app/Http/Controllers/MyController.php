<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index ($name) {
        return view('inicio', ['name' => $name]);
    }

    public function end() {
        return view ('fin');
    }
}
