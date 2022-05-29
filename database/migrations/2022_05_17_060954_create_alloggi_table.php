<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloggi', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('titolo',30);
            $table->string('regione');
            $table->string('citta')->index();
            $table->string('cap');
            $table->string('indirizzo');
            $table->integer('numero');
            $table->float('prezzo')->index();
            $table->longText('descrizione');
            $table->float('superficie')->index();
            $table->integer('letti')->index();
            $table->boolean('opzionato')->index()->default(0);
            $table->boolean('tipologia')->index();
            $table->integer('locatore')->references('id')->on('users');
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
        Schema::dropIfExists('alloggis');
    }
}
