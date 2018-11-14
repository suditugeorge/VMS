<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_races', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('code', 50)->index();
            $table->boolean('active')->default(false);
            $table->string('description')->nullable();

            $table->unsignedInteger('animal_species_id');
            $table->foreign('animal_species_id')->references('id')->on('specii_animale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animal_races', function (Blueprint $table) {
            $table->dropIndex(['code']); // Drops index 'code'
            $table->dropForeign('animal_races_animal_species_id_foreign');
        });
        Schema::dropIfExists('animal_races');
    }
}
