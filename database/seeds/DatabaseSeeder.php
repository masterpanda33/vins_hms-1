<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         $this->call(appointmentBookSeeder::class);
         $this->call(codeBlueEvaluationFormSeeder::class);
         $this->call(doctorsDailyNotesSeeder::class);
         $this->call(formsSeeder::class);
         $this->call(ipdDetailsSeeder::class);
         $this->call(nutritionalScreeningSeeder::class);
         $this->call(patientDetailsSeeder::class);
         $this->call(rolesSeeder::class);
         $this->call(roleUserSeeder::class);
         //$this->call(UsersTableSeeder::class);

         DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
