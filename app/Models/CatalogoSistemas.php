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
        $table->string('dev')->nullable();
        $table->string('atuacao')->nullable();
        $table->string('auth')->nullable();
        $table->string('diretsi')->nullable();
        $table->string('sistnm')->nullable();
        $table->string('sissig')->nullable();
        $table->string('endereco', 60)->nullable();
        $table->string('status')->nullable();
        $table->string('dns')->nullable();
        $table->string('pdti')->nullable();
        $table->string('gac')->nullable();
        $table->string('gds')->nullable();
        $table->string('gnt')->nullable();
        $table->string('siapegnt', 7)->nullable();
        $table->string('gns')->nullable();
        $table->string('siapegns', 7)->nullable();
        $table->string('git')->nullable();
        $table->string('siapegit', 7)->nullable();
        $table->string('gis')->nullable();
        $table->string('siapegis', 7)->nullable();
        $table->string('prsei')->nullable();
        $table->string('numerosei', 30)->unique();
        $table->text('obsv')->nullable();
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
        $table->save();
       
    });
   
}
