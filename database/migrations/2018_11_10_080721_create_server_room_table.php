<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('inv_number');
            $table->string('name');
            $table->date('date');
            $table->string('marka');
            $table->string('komplekt');
            $table->string('ser_number')->nullable();
            $table->string('naliche')->nullable();
            $table->timestamps();
        });

        Schema::table('server_room', function ( Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_room');
    }
}
