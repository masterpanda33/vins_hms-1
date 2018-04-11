<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class roleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role_user')->truncate();

        DB::table('role_user')->insert([
          ['user_id' => '1',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
