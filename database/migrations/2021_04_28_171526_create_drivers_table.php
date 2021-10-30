<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->text('name' )->nullable();
            $table->text('email')->nullable(); 
            $table->text('cont_no')->nullable();
            $table->text('driverRegiNo')->nullable();
            $table->text('password')->nullable();
            $table->integer('bus_no')->nullable();
            $table->text('area')->nullable();
            $table->integer('rank')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
