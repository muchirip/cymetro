<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventVansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_vans', function (Blueprint $table) {
            $table->bigInteger('vans_id')->unsigned();
            $table->bigInteger('events_id')->unsigned();
            $table->timestamps();
            $table->foreign('events_id')->references('id')->on('events');
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
        Schema::dropIfExists('event_vans');
    }
}