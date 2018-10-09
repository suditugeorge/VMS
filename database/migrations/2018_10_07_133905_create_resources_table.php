<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resource_name', 50)->index();
            $table->string('resource_description', 100)->nullable();
            $table->boolean('can_add');
            $table->boolean('can_view');
            $table->boolean('can_edit');
            $table->boolean('can_delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->dropIndex(['resource_name']); // Drops index 'resource_name'
        });
        Schema::dropIfExists('resources');
    }
}
