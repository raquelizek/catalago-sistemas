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
            $table->string('dns')->nullable();
            $table->string('pdti')->nullable();
            $table->string('gac')->nullable();
            $table->string('gds')->nullable();
            $table->string('gnt')->nullable();
            $table->string('siapegnt')->unique();
            $table->string('gns')->nullable();
            $table->string('siapegns')->unique();
            $table->string('git')->nullable();
            $table->string('siapegit')->unique();
            $table->string('gis')->nullable();
            $table->string('siapegis')->unique();
            $table->string('prsei')->nullable();
            $table->string('numerosei')->nullable();
            $table->text('obsv')->nullable();
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
