<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContattiInteressiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatti_interessi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contatti_id');
            $table->foreign('contatti_id')->references('id')->on('contatti');
            $table->integer('interessi_id');
            $table->foreign('interessi_id')->references('id')->on('interessi');
            $table->boolean('cancellato')->default(false);
            $table->timestamp('data_creazione')->default(DB::raw('CURRENT_TIMESTAMP')); //data creazione default sysdate
            $table->timestamp('data_modifica')->default(DB::raw('CURRENT_TIMESTAMP')); //data modifica default sysdate
            $table->timestamp('data_cancellazione')->nullable(); //data cancellazione
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatti_interessi');
    }
}
