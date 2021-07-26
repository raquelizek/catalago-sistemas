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
    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'status', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv', 'ambiente_hospedagem', 'prioridade', 'linguagem_v', 'framework', 'banco_v', 'intra_inter', 'nome_banco', 'ip_hospedagemapp', 'ip_hospedagembd', 'tamanho_app', 'tamanho_bd', 'ps_sistemas', 'sistemas_inte', 'ps_banco', 'banco_inte', 'ps_servico', 'servico_inte', 'end_gitinss', 'autenticacao', 'obsvr'];
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
        $table->string('siapegnt', 7);
        $table->string('gns');
        $table->string('siapegns', 7);
        $table->string('git') ;
        $table->string('siapegit', 7);
        $table->string('gis');
        $table->string('siapegis', 7);
        $table->string('prsei') ;
        $table->string('numerosei', 30)->unique();
        $table->text('obsv') ;
        $table->string('ambiente_hospedagem')->nullable();
        $table->string('prioridade')->nullable();
        $table->string('linguagem_v')->nullable();
        $table->string('framework')->nullable();
        $table->string('banco_v')->nullable();
        $table->string('intra_inter')->nullable();
        $table->string('nome_banco')->nullable();
        $table->string('ip_hospedagemapp')->nullable();
        $table->string('ip_hospedagembd')->nullable();
        $table->string('tamanho_app')->nullable();
        $table->string('tamanho_bd')->nullable();
        $table->string('ps_sistemas')->nullable();
        $table->string('sistemas_inte')->nullable();
        $table->string('ps_banco')->nullable();
        $table->string('banco_inte')->nullable();
        $table->string('ps_servico')->nullable();
        $table->string('servico_inte')->nullable();
        $table->string('end_gitinss')->nullable();
        $table->string('autenticacao')->nullable();
        $table->text('obsvr')->nullable();
       
        
       
    });

   
   
}
