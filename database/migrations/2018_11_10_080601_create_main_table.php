<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('inv_number')->unique()->nullable();
            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->string('komplekt')->nullable();
            $table->integer('kabinet')->nullable();
            $table->string('ser_number')->unique()->nullable();
            $table->string('naliche')->nullable();
            $table->string('user_name')->nullable();
            $table->string('baza')->nullable();
            $table->timestamps();
        });

        Schema::table('main', function ( Blueprint $table) {
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
        Schema::dropIfExists('main');
    }
}
