<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class codeBlueEvaluationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('code_blue_evaluation_form')->truncate();

        DB::table('code_blue_evaluation_form')->insert([
          ['drill' => 'Drill 6',
          'actual_code_blue' => 'Yes',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
        ]);
    }
}
