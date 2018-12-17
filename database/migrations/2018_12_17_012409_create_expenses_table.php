<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function(Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('rut');
           $table->string('address')->nullable();
           $table->text('description')->nullable();
           $table->timestamps();
        });
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document');
            $table->unsignedInteger('providers_id');
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->unsignedInteger('buildings_id');
            $table->foreign('buildings_id')->references('id')->on('buildings');
            $table->timestamp('expense_date');
            $table->integer('value');
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
        Schema::dropIfExists('providers');
        Schema::dropIfExists('expenses');
    }
}
