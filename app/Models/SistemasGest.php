<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use mysqli;

class SistemasGest extends Model
{


    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv'];
    public $table = 'sistemasgestao';
}


//último código adicionado 10/06 para criar a tabela se não existir e os campos!!!!!!!!!!
$db_Host = "127.0.0.1";
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'catalogosistemas';


$conn = new mysqli($db_Host, $db_username, $db_password, $db_primaryDatabase);
if (mysqli_connect_errno()) {
    printf("Não foi possível conectar ao banco de dados: %s\n", mysqli_connect_error());
    exit();
}

if (!Schema::hasTable('sistemasgestao')) {
    Schema::create('sistemasgestao', function ($table) {
        $table->increments('id');
        $table->timestamps();
        $table->string('dev');
        $table->string('atuacao');
        $table->string('auth');
        $table->string('diretsi');
        $table->string('sistnm');
        $table->string('sissig');
        $table->string('endereco');
        $table->boolean('dns');
        $table->boolean('pdti');
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
        $table->boolean('prsei');
        $table->string('numerosei')->unique();
        $table->text('obsv')->nullable();
    });
}
