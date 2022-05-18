<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContrattoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataInizio');
            $table->date('dataFine');
            $table->integer('locatario')->references('UserId')->on('user');
            $table->integer('alloggio')->references('id')->on('alloggi');
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
        Schema::dropIfExists('contratto');
    }
}
