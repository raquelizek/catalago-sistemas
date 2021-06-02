<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasgestaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemasgestao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dev');
            $table->string('atuacao');
            $table->string('auth');
            $table->string('diretsi');
            $table->string('sistnm');
            $table->string('sissig');
            $table->string('endereco');
            $table->string('dns');
            $table->string('pdti');
            $table->string('gac');
            $table->string('gds');
            $table->string('gnt');
            $table->string('siapegnt')->unique();
            $table->string('gns');
            $table->string('siapegns')->unique();
            $table->string('git');
            $table->string('siapegit')->unique();
            $table->string('gis');
            $table->string('siapegis')->unique();
            $table->string('prsei');
            $table->string('numerosei');
            $table->string('obsv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemasgestao');
    }
}
