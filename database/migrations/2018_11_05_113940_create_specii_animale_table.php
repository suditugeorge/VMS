<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciiAnimaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specii_animale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('code', 50)->index();
            $table->boolean('active')->default(false);
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specii_animale', function (Blueprint $table) {
            $table->dropIndex(['code']); // Drops index 'code'
        });
        Schema::dropIfExists('specii_animale');
    }
}
