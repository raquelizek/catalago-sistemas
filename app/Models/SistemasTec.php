<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SistemasTec extends Model
{
    protected $primaryKey = 'sistTecnicoID';
    protected $fillable = ['ambiente_hospedagem', 'prioridade', 'linguagem_v', 'framework', 'banco_v', 'intra_inter', 'nome_banco', 'ip_hospedagemapp', 'ip_hospedagembd', 'tamanho_app', 'tamanho_bd', 'ps_sistemas', 'sistemas_inte', 'ps_banco', 'banco_inte', 'ps_servico', 'servico_inte', 'end_gitinss', 'autenticacao', 'obsvr', 'sistGestaoFK'];
    public $table = 'sistemastecnico';
}

if (!Schema::hasTable('sistemastecnico')) {
    Schema::create('sistemastecnico', function ($table) {
        $table->increments('sistTecnicoID')->primary();
        $table->timestamps();
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
        $table->string('sistGestaoFK');
        $table->save();
    });
}