<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('address')->nullable();
            $table->string('ph_no')->nullable();
            $table->string('mob_no')->nullable();
            $table->text('references')->nullable();
            $table->string('consultant')->nullable();
            $table->string('case_type')->nullable();
            $table->dateTime('appointment_datetime')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_details');
    }
}
