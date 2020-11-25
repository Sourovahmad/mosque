<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();




            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->longText('address')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('cell_phone')->nullable();





            $table->string('payment_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('donation_type')->nullable();
            $table->double('amount',18,2)->default(0);
            $table->string('currency')->default('usd');
            $table->string('session')->nullable();
            
            $table->string('payment_status')->default('due');
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
        Schema::dropIfExists('donations');
    }
}
