<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInclusoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incluso', function (Blueprint $table) {
            $table->integer('alloggio')->references('id')->on('alloggi');
            $table->integer('servizio')->references('id')->on('servizi');
            $table->primary(['alloggio','servizio']);
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
        Schema::dropIfExists('incluso');
    }
}
