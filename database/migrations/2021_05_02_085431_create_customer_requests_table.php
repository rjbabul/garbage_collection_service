<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_requests', function (Blueprint $table) {
            $table->id();
            $table->text('name' )->nullable();
            $table->text('email')->nullable(); 
            $table->text('cont_no')->nullable();
            $table->text('password')->nullable();
            $table->text('Dist')->nullable();
            $table->text('Thana')->nullable();
            $table->text('lat')->nullable();
            $table->text('long')->nullable();
            $table->text('post')->nullable();
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
        Schema::dropIfExists('customer_requests');
    }
}
