<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('events_id')->unsigned();
            $table->bigInteger('vanseats_id')->unsigned();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('vanseats_id')->references('id')->on('vanseats');
            $table->foreign('events_id')->references('id')->on('events');
            $table->unique(['users_id', 'events_id', 'vanseats_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
