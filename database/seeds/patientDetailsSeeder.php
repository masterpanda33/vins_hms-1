<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class patientDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('patient_details')->truncate();

        DB::table('patient_details')->insert([
          ['first_name' => 'Bob',
            'middle_name' => '',
            'last_name' => 'Marley',
            'dob' => '10/04/2018',
            'gender' => 'M',
            'address' => 'Street 4',
            'ph_no' => '1233551123',
            'mob_no' => '1233551123',
            'references' => 'Dr Alice',
            'consultant' => 'Dr. Gregory',
            'case_type' => 'New',
            'appointment_datetime' => NULL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
