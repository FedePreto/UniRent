<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloggisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloggis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('citta');
            $table->string('CAP');
            $table->string('indirizzo');
            $table->integer('numero');
            $table->float('prezzo');
            $table->longText('descrizione');
            $table->float('superficie');
            $table->integer('letti');
            $table->boolean('opzionato');
            $table->boolean('isPostoletto');
            
            
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
