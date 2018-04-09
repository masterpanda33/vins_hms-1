<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class nutritionalScreeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nutritional_screening')->truncate();

        DB::table('nutritional_screening')->insert([
          ['type_of_diet' => '10/04/2018',
            'date_of_screening' => '10/04/2018',
            'weight_loss' => 'No',
            'emanciated' => 'no',
            'well_oriented' => 'yes',
            'mode_of_feeling' => 'mouth',
            'food_to_avoid' => 'spicy',
            'score' => '12',
            'nursing_care_plan' => 'best',
            'assessment_done_by' => 'Dr Alice',
            'datetime' => NULL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
