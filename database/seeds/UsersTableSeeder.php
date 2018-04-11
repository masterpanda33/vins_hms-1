<?php

use Illuminate\Database\Seeder;
use Laraspace\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'test',
            'password'=>bcrypt('123456'),
            'department'=>'ONCO',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'bqwIrma2t9wDUlSBgg6e6r1P5HRvPN',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'test',
            'email'=>'test@gmail.com'],

        ]);
    }
}
