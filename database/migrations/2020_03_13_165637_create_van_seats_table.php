<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanseatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanseats', function (Blueprint $table) {
            $table->id();
            $table->integer('seat_number')->unique();
            $table->bigInteger('vans_id')->unsigned();
            $table->timestamps();
            $table->foreign('vans_id')->references('id')->on('vans');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanseats');
    }
}
