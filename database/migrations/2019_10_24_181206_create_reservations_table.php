<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
			$table->date('date_in');
			$table->date('date_out');
			$table->bigInteger('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');
			$table->bigInteger('room_id')->unsigned();
			$table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('reservations');
    }
}
