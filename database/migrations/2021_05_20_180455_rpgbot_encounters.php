<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RpgbotEncounters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();

        });

            // Links 'encounters' with 'characters'
        Schema::create('character_encounter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('character_id')->nullable();
            $table->unsignedBigInteger('encounter_id')->nullable();
            $table->timestamps();

            // Ensures a unique value (no duplicates) and deletes relevant entry when 'character' or 'encounter' is deleted
            $table->unique(['character_id', 'encounter_id']);
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->foreign('encounter_id')->references('id')->on('encounters')->onDelete('cascade');

        });

    }

    public function down()
    {
        Schema::dropIfExists('character_encounter');
        Schema::dropIfExists('encounters');


    }
}
