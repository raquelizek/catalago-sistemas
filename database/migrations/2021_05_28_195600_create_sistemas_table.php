<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->id();
            $table->string('dev');
            $table->string('atuacao');
            $table->string('aut');
            $table->string('direts');
            $table->string('nmsis');
            $table->string('sisist');
            $table->string('end');
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
            $table->string('prosei');
            $table->string('numsei');
            $table->string('obs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
