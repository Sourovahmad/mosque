<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salats', function (Blueprint $table) {
            $table->id();
            $table->time('fajr') ;
            $table->time('dhuhr') ;
            $table->time('jumma') ;
            $table->time('asr') ;
            $table->time('maghrib') ;
            $table->time('isha') ;
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
        Schema::dropIfExists('salats');
    }
}
