<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use mysqli;

class CatalogoSistemas extends Model
{

    protected $primaryKey = 'sistemasID';
    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'status', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv', 'ambiente_hospedagem', 'prioridade', 'linguagem_v', 'framework', 'banco_v', 'intra_inter', 'nome_banco', 'ip_hospedagemapp', 'ip_hospedagembd', 'tamanho_app', 'tamanho_bd', 'ps_sistemas', 'sistemas_inte', 'ps_banco', 'banco_inte', 'ps_servico', 'servico_inte', 'end_gitinss', 'autenticacao', 'obsvr', 'sistGestaoFK'];
    public $table = 'TB_SISTEMAS';
}



if (!Schema::hasTable('TB_SISTEMAS')) {
    Schema::create('TB_SISTEMAS', function ($table) {
        $table->increments('sistemasID')->primary();
        $table->timestamps();
        $table->string('dev');
        $table->string('atuacao');
        $table->string('auth');
        $table->string('diretsi');
        $table->string('sistnm');
        $table->string('sissig');
        $table->string('endereco', 60);
        $table->string('status');
        $table->string('dns');
        $table->string('pdti');
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
        $table->string('prsei');
        $table->string('numerosei', 30)->unique();
        $table->text('obsv')->nullable();
        $table->string('ambiente_hospedagem');
        $table->string('prioridade');
        $table->string('linguagem_v');
        $table->string('framework');
        $table->string('banco_v');
        $table->string('intra_inter')->nullable();
        $table->string('nome_banco');
        $table->string('ip_hospedagemapp');
        $table->string('ip_hospedagembd');
        $table->string('tamanho_app');
        $table->string('tamanho_bd');
        $table->string('ps_sistemas');
        $table->string('sistemas_inte')->nullable();
        $table->string('ps_banco');
        $table->string('banco_inte')->nullable();
        $table->string('ps_servico');
        $table->string('servico_inte')->nullable();
        $table->string('end_gitinss');
        $table->string('autenticacao');
        $table->string('obsvr')->nullable();
        $table->save();
    });
   
}
