<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('buildings_id');
            $table->foreign('buildings_id')->references('id')->on('buildings');
            $table->string('bank');
            $table->string('number');
            $table->enum('type', [\App\Account::VISTA, \App\Account::CORRIENTE, \App\Account::AHORRO, \App\Account::OTHER]);
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
        Schema::dropIfExists('accounts');
    }
}
