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
            $table->string('first_name')->nullable();
            $table->string('password')->nullable();
            $table->string('department')->nullable();
            $table->string('user_type')->nullable();
            $table->string('mobile_no')->nullable();
            $table->text('address')->nullable();
            $table->string('user_image')->nullable();
            $table->string('token')->nullable();
            $table->tinyInteger('is_verified')->nullable();
            $table->string('timezone')->nullable();
            $table->string('last_login_time')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamp('last_active_time')->nullable();
            $table->tinyInteger('is_mobile_user')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
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
