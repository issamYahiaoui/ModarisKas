<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingChoiceTeachingOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_choice_teaching_option', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teaching_option_id')->unsigned()->nullable();
            $table->integer('teaching_choice_id')->unsigned()->nullable();
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
        Schema::dropIfExists('teaching_choice_teaching_option');
    }
}
