<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned(10);
            $table->string('first_name');
            $table->string('password');
            $table->string('department');
            $table->string('user_type');
            $table->string('mobile_no');
            $table->text('address');
            $table->string('user_image');
            $table->string('token');
            $table->tinyInteger('is_verified');
            $table->string('timezone');
            $table->string('last_login_time');
            $table->tinyInteger('is_active');
            $table->timestamp('last_active_time');
            $table->tinyInteger('is_mobile_user');
            $table->string('deleted_at');
            $table->string('last_name');
            $table->string('email');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
