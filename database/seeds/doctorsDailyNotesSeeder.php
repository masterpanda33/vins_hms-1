<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class doctorsDailyNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors_daily_notes')->truncate();

        DB::table('doctors_daily_notes')->insert([
          ['name' => 'Bob',
            'age' => 14,
            'gender' => 'M',
            'consultant' => 'Dr. Alice',
            'datetime' => NULL,
            'c_o' => 'yes',
            'pulse' => '68',
            'temp' => 98,
            'bp' => 110,
            'resp' => 4,
            'pain' => '5',
            'gcs' => '1',
            'pupils' => 'ok',
            'more_deficit' => 'no',
            'other_se' => 'no',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
