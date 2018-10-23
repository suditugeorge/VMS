<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bcategory_name', 50)->index();
            $table->integer('bcategory_parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bcategories', function (Blueprint $table) {
            $table->dropIndex(['bcategory_name']); // Drops index 'bcategory_name'
        });
        Schema::dropIfExists('bcategories');
    }
}
