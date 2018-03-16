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
            $table->integer('person_id')->unsigned()->index();
            $table->foreign('person_id')->references('id')->on('people');
            $table->string('username');
            $table->string('user_image')->nullable();
            $table->string('name',60);
            $table->string('email')->unique();
            $table->string('organisation')->nullable();
            $table->string('password',60)->nullable();
            $table->string('token')->nullable();
            $table->tinyInteger('is_verified')->nullable();
            $table->string('timezone',120)->nullable();
            $table->tinyInteger('is_online')->nullable();
            $table->string('last_login_time')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamp('last_active_time')->nullable();
            $table->tinyInteger('is_blocked')->nullable();
            $table->tinyInteger('is_mobile_user')->default(0)->nullable();
            $table->string('blocked_time')->nullable();
            $table->integer('blocker_id')->nullable();
            $table->string('settings')->nullable();
            $table->string('fcm_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
