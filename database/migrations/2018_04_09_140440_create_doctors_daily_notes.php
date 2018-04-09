<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsDailyNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_daily_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('consultant')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('c_o')->nullable();
            $table->string('pulse')->nullable();
            $table->integer('temp')->nullable();
            $table->integer('bp')->nullable();
            $table->integer('resp')->nullable();
            $table->integer('pain')->nullable();
            $table->string('gcs')->nullable();
            $table->string('pupils')->nullable();
            $table->string('more_deficit')->nullable();
            $table->string('other_se')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors_daily_notes');
    }
}
