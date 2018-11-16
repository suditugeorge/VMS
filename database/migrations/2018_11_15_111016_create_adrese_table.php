<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdreseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrese', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_postal', 20)->nullable();
            $table->text('adresa_1')->nullable();
            $table->text('adresa_2')->nullable();
            $table->string('telefon', 15)->nullable();

            $table->unsignedInteger('tara_id');
            $table->foreign('tara_id')->references('id')->on('tari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adrese', function (Blueprint $table) {
            $table->dropForeign('adrese_tara_id_foreign');
        });
        Schema::dropIfExists('adrese');
    }
}
