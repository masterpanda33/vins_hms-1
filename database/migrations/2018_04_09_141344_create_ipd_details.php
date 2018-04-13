<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpdDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipd_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->nullable();
            $table->dateTime('admit_datetime')->nullable();
            $table->dateTime('discharge_datetime')->nullable();
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
        Schema::dropIfExists('ipd_details');
    }
}
