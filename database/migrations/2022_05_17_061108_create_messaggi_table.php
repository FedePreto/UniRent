<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaggi', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->longText('contenuto');
            $table->dateTime('data')->index();
            $table->integer('mittente')->references('UserId')->on('user');
            $table->integer('destinatario')->references('UserId')->on('user');
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
        Schema::dropIfExists('messaggi');
    }
}
