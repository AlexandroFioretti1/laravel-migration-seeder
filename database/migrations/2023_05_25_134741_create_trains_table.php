<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agenzia', 100);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 100);
            $table->tinyInteger('numero_carozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
