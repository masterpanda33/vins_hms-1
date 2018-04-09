<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class appointmentBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('appointment_book')->truncate();

        DB::table('appointment_book')->insert([
          ['appointment_date' => '',
          'patient_name' => 'Bob',
          'contact_no'=>'9991112512',
          'consultant_name'=>'Dr. Alice',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
