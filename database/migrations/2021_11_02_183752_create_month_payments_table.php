<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('January')->nullable();
            $table->integer('February')->nullable();
            $table->integer('March')->nullable();
            $table->integer('April')->nullable();
            $table->integer('May')->nullable();
            $table->integer('June')->nullable();
            $table->integer('July')->nullable();
            $table->integer('August')->nullable();
            $table->integer('September')->nullable();
            $table->integer('October')->nullable();
            $table->integer('November')->nullable();
            $table->integer('December')->nullable();
            
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
        Schema::dropIfExists('month_payments');
    }
}
