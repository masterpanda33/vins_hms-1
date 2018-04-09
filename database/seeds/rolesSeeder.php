<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
          ['name' => 'doctor',
          'slug' => 'doctor',
          'description'=>'doctor',
          'level'=>'2',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
