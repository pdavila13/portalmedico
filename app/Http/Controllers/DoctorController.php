<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function _construct() {

        $this->middleware('filter')->only(['index','show']);

    }

    public function index() {

        $doctors = DB::table('doctors')
        ->whereNull('down')
        //->whereNotNull('down')
        //->whereRaw("name like '%v%' or name like '%v%' ")
        ->paginate(5);
        /*
        $user = User::find(1);
        $user->assignRole('admin');
        */

        return view('doctors.index', ['doctors' => $doctors]);
    }

    public function show($id) {

        $user = User::find(1);

        if ($user->can('doctorView')) {
            $doctor = DB::table('doctors')->find($id);
            return view('doctors.show', ['doctor' => $doctor]);
        } else {
            return redirect()->route('doctors.index');
        }
    }

    public function create() {
        $user = User::find(1);

        if ($user->can('doctorCreate')) {
            return view('doctors.create');
        } else {
            return redirect()->route('doctors.index');
        }
    }

    public function store(DoctorRequest $request) {

        $doctor = $request->validated();
        $doctor['middleName'] = $request->input('middleName');
        $doctor['lastName'] = $request->input('lastName');
        $doctor['phone'] = $request->input('phone');
        $doctor['dni'] = $request->input('dni');
        $doctor['email'] = $request->input('email');

        DB::table('doctors')->insert($doctor);

        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente.')->with('code','0');
    }

    public function edit($id) {

        $doctor = DB::table('doctors')->find($id);

        return view('doctors.edit', ['doctor' => $doctor]);
    }

    public function update(DoctorRequest $request, $id) {

        $doctor = $request->validated();
        $doctor['middleName'] = $request->input('middleName');
        $doctor['lastName'] = $request->input('lastName');
        $doctor['phone'] = $request->input('phone');
        $doctor['dni'] = $request->input('dni');
        $doctor['email'] = $request->input('email');

        DB::table('doctors')->where('id', '=', $id)->update($doctor);

        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente.')->with('code','0');
    }

    public function softdelete($id) {

        DB::table('doctors')->where('id', '=', $id)->update(['down' => 'S']);

        return redirect()->route('doctors.index')->with('message', 'Doctor dado de baja correctamente.')->with('code','0');
    }

    public function destroy($id) {

        DB::table('doctors')->delete($id);

        return redirect()->route('doctors.index')->with('message', 'Doctor borrado correctamente.')->with('code','0');
    }
}
