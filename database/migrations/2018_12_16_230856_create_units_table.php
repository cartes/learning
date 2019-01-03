<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_unit');
            $table->string('rate_unit');
            $table->string('type_unit');
            $table->unsignedInteger('asignation_id')->nullable();
            $table->unsignedInteger('resident_id')->nullable();
            $table->foreign('resident_id')->references('id')->on('residents');
            $table->unsignedInteger('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->unsignedInteger('buildings_id');
            $table->foreign('buildings_id')->references('id')->on('buildings');
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
        Schema::dropIfExists('units');
        Schema::dropIfExists('assignations');
    }
}
