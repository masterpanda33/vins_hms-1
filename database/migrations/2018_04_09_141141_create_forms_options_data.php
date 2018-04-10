<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsOptionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_options_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->nullable();
            $table->integer('patient_id')->nullable();
            $table->integer('ipd_no')->nullable();
            $table->string('form_key')->nullable();
            $table->text('form_value')->nullable();
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
        Schema::dropIfExists('forms_options_data');
    }
}
