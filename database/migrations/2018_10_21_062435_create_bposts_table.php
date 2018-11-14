<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titlu', 125);
            $table->boolean('active')->default(false);
            $table->string('code', 125)->index();
            $table->boolean('are_imagine');
            $table->text('continut');
            $table->unsignedInteger('bcategory_id');
            $table->unsignedInteger('author_id');

            $table->foreign('bcategory_id')->references('id')->on('bcategories');
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bposts', function (Blueprint $table) {
            $table->dropIndex(['code']); // Drops index 'code'
            $table->dropForeign('bposts_bcategory_id_foreign');
            $table->dropForeign('bposts_author_id_foreign');
        });
        Schema::dropIfExists('bposts');
    }
}
