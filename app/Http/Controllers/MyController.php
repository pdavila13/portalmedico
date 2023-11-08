<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index () {
        return view('inicio');
    }

    public function end() {
        return view ('fin');
    }
}
