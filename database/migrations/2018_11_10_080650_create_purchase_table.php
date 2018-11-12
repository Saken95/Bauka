<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('postabshik');
            $table->date('date_end');
            $table->string('number_esp');
            $table->date('date_begin');
            $table->integer('count');
            $table->string('istechenia_penia');
            $table->string('price');
            $table->string('summa');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::table('purchase', function ( Blueprint $table) {
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
        Schema::dropIfExists('purchase');
    }
}
