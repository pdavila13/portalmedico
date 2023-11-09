<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index ($name, $surname) {
        return view('inicio', ['name' => $name, 'surname' => $surname]);
    }

    public function end() {
        return view ('fin');
    }

    public function save (Request $request) {
        if ($request->hasfile('img')) {
            $ruta = $request->file('img')->store('public/images');
        }
        $url = Storage::url($ruta);
        return "Fichero guardado en $ruta <br> $url";
    }
}
