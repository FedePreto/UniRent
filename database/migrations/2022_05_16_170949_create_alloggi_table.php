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
            $table->string('città');
            $table->string('CAP');
            $table->string('indirizzo');
            $table->int('numero');
            $table->float('prezzo');
            $table->string('descrizione');
            $table->float('superficie');
            $table->int('letti');
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
        Schema::dropIfExists('alloggi');
    }
}
