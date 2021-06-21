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
            $table->increments('sist_id')->primary();
            $table->timestamps();
            $table->string('dev');
            $table->string('atuacao');
            $table->string('auth');
            $table->string('diretsi');
            $table->string('sistnm');
            $table->string('sissig');
            $table->string('endereco', 60);
            $table->boolean('status')->default(0);
            $table->boolean('dns')->default(0);
            $table->boolean('pdti')->default(0);
            $table->string('gac');
            $table->string('gds');
            $table->string('gnt');
            $table->string('siapegnt', 7)->nullable();
            $table->string('gns');
            $table->string('siapegns', 7)->nullable();
            $table->string('git');
            $table->string('siapegit', 7)->nullable();
            $table->string('gis');
            $table->string('siapegis', 7)->nullable();
            $table->boolean('prsei')->default(0);
            $table->string('numerosei', 30)->unique();
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
