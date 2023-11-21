<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        DB::table('patients')->insert([
            'name'=>'Paolo',
            'middleName'=>'Davila',
            'lastName'=>'Bazalar',
            'email'=>'pdavila@exemple.com'
        ]);
        */

        //Creación de factories
        Patient::factory()->count(10)->create();
    }
}
