<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_book', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('appointment_date')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('consultant_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_book');
    }
}
