<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionalScreening extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_screening', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type_of_diet')->nullable();
            $table->string('date_of_screening')->nullable();
            $table->string('weight_loss')->nullable();
            $table->string('emanciated')->nullable();
            $table->string('well_oriented')->nullable();
            $table->string('mode_of_feeling')->nullable();
            $table->string('food_to_avoid')->nullable();
            $table->string('score')->nullable();
            $table->string('nursing_care_plan')->nullable();
            $table->string('assessment_done_by')->nullable();
            $table->dateTime('datetime')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutritional_screening');
    }
}
