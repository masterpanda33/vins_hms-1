<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeBlueEvaluationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_blue_evaluation_form', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('drill')->default('NULL');
            $table->string('actual_code_blue')->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_blue_evaluation_form');
    }
}
