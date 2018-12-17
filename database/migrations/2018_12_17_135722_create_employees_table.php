<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', [\App\Employee::AFP, \App\Employee::ISAPRE, \App\Employee::CCAF, \App\Employee::OTHER]);
        });
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->unsignedInteger('prevision_id')->nullable();
            $table->foreign('prevision_id')->references('id')->on('socials');
            $table->unsignedInteger('afp_id')->nullable();
            $table->foreign('afp_id')->references('id')->on('socials');
            $table->unsignedInteger('ccaf_id')->nullable();
            $table->foreign('ccaf_id')->references('id')->on('socials');
            $table->timestamp('date_in');
            $table->integer('vacations');
            $table->integer('charges')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
