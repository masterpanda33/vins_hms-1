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
        $people = DB::table('people')->take(3)->select('id')->get()->toArray();

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            // 'name' => 'TournamentAdministrator',
            // 'user_image'=>'1.png',
            // 'email' => 'tadministrator@administrator.com', 'organisation' => 'Euro-Sportring',
            // 'password' => bcrypt('password'), 'token' => '1','timezone' => '', 'settings' => '',
            // 'is_active'=>1,
            // 'is_verified'=>1,
            // 'is_desktop_user'=>1,
            // 'is_mobile_user'=>1,
            // 'registered_from'=>1,
            // 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

            // ['person_id' => '4','username' => 'moderator@moderator.com',
            // 'name' => 'moderator', 'email' => 'moderator@moderator.com', 'organisation' => 'Euro-Sportring',
            // 'user_image'=>'2.png',
            // 'is_active'=>0,
            // 'is_verified'=>1,
            // 'is_desktop_user'=>1,
            // 'is_mobile_user'=>1,
            // 'registered_from'=>1,
            // 'password' => bcrypt('password'), 'token' => '1','timezone' => '', 'settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

            // ['person_id' => '2', 'username' => 'master@master.com',
            // 'name' => 'master', 'email' => 'master@master.com', 'organisation' => 'Euro-Sportring',
            // 'user_image'=>'3.png',
            // 'is_active'=>0,
            // 'is_verified'=>1,
            // 'is_desktop_user'=>1,
            // 'is_mobile_user'=>1,
            // 'registered_from'=>1,
            // 'password' => bcrypt('password'), 'token' => '1', 'timezone' => '', 'settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ['person_id' => '1', 'username' => 'rstenson@aecordigital.com',
            'name' => 'Super Admin', 'email' => 'rstenson@aecordigital.com', 'organisation' => 'Euro-Sportring',
            'is_active'=>1,
            'is_verified'=>1,
            'is_desktop_user'=>1,
            'is_mobile_user'=>1,
            'registered_from'=>1,
            'password' => bcrypt('password'), 'token' => '1','timezone' => '','settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ['person_id' => '2', 'username' => 'a.mens@euro-sportring.org',
            'name' => 'Albert Mens', 'email' => 'a.mens@euro-sportring.org', 'organisation' => 'Euro-Sportring',
            'is_active'=>1,
            'is_verified'=>1,
            'is_desktop_user'=>1,
            'is_mobile_user'=>1,
            'registered_from'=>1,
            'password' => bcrypt('password'), 'token' => '1','timezone' => '','settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ['person_id' => '3', 'username' => 'ndeopura@aecordigital.com',
            'name' => 'Nitin Deopura', 'email' => 'ndeopura@aecordigital.com', 'organisation' => 'Euro-Sportring',
            'is_active'=>1,
            'is_verified'=>1,
            'is_desktop_user'=>1,
            'is_mobile_user'=>1,
            'registered_from'=>1,
            'password' => bcrypt('password'), 'token' => '1','timezone' => '','settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]

            // ,
            // ['person_id' => '5', 'username' => 'knayak@aecordigital.com',
            // 'name' => 'SuperAdmin', 'email' => 'knayak@aecordigital.com', 'organisation' => 'Euro-Sportring',
            // 'user_image'=>'5.png',
            // 'is_active'=>1,
            // 'is_verified'=>1,
            // 'is_desktop_user'=>1,
            // 'is_mobile_user'=>1,
            // 'registered_from'=>1,
            // 'password' => bcrypt('password'), 'token' => '1','timezone' => '','settings' => '', 'remember_token' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]

        ]);
    }
}
